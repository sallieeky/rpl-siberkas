@extends('layouts.app')
@section('content')



  @isset($skck)
    
  <div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <i class="fab fa-wpforms"></i>
                    Formulir KESOS - Surat Keterangan Cek Kesehatan
                </div>
            </div>
            <div class="card-body">
                @if(session("pesan"))
                  <div class="alert alert-success">
                {{ session("pesan") }}
                </div>
                @endif
                <form action="/kesos/skck" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4 class="mb-3">Data Pemohon</h4>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama">Nama</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" disabled value="{{ $skck->nama }}" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama">NIK</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" disabled value="{{ $skck->nik }}" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="ttl">Tempat Tanggal Lahir</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat Tanggal Lahir" disabled value="{{ $skck->ttl }}" >
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat">Alamat</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" disabled value="{{ $skck->alamat }}" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="no_telp">Nomor Telepon/Hp</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon/Hp" disabled value="{{ $skck->no_telp }}" >
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label><span class="text-danger">*</span>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" disabled>
                              <option value="Laki-laki" {{ $skck->jenis_kelamin == "Laki-laki" ? "selected" : "" }}>Laki-laki</option>
                              <option value="Perempuan" {{ $skck->jenis_kelamin == "Perempuan" ? "selected" : "" }}>Perempuan</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <label for="status_perkawinan">Status Perkawinan</label><span class="text-danger">*</span>
                            <select class="form-control" id="status_perkawinan" name="status_perkawinan" disabled>
                              <option value="Belum Kawin" {{ $skck->status_perkawinan == "Belum Kawin" ? "selected" : "" }}>Belum Kawin</option>
                              <option value="Kawin" {{ $skck->status_perkawinan == "Kawin" ? "selected" : "" }}>Kawin</option>
                              <option value="Cerai Hidup" {{ $skck->status_perkawinan == "Cerai Hidup" ? "selected" : "" }}>Cerai Hidup</option>
                              <option value="Cerai Mati" {{ $skck->status_perkawinan == "Cerai Mati" ? "selected" : "" }}>Cerai Mati</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <label for="agama">Agama</label><span class="text-danger">*</span>
                            <select class="form-control" id="agama" name="agama" disabled>
                              <option>{{ $skck->agama }}</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label><span class="text-danger">*</span>
                            <select class="form-control" id="pendidikan" name="pendidikan" disabled>
                              <option>{{ $skck->pendidikan }}</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="warga_negara">Warga Negara</label><span class="text-danger">*</span>
                            <select class="form-control" id="warga_negara" name="warga_negara" disabled>
                              <option>{{ $skck->warga_negara }}</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" disabled value="{{ $skck->pekerjaan }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" disabled value="{{ $skck->kelurahan }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" disabled value="{{ $skck->kecamatan }}">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="maksud">Maksud</label><span class="text-danger">*</span>
                            <textarea class="form-control" id="maksud" name="maksud" placeholder="Maksud" disabled>{{ $skck->maksud }}</textarea>
                        </div>
                      </div>
                    </div>

                    <h4 class="my-3">Berkas Pendukung</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <a href="{{ asset('storage/kesos/surat_pengantar/'.$skck->surat_pengantar) }}" target="_blank" class="btn btn-link">
                              <i class="fas fa-file-pdf"></i>
                              Surat Pengantar Dari RT
                            </a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <a href="{{ asset('storage/kesos/ktp/'.$skck->ktp) }}" target="_blank" class="btn btn-link">
                              <i class="fas fa-file-pdf"></i>
                              KTP
                            </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      @if (Auth::user()->role == 'user')
                        <a href="/history" class="btn btn-secondary">Kembali</a>
                      @else
                        <a href="/berkas-masuk" class="btn btn-secondary">Kembali</a>
                      @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

  @else
  <div class="row mt-3">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <div class="card-title">
                      <i class="fab fa-wpforms"></i>
                      Formulir KESOS - Surat Keterangan Cek Kesehatan
                  </div>
              </div>
              <div class="card-body">
                  @if(session("pesan"))
                    <div class="alert alert-success">
                  {{ session("pesan") }}
                  </div>
                  @endif
                  <form action="/kesos/skck" method="post" enctype="multipart/form-data">
                      @csrf
                      <h4 class="mb-3">Data Pemohon</h4>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="nama">Nama</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required value="{{ Auth::user()->nama }}">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="nama">NIK</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required value="{{ Auth::user()->nik }}">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="ttl">Tempat Tanggal Lahir</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Contoh: Balikpapan, 1 Januari 1995" required value="{{ Auth::user()->ttl }}">
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="alamat">Alamat</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required value="{{ Auth::user()->alamat }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="no_telp">Nomor Telepon/Hp</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" required value="{{ Auth::user()->no_telp }}">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="jenis_kelamin">Jenis Kelamin</label><span class="text-danger">*</span>
                              <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" {{ Auth::user()->jenis_kelamin == "Laki-laki" ? "selected" : "" }}>Laki-laki</option>
                                <option value="Perempuan" {{ Auth::user()->jenis_kelamin == "Perempuan" ? "selected" : "" }}>Perempuan</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="status_perkawinan">Status Perkawinan</label><span class="text-danger">*</span>
                              <select class="form-control" id="status_perkawinan" name="status_perkawinan" required>
                                <option value="">Pilih Status Perkawinan</option>
                                <option value="Belum Kawin" {{ old("status_perkawinan") == "Belum Kawin" ? "selected" : "" }}>Belum Kawin</option>
                                <option value="Kawin" {{ old("status_perkawinan") == "Kawin" ? "selected" : "" }}>Kawin</option>
                                <option value="Cerai Hidup" {{ old("status_perkawinan") == "Cerai Hidup" ? "selected" : "" }}>Cerai Hidup</option>
                                <option value="Cerai Mati" {{ old("status_perkawinan") == "Cerai Mati" ? "selected" : "" }}>Cerai Mati</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="agama">Agama</label><span class="text-danger">*</span>
                              <select class="form-control" id="agama" name="agama" required>
                                <option value="">Pilih Agama</option>
                                <option value="Islam" {{ old("agama") == "Islam" ? "selected" : "" }}>Islam</option>
                                <option value="Kristen" {{ old("agama") == "Kristen" ? "selected" : "" }}>Kristen</option>
                                <option value="Katolik" {{ old("agama") == "Katolik" ? "selected" : "" }}>Katolik</option>
                                <option value="Hindu" {{ old("agama") == "Hindu" ? "selected" : "" }}>Hindu</option>
                                <option value="Budha" {{ old("agama") == "Budha" ? "selected" : "" }}>Budha</option>
                                <option value="Konghucu" {{ old("agama") == "Konghucu" ? "selected" : "" }}>Konghucu</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="pendidikan">Pendidikan</label><span class="text-danger">*</span>
                              <select class="form-control" id="pendidikan" name="pendidikan" required>
                                <option value="">Pilih Pendidikan</option>
                                <option value="Tidak Sekolah" {{ old("pendidikan") == "Tidak Sekolah" ? "selected" : "" }}>Tidak Sekolah</option>
                                <option value="SD" {{ old("pendidikan") == "SD" ? "selected" : "" }}>SD</option>
                                <option value="SMP" {{ old("pendidikan") == "SMP" ? "selected" : "" }}>SMP</option>
                                <option value="SMA" {{ old("pendidikan") == "SMA" ? "selected" : "" }}>SMA</option>
                                <option value="D1" {{ old("pendidikan") == "D1" ? "selected" : "" }}>D1</option>
                                <option value="D2" {{ old("pendidikan") == "D2" ? "selected" : "" }}>D2</option>
                                <option value="D3" {{ old("pendidikan") == "D3" ? "selected" : "" }}>D3</option>
                                <option value="D4" {{ old("pendidikan") == "D4" ? "selected" : "" }}>D4</option>
                                <option value="S1" {{ old("pendidikan") == "S1" ? "selected" : "" }}>S1</option>
                                <option value="S2" {{ old("pendidikan") == "S2" ? "selected" : "" }}>S2</option>
                                <option value="S3" {{ old("pendidikan") == "S3" ? "selected" : "" }}>S3</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="warga_negara">Warga Negara</label><span class="text-danger">*</span>
                              <select class="form-control" id="warga_negara" name="warga_negara" required>
                                <option value="">Pilih Warga Negara</option>
                                <option value="WNI" {{ old("warga_negara") == "WNI" ? "selected" : "" }}>WNI</option>
                                <option value="WNA" {{ old("warga_negara") == "WNA" ? "selected" : "" }}>WNA</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="pekerjaan">Pekerjaan</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="{{ old("pekerjaan") }}" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="kelurahan">Kelurahan</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" value="{{ old("kelurahan") }}" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="kecamatan">Kecamatan</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="{{ old("kecamatan") }}" required>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                              <label for="maksud">Maksud</label><span class="text-danger">*</span>
                              <textarea class="form-control" id="maksud" name="maksud" placeholder="Maksud" required>{{ old("maksud") }}</textarea>
                          </div>
                        </div>
                      </div>

                      <h4 class="my-3">Berkas Pendukung</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="surat_pengantar">Surat Pengantar Dari RT</label><span class="text-danger">*</span>
                              <input type="file" class="form-control" id="surat_pengantar" accept=".pdf, image/*" name="surat_pengantar_file" placeholder="Surat Pengantar" required value="{{ old("surat_pengantar_file") }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="ktp">KTP</label><span class="text-danger">*</span>
                              <input type="file" class="form-control" id="ktp" accept=".pdf, image/*" name="ktp_file" placeholder="KTP" required value="{{ old("ktp_file") }}">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-block">Kirim Pengajuan</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>



  @endisset
    

@endsection
@section("css")
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset("template") }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset("template") }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection
@section("script")
<!-- DataTables -->
<script src="{{ asset("template") }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset("template") }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset("template") }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset("template") }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    
$(function () {
  $("#example1").DataTable({
    "responsive": true,
    "autoWidth": false,
  });
});
</script>
@endsection
