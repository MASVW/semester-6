<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //Listing Barang
    public function index(){
        $barang = Barang::all();
        return view('welcome', [
            'title' => 'Home Page',
            'barang' => $barang
        ]);
    }

    public function form(){
        return view ('barang.form', [
            'title' => 'Filling Form'
        ]);
    }

    public function create(Request $request){
        $validatedItems = $request->validate([
            "name" => 'required|string|min:10|max:40',
            "price" => 'required|integer|min:0|max:10000000000',
        ]);
        Barang::create([
            "nama" => $validatedItems['name'],
            "harga" => $validatedItems['price']
        ]);
        return redirect('/');
    }
    public function show(Barang $barang){
        return view('barang.spesifik', [
            'title' => 'Spesifik Barang',
            'barang' => $barang
        ]);
    }
    public function edit(Barang $barang){
        return view('barang.form', [
            'title' => 'Edit Item',
            'barang' => $barang
        ]);
    }
    public function update(Barang $barang, Request $request){
        $validatedItems = $request->validate([
            "name" => 'required|string|min:10|max:40',
            "price" => 'required|integer|min:0|max:10000000000',
        ]);
        
        $barang->update([
            'nama' => $validatedItems['name'],
            'harga' => $validatedItems['price']
        ]);
        
        return redirect(route('home'));
    }
    public function delete(Barang $barang){
        $barang->delete();
        return redirect(route('home'));
    }
}
