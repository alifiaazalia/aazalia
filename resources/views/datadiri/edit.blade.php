@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data</h3>
								</div>
								<div class="panel-body">
                                <form action="/datadiri/{{$datadiri->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" value="{{$datadiri->nama}}">
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlTextarea1">Foto Profil</label>
                                    <input type="file" name="avatar" class="form-control">  
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">NIP</label>
                                    <input name="nip" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIP" value="{{$datadiri->nip}}">
                                </div>    
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                    <select name="jk" class="form-control" id="exampleFormControlSelect1">
                                    <option value="L" @if($datadiri->jk == 'L') selected @endif>Laki-Laki</option>
                                    <option value="P"@if($datadiri->jk == 'P') selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Unit kerja</label>
                                    <select name="unit_kerja" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Sekretariat Jenderal" @if($datadiri->unit_kerja == 'Sekretariat Jenderal') selected @endif>Sekretariat Jenderal</option>
                                    <option value="Biro Sekretariat Pimpinan" @if($datadiri->unit_kerja == 'Biro Sekretariat Pimpinan') selected @endif>Biro Sekretariat Pimpinan</option>
                                    <option value="Biro Hubungan Masyarakat dan Kerja Sama Internasional" @if($datadiri->unit_kerja == 'Biro Hubungan Masyarakat dan Kerja Sama Internasional') selected @endif>Biro Hubungan Masyarakat dan Kerja Sama Internasional</option>
                                    <option value="Biro Sumber Daya Manusia" @if($datadiri->unit_kerja == 'Biro Sumber Daya Manusia') selected @endif>Biro Sumber Daya Manusia</option>
                                    <option value="Biro Keuangan" @if($datadiri->unit_kerja == 'Biro Keuangan') selected @endif>Biro Keuangan</option>
                                    <option value="Biro Teknologi Informasi" @if($datadiri->unit_kerja == 'Biro Teknologi Informasi') selected @endif>Biro Teknologi Informasi</option>
                                    <option value="Biro Umum" @if($datadiri->unit_kerja == 'Biro Umum') selected @endif>Biro Umum</option>
                                    <option value="Pusat Pendidikan dan Pelatihan" @if($datadiri->unit_kerja == 'Pusat Pendidikan dan Pelatihan') selected @endif>Pusat Pendidikan dan Pelatihan</option>
                                    <option value="Inspektorat Utama" @if($datadiri->unit_kerja == 'Inspektorat Utama') selected @endif>Inspektorat Utama</option>
                                    <option value="Inspektorat Pemerolehan Keyakinan Mutu Pemeriksaan" @if($datadiri->unit_kerja == 'Inspektorat Pemerolehan Keyakinan Mutu Pemeriksaan') selected @endif>Inspektorat Pemerolehan Keyakinan Mutu Pemeriksaan</option>
                                    <option value="Inspektorat Pemeriksaan Internal dan Mutu Kelembagaan" @if($datadiri->unit_kerja == 'Inspektorat Pemeriksaan Internal dan Mutu Kelembagaan') selected @endif>Inspektorat Pemeriksaan Internal dan Mutu Kelembagaan</option>
                                    <option value="Inspektorat Penegakan Integritas" @if($datadiri->unit_kerja == 'Inspektorat Penegakan Integritas') selected @endif>Inspektorat Penegakan Integritas</option>
                                    <option value="Direktorat Utama Perencanaan, Evaluasi, dan Pengembangan Pemeriksaan Keuangan Negara" @if($datadiri->unit_kerja == 'Direktorat Utama Perencanaan, Evaluasi, dan Pengembangan Pemeriksaan Keuangan Negara') selected @endif>Direktorat Utama Perencanaan, Evaluasi, dan Pengembangan Pemeriksaan Keuangan Negara</option>
                                    <option value="Direktorat Perencanaan Strategis dan Manajemen Kinerja" @if($datadiri->unit_kerja == 'Direktorat Perencanaan Strategis dan Manajemen Kinerja') selected @endif>Direktorat Perencanaan Strategis dan Manajemen Kinerja</option>
                                    <option value="Direktorat Evaluasi dan Pelaporan Pemeriksaan" @if($datadiri->unit_kerja == 'Direktorat Evaluasi dan Pelaporan Pemeriksaan') selected @endif>Direktorat Evaluasi dan Pelaporan Pemeriksaan</option>
                                    <option value="Direktorat Penelitian dan Pengembangan" @if($datadiri->unit_kerja == 'Direktorat Penelitian dan Pengembangan') selected @endif>Direktorat Penelitian dan Pengembangan</option>
                                    <option value="Direktorat Utama Pembinaan dan Pengembangan Hukum Pemeriksaan Keuangan Negara" @if($datadiri->unit_kerja == 'Direktorat Utama Pembinaan dan Pengembangan Hukum Pemeriksaan Keuangan Negara') selected @endif>Direktorat Utama Pembinaan dan Pengembangan Hukum Pemeriksaan Keuangan Negara</option>
                                    <option value="Direktorat Konsultasi Hukum dan Kepaniteraan Kerugian Negara/Daerah" @if($datadiri->unit_kerja == 'Direktorat Konsultasi Hukum dan Kepaniteraan Kerugian Negara/Daerah') selected @endif>Direktorat Konsultasi Hukum dan Kepaniteraan Kerugian Negara/Daerah</option>
                                    <option value="Direktorat Legislasi, Pengembangan, dan Bantuan Hukum" @if($datadiri->unit_kerja == 'Direktorat Legislasi, Pengembangan, dan Bantuan Hukum') selected @endif>Direktorat Legislasi, Pengembangan, dan Bantuan Hukum</option>
                                    <option value="Auditorat Utama Keuangan Negara I" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara I') selected @endif>Auditorat Utama Keuangan Negara I</option>
                                    <option value="Auditorat Utama Keuangan Negara II" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara II') selected @endif>Auditorat Utama Keuangan Negara II</option>
                                    <option value="Auditorat Utama Keuangan Negara III" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara III') selected @endif>Auditorat Utama Keuangan Negara III</option>
                                    <option value="Auditorat Utama Keuangan Negara IV" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara IV') selected @endif>Auditorat Utama Keuangan Negara IV</option>
                                    <option value="Auditorat Utama Keuangan Negara V" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara V') selected @endif>Auditorat Utama Keuangan Negara V</option>
                                    <option value="Auditorat Utama Keuangan Negara VI" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara VI') selected @endif>Auditorat Utama Keuangan Negara VI</option>
                                    <option value="Auditorat Utama Keuangan Negara VII" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara VII') selected @endif>Auditorat Utama Keuangan Negara VII</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Tempat Lahir</label>
                                    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kota Tempat Lahir" value="{{$datadiri->tempat_lahir}}">
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="example-date-input" class="col-form-label">Tanggal Lahir</label>
                                    <div class="col-10">
                                        <input name="tgl_lahir" class="form-control" type="date" value="2019-12-5" id="example-date-input">
                                    </div>
                                </div>  
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Agama</label>
                                    <select name="agama" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Islam" @if($datadiri->agama == 'Islam') selected @endif>Islam</option>
                                    <option value="Kristen" @if($datadiri->agama == 'Kristen') selected @endif>Kristen</option>
                                    <option value="Katolik" @if($datadiri->agama == 'Katolik') selected @endif>Katolik</option>
                                    <option value="Hindu" @if($datadiri->agama == 'Hindu') selected @endif>Hindu</option>
                                    <option value="Budha" @if($datadiri->agama == 'Budha') selected @endif>Budha</option>
                                    <option value="Konghuchu" @if($datadiri->agama == 'Konghuchu') selected @endif>Konghuchu</option>
                                    </select>
                                </div> 
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Menikah" @if($datadiri->status == 'Menikah') selected @endif>Menikah</option>
                                    <option value="Belum Menikah" @if($datadiri->status == 'Belum Menikah') selected @endif>Belum Menikah</option>
                                    </select>
                                </div>    
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$datadiri->alamat}}</textarea>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Jabatan</label>
                                    <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jabatan Saat Ini" value="{{$datadiri->jabatan}}">
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Pangkat</label>
                                    <input name="pangkat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Pangkat Saat Ini" value="{{$datadiri->pangkat}}">
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Jenjang Pendidikan</label>
                                    <select name="jenjang_pend" class="form-control" id="exampleFormControlSelect1">
                                    <option value="DIII" @if($datadiri->jenjang_pend == 'DIII') selected @endif>DIII</option>
                                    <option value="S1" @if($datadiri->jenjang_pend == 'S1') selected @endif>S1</option>
                                    <option value="S2" @if($datadiri->jenjang_pend == 'S2') selected @endif>S2</option>
                                    <option value="S3" @if($datadiri->jenjang_pend == 'S3') selected @endif>S3</option>
                                    </select>
                                </div> 
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Jurusan</label>
                                    <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jurusan yang Diambil" value="{{$datadiri->jurusan}}">
                                </div> 
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Universitas</label>
                                    <input name="univ" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Universitas" value="{{$datadiri->univ}}" value="{{$datadiri->univ}}">
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="example-date-input" class="col-form-label">Tanggal Mulai Masa Studi</label>
                                    <div class="col-10">
                                        <input name="tgl_mulai" class="form-control" type="date" value="2019-12-5" id="example-date-input">
                                    </div>
                                </div>      
                                <div class="form-group form-group-lg">
                                    <label for="example-date-input" class="col-form-label">Tanggal Berakhir Masa Studi</label>
                                    <div class="col-10">
                                        <input name="tgl_akhir" class="form-control" type="date" value="2019-12-5" id="example-date-input">
                                    </div>
                                </div>       
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Beasiswa</label>
                                    <input name="beasiswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Penyedia Beasiswa" value="{{$datadiri->beasiswa}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alasan Perpanjangan</label>
                                    <input name="alasan_perpanjangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alasan Perpanjangan Tugas Belajar" value="{{$datadiri->alasan_perpanjangan}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lama Waktu Perpanjangan</label>
                                    <input name="jml_wkt_perp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Waktu Untuk Perpanjangan" value="{{$datadiri->jml_wkt_perp}}">
                                </div>   
                                <button type="submit" class="btn btn-warning">Update</button>
                                </form>     
								</div>
							</div>
                    </div>
                </div>
            </div>
        </div>
</div>

@stop
@section('content1')           
            
            @if(session('sukses'))
            <div class="alert alert-info" role="alert">
                {{session('sukses')}}
            </div>
            @endif
                <div class="row">
                        <div class="col-lg-12">
                            <form action="/datadiri/{{$datadiri->id}}/update" method="POST">
                                {{csrf_field()}}
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" value="{{$datadiri->nama}}">
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">NIP</label>
                                    <input name="nip" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIP" value="{{$datadiri->nip}}">
                                </div>    
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                    <select name="jk" class="form-control" id="exampleFormControlSelect1">
                                    <option value="L" @if($datadiri->jk == 'L') selected @endif>Laki-Laki</option>
                                    <option value="P"@if($datadiri->jk == 'P') selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Unit kerja</label>
                                    <select name="unit_kerja" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Sekretariat Jenderal" @if($datadiri->unit_kerja == 'Sekretariat Jenderal') selected @endif>Sekretariat Jenderal</option>
                                    <option value="Biro Sekretariat Pimpinan" @if($datadiri->unit_kerja == 'Biro Sekretariat Pimpinan') selected @endif>Biro Sekretariat Pimpinan</option>
                                    <option value="Biro Hubungan Masyarakat dan Kerja Sama Internasional" @if($datadiri->unit_kerja == 'Biro Hubungan Masyarakat dan Kerja Sama Internasional') selected @endif>Biro Hubungan Masyarakat dan Kerja Sama Internasional</option>
                                    <option value="Biro Sumber Daya Manusia" @if($datadiri->unit_kerja == 'Biro Sumber Daya Manusia') selected @endif>Biro Sumber Daya Manusia</option>
                                    <option value="Biro Keuangan" @if($datadiri->unit_kerja == 'Biro Keuangan') selected @endif>Biro Keuangan</option>
                                    <option value="Biro Teknologi Informasi" @if($datadiri->unit_kerja == 'Biro Teknologi Informasi') selected @endif>Biro Teknologi Informasi</option>
                                    <option value="Biro Umum" @if($datadiri->unit_kerja == 'Biro Umum') selected @endif>Biro Umum</option>
                                    <option value="Pusat Pendidikan dan Pelatihan" @if($datadiri->unit_kerja == 'Pusat Pendidikan dan Pelatihan') selected @endif>Pusat Pendidikan dan Pelatihan</option>
                                    <option value="Inspektorat Utama" @if($datadiri->unit_kerja == 'Inspektorat Utama') selected @endif>Inspektorat Utama</option>
                                    <option value="Inspektorat Pemerolehan Keyakinan Mutu Pemeriksaan" @if($datadiri->unit_kerja == 'Inspektorat Pemerolehan Keyakinan Mutu Pemeriksaan') selected @endif>Inspektorat Pemerolehan Keyakinan Mutu Pemeriksaan</option>
                                    <option value="Inspektorat Pemeriksaan Internal dan Mutu Kelembagaan" @if($datadiri->unit_kerja == 'Inspektorat Pemeriksaan Internal dan Mutu Kelembagaan') selected @endif>Inspektorat Pemeriksaan Internal dan Mutu Kelembagaan</option>
                                    <option value="Inspektorat Penegakan Integritas" @if($datadiri->unit_kerja == 'Inspektorat Penegakan Integritas') selected @endif>Inspektorat Penegakan Integritas</option>
                                    <option value="Direktorat Utama Perencanaan, Evaluasi, dan Pengembangan Pemeriksaan Keuangan Negara" @if($datadiri->unit_kerja == 'Direktorat Utama Perencanaan, Evaluasi, dan Pengembangan Pemeriksaan Keuangan Negara') selected @endif>Direktorat Utama Perencanaan, Evaluasi, dan Pengembangan Pemeriksaan Keuangan Negara</option>
                                    <option value="Direktorat Perencanaan Strategis dan Manajemen Kinerja" @if($datadiri->unit_kerja == 'Direktorat Perencanaan Strategis dan Manajemen Kinerja') selected @endif>Direktorat Perencanaan Strategis dan Manajemen Kinerja</option>
                                    <option value="Direktorat Evaluasi dan Pelaporan Pemeriksaan" @if($datadiri->unit_kerja == 'Direktorat Evaluasi dan Pelaporan Pemeriksaan') selected @endif>Direktorat Evaluasi dan Pelaporan Pemeriksaan</option>
                                    <option value="Direktorat Penelitian dan Pengembangan" @if($datadiri->unit_kerja == 'Direktorat Penelitian dan Pengembangan') selected @endif>Direktorat Penelitian dan Pengembangan</option>
                                    <option value="Direktorat Utama Pembinaan dan Pengembangan Hukum Pemeriksaan Keuangan Negara" @if($datadiri->unit_kerja == 'Direktorat Utama Pembinaan dan Pengembangan Hukum Pemeriksaan Keuangan Negara') selected @endif>Direktorat Utama Pembinaan dan Pengembangan Hukum Pemeriksaan Keuangan Negara</option>
                                    <option value="Direktorat Konsultasi Hukum dan Kepaniteraan Kerugian Negara/Daerah" @if($datadiri->unit_kerja == 'Direktorat Konsultasi Hukum dan Kepaniteraan Kerugian Negara/Daerah') selected @endif>Direktorat Konsultasi Hukum dan Kepaniteraan Kerugian Negara/Daerah</option>
                                    <option value="Direktorat Legislasi, Pengembangan, dan Bantuan Hukum" @if($datadiri->unit_kerja == 'Direktorat Legislasi, Pengembangan, dan Bantuan Hukum') selected @endif>Direktorat Legislasi, Pengembangan, dan Bantuan Hukum</option>
                                    <option value="Auditorat Utama Keuangan Negara I" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara I') selected @endif>Auditorat Utama Keuangan Negara I</option>
                                    <option value="Auditorat Utama Keuangan Negara II" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara II') selected @endif>Auditorat Utama Keuangan Negara II</option>
                                    <option value="Auditorat Utama Keuangan Negara III" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara III') selected @endif>Auditorat Utama Keuangan Negara III</option>
                                    <option value="Auditorat Utama Keuangan Negara IV" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara IV') selected @endif>Auditorat Utama Keuangan Negara IV</option>
                                    <option value="Auditorat Utama Keuangan Negara V" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara V') selected @endif>Auditorat Utama Keuangan Negara V</option>
                                    <option value="Auditorat Utama Keuangan Negara VI" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara VI') selected @endif>Auditorat Utama Keuangan Negara VI</option>
                                    <option value="Auditorat Utama Keuangan Negara VII" @if($datadiri->unit_kerja == 'Auditorat Utama Keuangan Negara VII') selected @endif>Auditorat Utama Keuangan Negara VII</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Tempat Lahir</label>
                                    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kota Tempat Lahir" value="{{$datadiri->tempat_lahir}}">
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="example-date-input" class="col-form-label">Tanggal Lahir</label>
                                    <div class="col-10">
                                        <input name="tgl_lahir" class="form-control" type="date" value="2019-12-5" id="example-date-input">
                                    </div>
                                </div>  
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Agama</label>
                                    <select name="agama" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Islam" @if($datadiri->agama == 'Islam') selected @endif>Islam</option>
                                    <option value="Kristen" @if($datadiri->agama == 'Kristen') selected @endif>Kristen</option>
                                    <option value="Katolik" @if($datadiri->agama == 'Katolik') selected @endif>Katolik</option>
                                    <option value="Hindu" @if($datadiri->agama == 'Hindu') selected @endif>Hindu</option>
                                    <option value="Budha" @if($datadiri->agama == 'Budha') selected @endif>Budha</option>
                                    <option value="Konghuchu" @if($datadiri->agama == 'Konghuchu') selected @endif>Konghuchu</option>
                                    </select>
                                </div> 
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Menikah" @if($datadiri->status == 'Menikah') selected @endif>Menikah</option>
                                    <option value="Belum Menikah" @if($datadiri->status == 'Belum Menikah') selected @endif>Belum Menikah</option>
                                    </select>
                                </div>    
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$datadiri->alamat}}</textarea>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Jabatan</label>
                                    <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jabatan Saat Ini" value="{{$datadiri->jabatan}}">
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Pangkat</label>
                                    <input name="pangkat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Pangkat Saat Ini" value="{{$datadiri->pangkat}}">
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Jenjang Pendidikan</label>
                                    <select name="jenjang_pend" class="form-control" id="exampleFormControlSelect1">
                                    <option value="DIII" @if($datadiri->jenjang_pend == 'DIII') selected @endif>DIII</option>
                                    <option value="S1" @if($datadiri->jenjang_pend == 'S1') selected @endif>S1</option>
                                    <option value="S2" @if($datadiri->jenjang_pend == 'S2') selected @endif>S2</option>
                                    <option value="S3" @if($datadiri->jenjang_pend == 'S3') selected @endif>S3</option>
                                    </select>
                                </div> 
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Jurusan</label>
                                    <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jurusan yang Diambil" value="{{$datadiri->jurusan}}">
                                </div> 
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Universitas</label>
                                    <input name="univ" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Universitas" value="{{$datadiri->nama}}" value="{{$datadiri->univ}}">
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="example-date-input" class="col-form-label">Tanggal Mulai Masa Studi</label>
                                    <div class="col-10">
                                        <input name="tgl_mulai" class="form-control" type="date" value="2019-12-5" id="example-date-input">
                                    </div>
                                </div>      
                                <div class="form-group form-group-lg">
                                    <label for="example-date-input" class="col-form-label">Tanggal Berakhir Masa Studi</label>
                                    <div class="col-10">
                                        <input name="tgl_akhir" class="form-control" type="date" value="2019-12-5" id="example-date-input">
                                    </div>
                                </div>       
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Beasiswa</label>
                                    <input name="beasiswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Penyedia Beasiswa" value="{{$datadiri->beasiswa}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alasan Perpanjangan</label>
                                    <input name="alasan_perpanjangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alasan Perpanjangan Tugas Belajar" value="{{$datadiri->alasan_perpanjangan}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lama Waktu Perpanjangan</label>
                                    <input name="jml_wkt_perp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Waktu Untuk Perpanjangan" value="{{$datadiri->jml_wkt_perp}}">
                                </div>   
                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>     
                        </div>       
                </div>
@endsection
   