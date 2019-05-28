<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\JumlahKelahiran;
use App\Http\Resources\JumlahKelahiran as JumlahKelahiranResource;

class JumlahKelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlahKelahirans = JumlahKelahiran::paginate(15);

        return JumlahKelahiranResource::collection($jumlahKelahirans);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jumlahKelahiran = $request -> isMethod('put') ? JumlahKelahiran::findOrFail
        ($request->jumlahKelahiran_id) : new JumlahKelahiran;

        $jumlahKelahiran->id = $request -> input('jumlahKelahiran_id');
        $jumlahKelahiran->anak_lahir_hidup_0 = $request -> input('anak_lahir_hidup_0');
        $jumlahKelahiran->anak_lahir_hidup_1 = $request -> input('anak_lahir_hidup_1');
        $jumlahKelahiran->anak_lahir_hidup_2 = $request -> input('anak_lahir_hidup_2');
        $jumlahKelahiran->anak_lahir_hidup_3 = $request -> input('anak_lahir_hidup_3');
        $jumlahKelahiran->anak_lahir_hidup_4 = $request -> input('anak_lahir_hidup_4');
        $jumlahKelahiran->anak_lahir_hidup_5 = $request -> input('anak_lahir_hidup_5');
        $jumlahKelahiran->anak_lahir_hidup_6 = $request -> input('anak_lahir_hidup_6');
        $jumlahKelahiran->anak_lahir_hidup_7 = $request -> input('anak_lahir_hidup_7');
        $jumlahKelahiran->anak_lahir_hidup_8 = $request -> input('anak_lahir_hidup_8');
        $jumlahKelahiran->anak_lahir_hidup_9 = $request -> input('anak_lahir_hidup_9');
        $jumlahKelahiran->anak_lahir_hidup_10keatas = $request -> input('anak_lahir_hidup_10keatas');
        $jumlahKelahiran->umur = $request -> input('umur');
        $jumlahKelahiran->kabupaten = $request -> input('kabupaten');

        if($jumlahKelahiran->save()){
            return new JumlahKelahiranResource($jumlahKelahiran);
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
        $jumlahKelahiran = JumlahKelahiran::findOrFail($id);

        return new JumlahKelahiranResource($jumlahKelahiran);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jumlahKelahiran = JumlahKelahiran::findOrFail($id);

        if($jumlahKelahiran->delete()){
            return new JumlahKelahiranResource($jumlahKelahiran);
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
            $list = JumlahKelahiran::where('kabupaten','like','%'.$request->input('kabupaten').'%')->get();
        }  
        return response()->json($list);
    }

}