<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Member;


//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $mem = Member::latest()->paginate(5);


        //render view with posts
        return view('admin.member.index', compact('mem'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {

        return view('admin.member.create');
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
            'role' => 'required',
            'telp' => 'required',
            'twitter' => 'required',
            'insta' => 'required'
        ]);
        //upload image
        $foto = $request->file('foto');
        $foto->storeAs('public/member', $foto->hashName());

        //create post
        Member::create([
            'foto'     => $foto->hashName(),
            'nama'     => $request->nama,
            'role' => $request->role,
            'telp' => $request->telp,
            'twitter'      => $request->twitter,
            'insta'      => $request->insta
        ]);
        //redirect to index
        return redirect()->route('members.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $mem = Member::findOrFail($id);


        //render view with post
        return view('admin.member.edit', compact('mem'));
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
            'role' => 'required',
            'telp' => 'required',
            'twitter' => 'required',
            'insta' => 'required'
        ]);

        //get post by ID
        $mem = Member::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new image
            $foto = $request->file('foto');
            $foto->storeAs('public/member', $foto->hashName());

            //delete old image
            Storage::delete('public/member/'.$mem->foto);

            //update post with new image
            $mem->update([
                'foto'     => $foto->hashName(),
                'nama'     => $request->nama,
                'role' => $request->role,
                'telp' => $request->telp,
                'twitter'      => $request->twitter,
                'insta'      => $request->insta
            ]);

        } else {

            //update post without image
            $mem->update([
                'nama'     => $request->nama,
            'role' => $request->role,
            'telp' => $request->telp,
            'twitter'      => $request->twitter,
            'insta'      => $request->insta
            ]);
        }

        //redirect to index
        return redirect()->route('members.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $mem = Member::findOrFail($id);

        //delete image
        Storage::delete('public/member/'. $mem->foto);

        //delete post
        $mem->delete();

        //redirect to index
        return redirect()->route('members.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
