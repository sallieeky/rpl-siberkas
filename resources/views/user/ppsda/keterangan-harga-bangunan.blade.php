@extends('layouts.app')
@section('content')


  <div class="row mt-3">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <div class="card-title">
                      <i class="fab fa-wpforms"></i>
                      Formulir PPSDA - Keterangan Harga Bangunan
                  </div>
              </div>
              <div class="card-body">
                  @if(session("pesan"))
                  <div class="alert alert-success">
                    {{ session("pesan") }}
                  </div>
                  @endif
                  <form action="/ppsda/keterangan-harga-bangunan" method="post" enctype="multipart/form-data">
                      @csrf
                      <h4 class="mb-3">Data Pemohon</h4>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="nama">Nama</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required value="{{ old("nama") }}">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="nama">NIK</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required value="{{ old("nik") }}">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="ttl">Tempat Tanggal Lahir</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Contoh: Balikpapan, 1 Januari 1995" required value="{{ old("ttl") }}">
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="alamat">Alamat</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required value="{{ old("alamat") }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="no_telp">Nomor Telepon/Hp</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" required value="{{ old("no_telp") }}">
                          </div>
                        </div>
                      </div>

                      <h4 class="my-3">Data Berkas</h4>
                      <div class="row">
                        <div class="col-md-12">
                          <label for="pilihan">ID Surat</label><span class="text-danger">*</span>
                          <div class="input-group mb-3">
                            <select class="btn btn-outline-secondary dropdown-toggle" id="pilihan" name="pilihan" required>
                              <option value="Sertifikat">Sertifikat</option>
                              <option value="Segel">Segel</option>
                              <option value="Nomor">Nomor</option>
                            </select>
                            <input type="text" name="nilai" class="form-control" aria-label="Text input with dropdown button">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="nama_pemilik">Nama Pemilik</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" placeholder="Nama Pemilik" required value="{{ old("nama_pemilik") }}">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="tanggal">Tanggal</label><span class="text-danger">*</span>
                              <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Contoh: 1 Januari 1995" required value="{{ old("tanggal") }}">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="izin_bangunan">Izin Bangunan</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="izin_bangunan" name="izin_bangunan" placeholder="Izin Bangunan" required value="{{ old("izin_bangunan") }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="alamat_objek">Alamat Objek</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="alamat_objek" name="alamat_objek" placeholder="Alamat Objek" required value="{{ old("alamat_objek") }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="jenis_bangunan">Jenis Bangunan</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="jenis_bangunan" name="jenis_bangunan" placeholder="Jenis Bangunan" required value="{{ old("jenis_bangunan") }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="harga_tanah">Harga Tanah</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="harga_tanah" name="harga_tanah" placeholder="Harga Tanah" required value="{{ old("harga_tanah") }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="harga_bangunan">Harga Bangunan</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="harga_bangunan" name="harga_bangunan" placeholder="Harga Bangunan" required value="{{ old("harga_bangunan") }}">
                          </div>
                        </div>
                      </div>

                      <h4 class="my-3">Berkas Pendukung</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="surat_pengantar">Surat Pengantar</label><span class="text-danger">*</span>
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
