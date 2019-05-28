<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\JumlahPenduduk;
use App\Http\Resources\JumlahPenduduk as JumlahPendudukResource;

class JumlahPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlahPenduduks = JumlahPenduduk::paginate(15);

        return JumlahPendudukResource::collection($jumlahPenduduks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jumlahPenduduk = $request -> isMethod('put') ? JumlahPenduduk::findOrFail
        ($request->jumlahPenduduk_id) : new JumlahPenduduk;

        $jumlahPenduduk->id = $request -> input('jumlahPenduduk_id');
        $jumlahPenduduk->kecamatan = $request -> input('kecamatan');
        $jumlahPenduduk->kota_lakilaki = $request -> input('kota_lakilaki');
        $jumlahPenduduk->kota_perempuan = $request -> input('kota_perempuan');
        $jumlahPenduduk->kota_lakilaki_dan_perempuan = $request -> input('kota_lakilaki_dan_perempuan');
        $jumlahPenduduk->desa_lakilaki = $request -> input('desa_lakilaki');
        $jumlahPenduduk->desa_perempuan = $request -> input('desa_perempuan');
        $jumlahPenduduk->desa_lakilaki_dan_perempuan = $request -> input('desa_lakilaki_dan_perempuan');
        $jumlahPenduduk->total_lakilaki = $request -> input('total_lakilaki');
        $jumlahPenduduk->total_perempuan = $request -> input('total_perempuan');
        $jumlahPenduduk->total_lakilaki_dan_perempuan = $request -> input('total_lakilaki_dan_perempuan');
        $jumlahPenduduk->kabupaten = $request -> input('kabupaten');

        if($jumlahPenduduk->save()){
            return new JumlahPendudukResource($jumlahPenduduk);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jumlahPenduduk = JumlahPenduduk::findOrFail($id);

        return new JumlahPendudukResource($jumlahPenduduk);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jumlahPenduduk = JumlahPenduduk::findOrFail($id);

        if($jumlahPenduduk->delete()){
            return new JumlahPendudukResource($jumlahPenduduk);
        }
    }
}
