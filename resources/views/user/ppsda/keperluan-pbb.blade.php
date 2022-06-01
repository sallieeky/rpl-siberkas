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
                  <form action="/ppsda/keperluan-pbb" method="post" enctype="multipart/form-data">
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
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nama_alas_hak">Nama Alas Hak</label><span class="text-danger">*</span>
                              <select class="form-control" id="nama_alas_hak" name="nama_alas_hak" required>
                                <option value="">Pilih Alas Hak</option>
                                <option value="SKT">SKT</option>
                                <option value="PLH">PLH</option>
                                <option value="Sertifikat">Sertifikat</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="no_alas_hak">Nomor Alas Hak</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="no_alas_hak" name="no_alas_hak" placeholder="Nomor Alas Hak" required value="{{ old("no_alas_hak") }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="titik_koordinat_objek">Titik Koordinat Objek</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="titik_koordinat_objek" name="titik_koordinat_objek" placeholder="Titik Koordinat Objek" required value="{{ old("titik_koordinat_objek") }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="titik_koordinat_objek">Alamat Objek</label><span class="text-danger">*</span>
                              <input type="text" class="form-control" id="alamat_objek" name="alamat_objek" placeholder="Alamat Objek" required value="{{ old("alamat_objek") }}">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                              <label for="keperluan">Keperluan</label><span class="text-danger">*</span>
                              <textarea class="form-control" id="keperluan" name="keperluan" placeholder="Keperluan" required>{{ old("keperluan") }}</textarea>
                          </div>
                        </div>
                      </div>

                      <h4 class="my-3">Berkas Pendukung</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="spop">Surat Pernyataan Objek Pajak</label><span class="text-danger">*</span>
                              <input type="file" accept=".pdf, image/*" class="form-control" id="spop" name="spop_file" required value="{{ old("spop_file") }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="lpop">Laporan Pembayaran Objek Pajak</label><span class="text-danger">*</span>
                              <input type="file" accept=".pdf, image/*" class="form-control" id="lpop" name="lpop_file" required value="{{ old("lpop_file") }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="ktp">KTP</label><span class="text-danger">*</span>
                              <input type="file" accept=".pdf, image/*" class="form-control" id="ktp" name="ktp_file" required value="{{ old("ktp_file") }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="kk">Kartu Keluarga</label><span class="text-danger">*</span>
                              <input type="file" accept=".pdf, image/*" class="form-control" id="kk" name="kk_file" required value="{{ old("kk_file") }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="kepemilikan_tanah">Kepemilikan Tanah</label><span class="text-danger">*</span>
                              <input type="file" accept=".pdf, image/*" class="form-control" id="kepemilikan_tanah" name="kepemilikan_tanah_file" required value="{{ old("kepemilikan_tanah_file") }}">
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
