<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Bureau;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function index()
    {
        return view('dashboard',[
            'destinations'=>Destination::all()
        ]);
    }

    public function indexAdmin()
    {
        return view('admin.dashboard',[
            'destinations'=>Destination::all()
        ]);
    }
    
    public function create()
    {
        return view('admin.tambah', [
            'country' => Country::all(),
            'bureau' => Bureau::all()
        ]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'tujuan' => 'required|max:255',
            'id_wilayah' => 'required',
            'id_biro' => 'required',
            'deskripsi' => 'required|max:255',
            'harga' => 'required',
            'gambar_tujuan' => 'image|file|max:15360'
        ]);

        if ($request->file('gambar_tujuan')) {
            $validateData['gambar_tujuan'] = $request->file('gambar_tujuan')->store('images');
        }

        Destination::create($validateData);
        return redirect('/admin12345')->with('success', 'Destination has been added !');
    }

    public function destroy(Destination $destination)
    {
        Destination::destroy($destination->id);
        return redirect('/admin12345')->with('success', 'Data has been deleted !');
    }

    public function edit(Destination $destination)
    {
        return view('admin.edit', [
            'country' => Country::all(),
            'bureau' => Bureau::all(),
            'destination' => $destination
        ]);
    }

    public function update(Request $request, Destination $destination)
    {
        $validateData = $request->validate([
            'tujuan' => 'required|max:255',
            'id_wilayah' => 'required',
            'id_biro' => 'required',
            'deskripsi' => 'required|max:255',
            'harga' => 'required',
            'gambar_tujuan' => 'image|file|max:15360'
        ]);

        if ($request->file('gambar_tujuan')) {
            $validateData['gambar_tujuan'] = $request->file('gambar_tujuan')->store('images');
        }
        
        Destination::where('id', $destination->id)->update($validateData);
        return redirect('/admin12345')->with('success', 'Book has been Updated !');
    }
}
