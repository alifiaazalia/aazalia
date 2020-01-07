<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model
{
    protected $table = 'data_diri_pemohon';
    protected $fillable = ['user_id','nama','avatar','nip','jk','unit_kerja','tempat_lahir','tgl_lahir','agama','status','alamat','jabatan','pangkat','jenjang_pend','jurusan','univ','tgl_mulai','tgl_akhir','beasiswa','alasan_perpanjangan','jml_wkt_perp'];
}
