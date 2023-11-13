<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\About;
use App\Models\Member;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function indexo(): View
    {
        //get posts
        $bot = About::latest()->paginate(5);
        $mem = Member::latest()->paginate(5);

        //render view with posts
        return view('about', compact('bot','mem'));
    }

    public function index(): View
    {
        //get posts
        $bot = About::latest()->paginate(5);


        //render view with posts
        return view('admin.about.index', compact('bot'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {

        return view('admin.about.create');
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
            'nama' => 'required',
            'deskripsi' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'facebook' => 'required',
            'insta' => 'required'
        ]);
        //upload image
        $foto = $request->file('foto');
        $foto->storeAs('public/about', $foto->hashName());

        //create post
        About::create([
            'foto'     => $foto->hashName(),
            'nama'     => $request->nama,
            'deskripsi' => $request->deskripsi,
            'telp' => $request->telp,
            'email'      => $request->email,
            'alamat'      => $request->alamat,
            'facebook'      => $request->facebook,
            'insta'      => $request->insta
        ]);
        //redirect to index
        return redirect()->route('aboutus.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $bot = About::findOrFail($id);


        //render view with post
        return view('admin.about.edit', compact('bot'));
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
            'foto'     => 'required|mimes:jpeg,jpg,png|max:2048',
            'nama' => 'required',
            'deskripsi' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'facebook' => 'required',
            'insta' => 'required'
        ]);

        //get post by ID
        $bot = About::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new image
            $foto = $request->file('foto');
            $foto->storeAs('public/about', $foto->hashName());

            //delete old image
            Storage::delete('public/about/'.$bot->foto);

            //update post with new image
            $bot->update([
                'foto'     => $foto->hashName(),
                'nama'     => $request->nama,
                'deskripsi' => $request->deskripsi,
                'telp' => $request->telp,
                'email'      => $request->email,
                'alamat' => $request->alamat,
                'facebook'      => $request->facebook,
                'insta'      => $request->insta
            ]);

        } else {

            //update post without image
            $bot->update([
                'nama'     => $request->nama,
            'deskripsi' => $request->deskripsi,
            'telp' => $request->telp,
            'email'      => $request->email,
            'alamat'      => $request->alamat,
            'facebook'      => $request->facebook,
            'insta'      => $request->insta
            ]);
        }

        //redirect to index
        return redirect()->route('aboutus.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $bot = About::findOrFail($id);

        //delete image
        Storage::delete('public/about/'. $bot->foto);

        //delete post
        $bot->delete();

        //redirect to index
        return redirect()->route('aboutus.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
