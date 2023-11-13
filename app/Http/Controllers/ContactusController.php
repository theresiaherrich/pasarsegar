<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Contactus;
use App\Models\User;
use App\Models\About;


//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index1()
    {
        $con = Contactus::all();
        $us = User::all();
        $bot = About::latest()->paginate(5);
        return view('contact',compact('con','us','bot'));
    }

    public function store(Request $request): RedirectResponse
    {
        if(auth()->check()){
            Contactus::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'pesan' => $request->pesan
            ]);
            return redirect('/contact')->with(['success' => 'Data Berhasil Disimpan!']);
        }
        return redirect('login');
    }
    public function index()
    {
        $con = Contactus::latest()->paginate(5);
        return view('admin.contact.index', compact('con'));
    }

    public function destroy($id){
        $con = Contactus::find($id);
        $con->delete();
        return back() ->with('success', 'Data Behasil Di Hapus!');
    }
}
