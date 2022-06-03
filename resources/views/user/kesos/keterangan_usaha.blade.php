@extends('layouts.app')
@section('content')


  <div class="row mt-3">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <div class="card-title">
                      <i class="fab fa-wpforms"></i>
                      Formulir KESOS - Surat Keterangan Usaha
                  </div>
              </div>
              <div class="card-body">
                  @if(session("pesan"))
                    <div class="alert alert-success">
                  {{ session("pesan") }}
                  </div>
                  @endif
                  <form action="/kesos/keterangan-usaha" method="post" enctype="multipart/form-data">
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
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="jenis_kelamin">Jenis Kelamin</label><span class="text-danger">*</span>
                              <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" {{ Auth::user()->jenis_kelamin == "Laki-laki" ? "selected" : "" }}>Laki-laki</option>
                                <option value="Perempuan" {{ Auth::user()->jenis_kelamin == "Perempuan" ? "selected" : "" }}>Perempuan</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                        
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="pekerjaan">Pekerjaan</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="{{ old("pekerjaan") }}" required>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="bidang_usaha">Bidang Usaha</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="bidang_usaha" name="bidang_usaha" placeholder="Bidang Usaha" value="{{ old("bidang_usaha") }}" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="alamat_tempat_usaha">Alamat Tempat Usaha</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="alamat_tempat_usaha" name="alamat_tempat_usaha" placeholder="Alamat Tempat Usaha" value="{{ old("alamat_tempat_usaha") }}" required>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="mulai_usaha">Mulai Usaha</label><span class="text-danger">*</span>
                              <input type="number" class="form-control" id="mulai_usaha" name="mulai_usaha" placeholder="Mulai Usaha Pada Tahun" value="{{ old("mulai_usaha") }}" required>
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
