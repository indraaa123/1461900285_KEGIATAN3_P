<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){

        $buku = Buku::all();
        return view('buku0285', ['buku' => $buku]);
    }

    public function create(){

        return view('buku_tambah0285');
    }

    public function store(Request $request){

        Buku::create([

            'buku_id' => $request->buku_id,
            'buku_judul' => $request->buku_judul,
        ]);

        return redirect('buku0285');
    }

    public function show($id){


    }

    public function edit($id){

        $buku = Buku::find($id);

        return view('buku_edit0285', ['buku' => $buku]);

    }

    public function update(Request $request, $id){

        $buku = Buku::find($id);
        $buku->buku_id = $request->buku_id;
        $buku->buku_judul = $request->buku_judul;
        $buku->save();

        return redirect('buku0285');

    }

    public function destroy($id){

        $buku = Buku::find($id);
        $buku->delete();

        return reirect('buku0285');
    }
}