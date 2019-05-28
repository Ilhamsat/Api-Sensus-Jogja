<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ketenagakerjaan extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'Pendidikan Tertinggi yang Ditamatkan' => $this->pendidikan_tertinggi_yang_ditamatkan,
            'Pertanian Tanaman Padi dan Palawijaya' => $this->pertanian_tanaman_padi_dan_palawijaya,
            'Hortikultura' => $this->hortikultura,
            'Perkebunan' => $this->perkebunan,
            'Perikanan' => $this->perikanan,
            'Peternakan' => $this->peternakan,
            'Kehutanan' => $this->kehutanan,            
            'Pertambangan dan Penggalian' => $this->pertambangan_dan_penggalian,
            'Industri Pengolahan' => $this->industri_pengolahan,
            'Listrik dan Gas' => $this->listrik_dan_gas,
            'Konstruksi' => $this->konstruksi,
            'Perdagangan' => $this->perdagangan,
            'Hotel dan Rumah Makan' => $this->hotel_dan_rumah_makan,
            'Transportasi dan Pergudangan' => $this->transportasi_dan_pergudangan,
            'Informasi dan Komunikasi' => $this->informasi_dan_komunikasi,
            'Keuangan dan Asuransi' => $this->keuangan_dan_asuransi,
            'Jasa Pendidikan' => $this->jasa_pendidikan,
            'Jasa Kesehatan' => $this->jasa_kesehatan,
            'Jasa Kemasyarakatan' => $this->jasa_kemasyarakatan,
            'Lainnya' => $this->lainnya,
            'Jumlah' => $this->jumlah,
            'Kabupaten' => $this->kabupaten,
        ];
    }
}
