<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JumlahKelahiran extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return[
            'id' => $this->id,
            'Kelompok Umur' => $this->umur,
            'Anak Lahir Hidup 0' => $this->anak_lahir_hidup_0,
            'Anak Lahir Hidup 1' => $this->anak_lahir_hidup_1,
            'Anak Lahir Hidup 2' => $this->anak_lahir_hidup_2,
            'Anak Lahir Hidup 3' => $this->anak_lahir_hidup_3,
            'Anak Lahir Hidup 4' => $this->anak_lahir_hidup_4,
            'Anak Lahir Hidup 5' => $this->anak_lahir_hidup_5,            
            'Anak Lahir Hidup 6' => $this->anak_lahir_hidup_6,
            'Anak Lahir Hidup 7' => $this->anak_lahir_hidup_7,
            'Anak Lahir Hidup 8' => $this->anak_lahir_hidup_8,
            'Anak Lahir Hidup 9' => $this->anak_lahir_hidup_9,
            'Anak Lahir Hidup 10+' => $this->anak_lahir_hidup_10keatas,
            'Kabupaten' => $this->kabupaten,
        ];

    }

    public function with($request){
        return[
            'version' => '1.0.0',
            'sumber' => url('http://bps2010.com')
        ];
    }
}
