<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pendidikan;
use App\Http\Resources\Pendidikan as PendidikanResource;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikans = Pendidikan::paginate(15);

        return PendidikanResource::collection($pendidikans);
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
        $pendidikan = $request -> isMethod('put') ? Pendidikan::findOrFail
        ($request->pendidikan_id) : new Pendidikan;

        $pendidikan->id = $request -> input('pendidikan_id');
        $pendidikan->tidak_atau_belum_pernah_sekolah = $request -> input('tidak_atau_belum_pernah_sekolah');
        $pendidikan->tidak_atau_belum_tamat_sd = $request -> input('tidak_atau_belum_tamat_sd');
        $pendidikan->sd_mi_sederajat = $request -> input('sd_mi_sederajat');
        $pendidikan->smp_mts_sederajat = $request -> input('smp_mts_sederajat');
        $pendidikan->sma_ma_sederajat = $request -> input('sma_ma_sederajat');
        $pendidikan->smk = $request -> input('smk');
        $pendidikan->diploma_1_2 = $request -> input('diploma_1_2');
        $pendidikan->diploma_3 = $request -> input('diploma_3');
        $pendidikan->diploma4_s1 = $request -> input('diploma4_s1');
        $pendidikan->s2_s3 = $request -> input('s2_s3');
        $pendidikan->tidak_terjawab = $request -> input('tidak_terjawab');
        $pendidikan->jumlah = $request -> input('jumlah');
        $pendidikan->kabupaten = $request -> input('kabupaten');

        if($pendidikan->save()){
            return new PendidikanResource($pendidikan);
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
        $pendidikan = Pendidikan::findOrFail($id);

        return new PendidikanResource($pendidikan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);

        if($pendidikan->delete()){
            return new PendidikanResource($pendidikan);
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
            $list = Pendidikan::where('kabupaten','like','%'.$request->input('kabupaten').'%')->get();
        }  
        return response()->json($list);
    }
}
