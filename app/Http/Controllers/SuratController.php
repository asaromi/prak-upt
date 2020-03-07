<?php

namespace App\Http\Controllers;

use App\Surat;
use App\User;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat = Surat::select('id', 'user', 'status', 'tgl_diambil', 'keterangan', 'created_at')->where('user', auth()->user()->id)->with('users:id,name,angkatan,departemen')->get();
        // dd($surat);
        return view('surat/index', compact('surat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::with('dept')->select('id','name', 'angkatan', 'departemen', 'email')->find(auth()->user()->id);
        return view('surat/create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user' => ['required'],
            'semester' => ['required', 'string'],
            'tahun' => ['required', 'string', 'min:4', 'max:4'],
            'keterangan' => ['required', 'string'],
        ]);
        
        $surat = new Surat([
            'user' => $request->user,
            'keterangan' => $request->keterangan,
        ]);

        $surat->semester = "{$request->tahun} ({$request->semester})";
        $saved = $surat->save();
        if ($saved)
            return redirect('surat');
    }

    /**
     * Display the specified resou
     * @param  \App\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $surat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit(Surat $surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surat $surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $surat)
    {
        //
    }
}
