<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itemkategori = Kategori::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'Kategori Produk',
                    'itemkategori' => $itemkategori);
        return view('admin.kategori.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array('title' => 'Form Kategori');
        return view('admin.kategori.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori'=>'required',
            'foto' => 'required|mimes:jpeg,jpg,png|max:2048',
        ]);
        $foto = $request->file('foto');
        $foto->storeAs('public/kategori', $foto->hashName());

        Kategori::create([
            'foto'     => $foto->hashName(),
            'nama_kategori'     => $request->nama_kategori,
        ]);

        return redirect('/datakategori')->with('success', 'Data kategori berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemkategori = Kategori::findOrFail($id);//cari berdasarkan id = $id,
        // kalo ga ada error page not found 404
        $data = array('title' => 'Form Edit Kategori',
                    'itemkategori' => $itemkategori);
        return view('kategori.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kategori'=>'required',
            'slug_kategori' => 'required',
            'deskripsi_kategori' => 'required',
        ]);
        $itemkategori = Kategori::findOrFail($id);//cari berdasarkan id = $id,
        // kalo ga ada error page not found 404
        $slug = \Str::slug($request->slug_kategori);//slug kita gunakan nanti pas buka produk per kategori
        // kita validasi dulu, biar tidak ada slug yang sama
        $validasislug = Kategori::where('id', '!=', $id)//yang id-nya tidak sama dengan $id
                                ->where('slug_kategori', $slug)
                                ->first();
        if ($validasislug) {
            return back()->with('error', 'Slug sudah ada, coba yang lain');
        } else {
            $inputan = $request->all();
            $inputan['slug'] = $slug;
            $itemkategori->update($inputan);
            return redirect()->route('kategori.index')->with('success', 'Data berhasil diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemkategori = Kategori::findOrFail($id);//cari berdasarkan id = $id,
        // kalo ga ada error page not found 404
        if (is_countable($itemkategori->produk) && count($itemkategori->produk) > 0) {
        // if (count($itemkategori->produk) > 0) {
            // dicek dulu, kalo ada produk di dalam kategori maka proses hapus dihentikan
            return back()->with('error', 'Hapus dulu produk di dalam kategori ini, proses dihentikan');
        } else {
            if ($itemkategori->delete()) {
                return back()->with('success', 'Data berhasil dihapus');
            } else {
                return back()->with('error', 'Data gagal dihapus');
            }
        }
    }
    public function uploadimage(Request $request) {
        $this->validate($request, [
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori_id' => 'required',
        ]);
        $itemuser = $request->user();
        $itemkategori = Kategori::where('user_id', $itemuser->id)
                                ->where('id', $request->kategori_id)
                                ->first();
        if ($itemkategori) {
            $fileupload = $request->file('image');
            $folder = 'assets/images';
            $itemgambar = (new ImageController)->upload($fileupload, $itemuser, $folder);
            $inputan['foto'] = $itemgambar->url;//ambil url file yang barusan diupload
            $itemkategori->update($inputan);
            return back()->with('success', 'Image berhasil diupload');
        } else {
            return back()->with('error', 'Kategori tidak ditemukan');
        }
    }
}
