@extends('layouts.app')
@section('content')


  <div class="row mt-3">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <div class="card-title">
                      <i class="fab fa-wpforms"></i>
                      Formulir PPSDA - Keperluan PBB
                  </div>
              </div>
              <div class="card-body">
                  @if(session("pesan"))
                  <div class="alert alert-success">
                    {{ session("pesan") }}
                  </div>
                  @endif
                  <form action="/tapem/formulir-pendaftaran-perpindahan-penduduk" method="post" enctype="multipart/form-data">
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

                      <h4 class="my-3">Data Perpindahan</h4>
                      <div class="row">
                        {{-- input no_kk, jenis_permohonan, alamat_pindah, alasan_pindah, jenis_kepindahan, anggota_keluarga_yang_tidak_pindah, anggota_keluarga_yang_pindah --}}
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="no_kk">Nomor Kartu Keluarga</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="Nomor Kartu Keluarga" required>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="jenis_permohonan">Jenis Permohonan</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="jenis_permohonan" name="jenis_permohonan" placeholder="Jenis Permohonan" required>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="alamat_pindah">Alamat Pindah</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="alamat_pindah" name="alamat_pindah" placeholder="Alamat Pindah" required>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="alasan_pindah">Alasan Pindah</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="alasan_pindah" name="alasan_pindah" placeholder="Alasan Pindah" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="jenis_kepindahan">Jenis Kepindahan</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="jenis_kepindahan" name="jenis_kepindahan" placeholder="Jenis Kepindahan" required>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="anggota_keluarga_yang_tidak_pindah">Anggota Keluarga Yang Tidak Pindah</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="anggota_keluarga_yang_tidak_pindah" name="anggota_keluarga_yang_tidak_pindah" placeholder="Anggota Keluarga Yang Tidak Pindah" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="anggota_keluarga_yang_pindah">Anggota Keluarga Yang Pindah</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="anggota_keluarga_yang_pindah" name="anggota_keluarga_yang_pindah" placeholder="Anggota Keluarga Yang Pindah" required>
                          </div>
                        </div>
                      </div>

                      <h4 class="my-3">Berkas Pendukung</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="ktp">KTP</label><span class="text-danger">*</span>
                              <input type="file" accept=".pdf, image/*" class="form-control" id="ktp" name="ktp_file" required value="{{ old("ktp_file") }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="surat_pengantar">Surat Pengantar Dari RT</label><span class="text-danger">*</span>
                              <input type="file" accept=".pdf, image/*" class="form-control" id="surat_pengantar" name="surat_pengantar_file" required value="{{ old("surat_pengantar_file") }}">
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
