<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pendidikan extends JsonResource
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
            'Tidak/Belum Pernah Sekolah' => $this->tidak_atau_belum_pernah_sekolah,
            'Tidak/Belum Tamat SD' => $this->tidak_atau_belum_tamat_sd,
            'SD/MI/Sederajat' => $this->sd_mi_sederajat,
            'SMP/MTS/Sederajat' => $this->smp_mts_sederajat,
            'SMA/MA/Sederajat' => $this->sma_ma_sederajat,
            'SMK' => $this->smk,            
            'Diploma I/II' => $this->diploma_1_2,
            'Diploma III' => $this->diploma_3,
            'Diploma IV/S1' => $this->diploma4_s1,
            'S2/S3' => $this->s2_s3,
            'Tidak Terjawab' => $this->tidak_terjawab,
            'Jumlah' => $this->jumlah,
            'Kabupaten' => $this->kabupaten,
        ];
    }
}
