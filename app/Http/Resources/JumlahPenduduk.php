<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JumlahPenduduk extends JsonResource
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
            'Kecamatan' => $this->kecamatan,
            'Kota Laki-Laki' => $this->kota_lakilaki,
            'Kota Perempuan' => $this->kota_perempuan,
            'Kota Laki-Laki dan Perempuan' => $this->kota_lakilaki_dan_perempuan,
            'Desa Laki-Laki' => $this->desa_lakilaki,
            'Desa Perempuan' => $this->desa_perempuan,
            'Desa Laki-Laki dan Perempuan' => $this->desa_lakilaki_dan_perempuan,            
            'Total Laki-Laki' => $this->total_lakilaki,
            'Total Perempuan' => $this->total_perempuan,
            'Total Laki-Laki dan Perempuan' => $this->total_lakilaki_dan_perempuan,
            'Kabupaten' => $this->kabupaten,
        ];
    }
}
