<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Produk;
use App\Models\Kategori;


//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $prod = Produk::with('produk')->paginate(5);


        //render view with posts
        return view('admin.produk.index', compact('prod'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        $kat = Kategori::all();
        return view('admin.produk.create', compact('kat'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {


        //validate form
        $this->validate($request, [
            'foto'     => 'required|mimes:jpeg,jpg,png|max:2048',
            'kode_produk' => 'required|unique:produk',
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'kategori_id' => 'required',
            'satuan' => 'required',
            'stock' => 'required',
            'harga' => 'required|numeric'
        ]);


        $itemuser = $request->user();//ambil data user yang login
        $inputan['user_id'] = $itemuser->id;
        //upload image
        $foto = $request->file('foto');
        $foto->storeAs('public/produk', $foto->hashName());

        //create post
        Produk::create([
            'foto'     => $foto->hashName(),
            'kode_produk'   => $request->kode_produk,
            'nama_produk'     => $request->nama_produk,
            'deskripsi_produk'   => $request->deskripsi_produk,
            'kategori_id'      => $request->kategori_id,
            'satuan' => $request->satuan,
            'stock'      => $request->stock,
            'harga'      => $request->harga
        ]);
        $itemproduk = Produk::create($inputan);

        //redirect to index
        return redirect('/dataproduk')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    // public function show(string $id): View
    // {
    //     //get post by ID
    //     $pass = Pasien::findOrFail($id);

    //     //render view with post
    //     return view('pasien.show', compact('post'));
    // }
/**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $prod = Produk::findOrFail($id);
        $kat = Kategori::all();

        //render view with post
        return view('admin.produk.edit', compact('prod', 'kat'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'foto'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'kode_produk' => 'required|unique:produk',
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'kategori_id' => 'required',
            'satuan' => 'required',
            'stock' => 'required',
            'harga' => 'required|numeric'
        ]);

        //get post by ID
        $prod = Produk::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new image
            $foto = $request->file('foto');
            $foto->storeAs('public/produk', $foto->hashName());

            //delete old image
            Storage::delete('public/produk/'.$prod->foto);

            //update post with new image
            $prod->update([
                'foto'     => $foto->hashName(),
            'nama_produk'     => $request->nama_produk,
            'kode_produk'   => $request->kode_produk,
            'deskripsi_produk'   => $request->deskripsi_produk,
            'kategori_id'      => $request->kategori_id,
            'satuan' => $request->satuan,
            'stock'      => $request->stock,
            'harga'      => $request->harga
            ]);

        } else {

            //update post without image
            $prod->update([
                'nama_produk'     => $request->nama_produk,
            'kode_produk'   => $request->kode_produk,
            'deskripsi_produk'   => $request->deskripsi_produk,
            'kategori_id'      => $request->kategori_id,
            'satuan' => $request->satuan,
            'stock'      => $request->stock,
            'harga'      => $request->harga
            ]);
        }

        //redirect to index
        return redirect('/dataproduk')->with(['success' => 'Data Berhasil Diubah!']);
    }

/**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $prod = Produk::findOrFail($id);

        //delete image
        Storage::delete('public/produk/'. $prod->foto);

        //delete post
        $prod->delete();

        //redirect to index
        return redirect('/dataproduk')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
