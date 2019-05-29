<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Ketenagakerjaan;
use App\Http\Resources\Ketenagakerjaan as KetenagakerjaanResource;

class KetenagakerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ketenagakerjaans = Ketenagakerjaan::paginate(15);

        return KetenagakerjaanResource::collection($ketenagakerjaans);
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
        $ketenagakerjaan = $request -> isMethod('put') ? Ketenagakerjaan::findOrFail
        ($request->ketenagakerjaan_id) : new Ketenagakerjaan;

        $ketenagakerjaan->id = $request -> input('ketenagakerjaan_id');
        $ketenagakerjaan->pendidikan_tertinggi_yang_ditamatkan = $request -> input('pendidikan_tertinggi_yang_ditamatkan');
        $ketenagakerjaan->pertanian_tanaman_padi_dan_palawijaya = $request -> input('pertanian_tanaman_padi_dan_palawijaya');
        $ketenagakerjaan->hortikultura = $request -> input('hortikultura');
        $ketenagakerjaan->perkebunan = $request -> input('perkebunan');
        $ketenagakerjaan->perikanan = $request -> input('perikanan');
        $ketenagakerjaan->peternakan = $request -> input('peternakan');
        $ketenagakerjaan->kehutanan = $request -> input('kehutanan');
        $ketenagakerjaan->pertambangan_dan_penggalian = $request -> input('pertambangan_dan_penggalian');
        $ketenagakerjaan->industri_pengolahan = $request -> input('industri_pengolahan');
        $ketenagakerjaan->listrik_dan_gas = $request -> input('listrik_dan_gas');
        $ketenagakerjaan->konstruksi = $request -> input('konstruksi');
        $ketenagakerjaan->perdagangan = $request -> input('perdagangan');
        $ketenagakerjaan->hotel_dan_rumah_makan = $request -> input('hotel_dan_rumah_makan');
        $ketenagakerjaan->transportasi_dan_pergudangan = $request -> input('transportasi_dan_pergudangan');
        $ketenagakerjaan->informasi_dan_komunikasi = $request -> input('informasi_dan_komunikasi');
        $ketenagakerjaan->keuangan_dan_asuransi = $request -> input('keuangan_dan_asuransi');
        $ketenagakerjaan->jasa_pendidikan = $request -> input('jasa_pendidikan');
        $ketenagakerjaan->jasa_kesehatan = $request -> input('jasa_kesehatan');
        $ketenagakerjaan->jasa_kemasyarakatan = $request -> input('jasa_kemasyarakatan');
        $ketenagakerjaan->lainnya = $request -> input('lainnya');
        $ketenagakerjaan->jumlah = $request -> input('jumlah');
        $ketenagakerjaan->kabupaten = $request -> input('kabupaten');

        if($ketenagakerjaan->save()){
            return new KetenagakerjaanResource($ketenagakerjaan);
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
        $ketenagakerjaan = Ketenagakerjaan::findOrFail($id);

        return new KetenagakerjaanResource($ketenagakerjaan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ketenagakerjaan = Ketenagakerjaan::findOrFail($id);

        if($ketenagakerjaan->delete()){
        return new KetenagakerjaanResource($ketenagakerjaan);
        }
    }

    public function getData(Request $request){
        $list = [];
    //     if($request->input('gender') !=null){
    //         $list = Post::where('gender','=',$request->input('gender'))->get();
    //     }
        
    //    else if($request->input('lokasi') !=null){
    //         $list = Post::where('lokasi','like','%'.$request->input('lokasi').'%')->get();
    //     }
        if($request->input('kabupaten') !=null){
            $list = Ketenagakerjaan::where('kabupaten','like','%'.$request->input('kabupaten').'%')->get();
        }  
        return response()->json($list);
    }
}
