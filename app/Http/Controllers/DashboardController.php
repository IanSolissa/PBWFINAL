<?php

namespace App\Http\Controllers;

use App\Models\Artis;
use App\Models\Berita;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $testing = Berita::all();
        // dd($testing->artis);
        return view('BackEnd.Dashboard.MainDashboard',[
            'Berita'=>Berita::all(),
            'Artis'=>Artis::all(),
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'judul_berita'=>'required||max:20',
            'id_artis'=>'required',
            'isi_berita'=>'required',
        ]);
        Berita::create($validation);
        return redirect('/Dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Berita::destroy($id);
        return redirect('/Dashboard');

    }
}
