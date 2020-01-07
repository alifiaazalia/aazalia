@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
                                    <h2 class="panel-title">DATA DIRI PEMOHON</h2>
                                    <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></span></i></button>
                                    </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>Nama Lengkap</th>
                                                <th>NIP</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Unit Kerja</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Agama</th>
                                                <th>Status</th>
                                                <th>Alamat</th>
                                                <th>Jabatan</th>
                                                <th>Pangkat</th>
                                                <th>Jenjang Pendidikan</th>
                                                <th>Jurusan</th>
                                                <th>Universitas</th>
                                                <th>Tanggal Mulai</th>
                                                <th>Tanggal Berakhir</th>
                                                <th>Beasiswa</th>
                                                <th>Alasan Perpanjangan</th>
                                                <th>Lama Waktu Perpanjangan</th>
                                                <th>AKSI<th>
                                            </tr>
										</thead>
										<tbody>
                                        @foreach($data_diri_pemohon as $datadiri)
                                        <tr>
                                            <td><a href="/datadiri/{{$datadiri->id}}/profile">{{$datadiri->nama}}</a></td>
                                            <td>{{$datadiri->nip}}</td>
                                            <td>{{$datadiri->jk}}</td>
                                            <td>{{$datadiri->unit_kerja}}</td>
                                            <td>{{$datadiri->tempat_lahir}}</td>
                                            <td>{{$datadiri->tgl_lahir}}</td>
                                            <td>{{$datadiri->agama}}</td>
                                            <td>{{$datadiri->status}}</td>
                                            <td>{{$datadiri->alamat}}</td>
                                            <td>{{$datadiri->jabatan}}</td>
                                            <td>{{$datadiri->pangkat}}</td>
                                            <td>{{$datadiri->jenjang_pend}}</td>
                                            <td>{{$datadiri->jurusan}}</td>
                                            <td>{{$datadiri->univ}}</td>
                                            <td>{{$datadiri->tgl_mulai}}</td>
                                            <td>{{$datadiri->tgl_akhir}}</td>
                                            <td>{{$datadiri->beasiswa}}</td>
                                            <td>{{$datadiri->alasan_perpanjangan}}</td>
                                            <td>{{$datadiri->jml_wkt_perp}}</td>
                                            <td>
                                                <a href="/datadiri/{{$datadiri->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/datadiri/{{$datadiri->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
										</tbody>
									</table>
								</div>
							</div>    
                </div>
            </div>        
        </div>
    </div>        
    <div class= "modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Diri</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            @csrf
                            <form action="/datadiri/create" method="POST">
                                {{csrf_field()}}
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">NIP</label>
                                    <input name="nip" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIP">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>    
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                    <select name="jk" class="form-control" id="exampleFormControlSelect1">
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Unit kerja</label>
                                    <select name="unit_kerja" class="form-control" id="exampleFormControlSelect1">
                                    <option>Sekretariat Jenderal</option>
                                    <option>Biro Sekretariat Pimpinan</option>
                                    <option>Biro Hubungan Masyarakat dan Kerja Sama Internasional</option>
                                    <option>Biro Sumber Daya Manusia</option>
                                    <option>Biro Keuangan</option>
                                    <option>Biro Teknologi Informasi</option>
                                    <option>Biro Umum</option>
                                    <option>Pusat Pendidikan dan Pelatihan </option>
                                    <option>Inspektorat Utama</option>
                                    <option>Inspektorat Pemerolehan Keyakinan Mutu Pemeriksaan</option>
                                    <option>Inspektorat Pemeriksaan Internal dan Mutu Kelembagaan</option>
                                    <option>Inspektorat Penegakan Integritas</option>
                                    <option>Direktorat Utama Perencanaan, Evaluasi, dan Pengembangan Pemeriksaan Keuangan Negara</option>
                                    <option>Direktorat Perencanaan Strategis dan Manajemen Kinerja</option>
                                    <option>Direktorat Evaluasi dan Pelaporan Pemeriksaan</option>
                                    <option>Direktorat Penelitian dan Pengembangan</option>
                                    <option>Direktorat Utama Pembinaan dan Pengembangan Hukum Pemeriksaan Keuangan Negara</option>
                                    <option>Direktorat Konsultasi Hukum dan Kepaniteraan Kerugian Negara/Daerah</option>
                                    <option>Direktorat Legislasi, Pengembangan, dan Bantuan Hukum</option>
                                    <option>Auditorat Utama Keuangan Negara I</option>
                                    <option>Auditorat Utama Keuangan Negara II</option>
                                    <option>Auditorat Utama Keuangan Negara III</option>
                                    <option>Auditorat Utama Keuangan Negara IV</option>
                                    <option>Auditorat Utama Keuangan Negara V</option>
                                    <option>Auditorat Utama Keuangan Negara VI</option>
                                    <option>Auditorat Utama Keuangan Negara VII</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Tempat Lahir</label>
                                    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kota Tempat Lahir">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghuchu</option>
                                    </select>
                                </div> 
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                    <option>Menikah</option>
                                    <option>Belum Menikah</option>
                                    </select>
                                </div>    
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Jabatan</label>
                                    <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jabatan Saat Ini">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Pangkat</label>
                                    <input name="pangkat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Pangkat Saat Ini">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="exampleFormControlSelect1">Jenjang Pendidikan</label>
                                    <select name="jenjang_pend" class="form-control" id="exampleFormControlSelect1">
                                    <option>DIII</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                    </select>
                                </div> 
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Jurusan</label>
                                    <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jurusan yang Diambil">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div> 
                                <div class="form-group form-group-lg">
                                    <label for="exampleInputEmail1">Universitas</label>
                                    <input name="univ" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Universitas">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
                                    <input name="beasiswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Penyedia Beasiswa">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alasan Perpanjangan</label>
                                    <input name="alasan_perpanjangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alasan Perpanjangan Tugas Belajar">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lama Waktu Perpanjangan</label>
                                    <input name="jml_wkt_perp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Waktu Untuk Perpanjangan">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>            
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>

@stop

    
   