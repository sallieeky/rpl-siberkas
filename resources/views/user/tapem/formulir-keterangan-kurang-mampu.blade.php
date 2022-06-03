@extends('layouts.app')
@section('content')


  <div class="row mt-3">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <div class="card-title">
                      <i class="fab fa-wpforms"></i>
                      Formulir TAPEM - Formulir Keterangan Kurang Mampu
                  </div>
              </div>
              <div class="card-body">
                  @if(session("pesan"))
                  <div class="alert alert-success">
                    {{ session("pesan") }}
                  </div>
                  @endif
                  <form action="/tapem/formulir-keterangan-kurang-mampu" method="post" enctype="multipart/form-data">
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

                      <h4 class="my-3">Data Lainnya</h4>
                      <div class="row">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">
                              Data Orang Tua
                            </div>
                          </div>
                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="nama_ortu">Nama Orang Tua</label><span class="text-danger">*</span>
                                      <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" placeholder="Nama Orang Tua" required>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="ttl_ortu">Tempat Tanggal Lahir Orang Tua</label><span class="text-danger">*</span>
                                      <input type="text" class="form-control" id="ttl_ortu" name="ttl_ortu" placeholder="Contoh: Balikpapan, 1 Januari 1995" required>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="jenis_kelamin_ortu">Jenis Kelamin Orang Tua</label><span class="text-danger">*</span>
                                      <select class="form-control" id="jenis_kelamin_ortu" name="jenis_kelamin_ortu" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="agama_ortu">Agama Orang Tua</label><span class="text-danger">*</span>
                                      <select class="form-control" id="agama_ortu" name="agama_ortu" required>
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="pekerjaan_ortu">Pekerjaan Orang Tua</label><span class="text-danger">*</span>
                                      <input type="text" class="form-control" id="pekerjaan_ortu" name="pekerjaan_ortu" placeholder="Pekerjaan Orang Tua" required>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="alamat_ortu">Alamat Orang Tua</label><span class="text-danger">*</span>
                                      <input type="text" class="form-control" id="alamat_ortu" name="alamat_ortu" placeholder="Alamat Orang Tua" required>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">
                              Data Anak
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_anak">Nama Anak</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="nama_anak" name="nama_anak" placeholder="Nama Anak" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_kelamin_anak">Jenis Kelamin Anak</label><span class="text-danger">*</span>
                                    <select class="form-control" id="jenis_kelamin_anak" name="jenis_kelamin_anak" required>
                                      <option value="">Pilih Jenis Kelamin</option>
                                      <option value="Laki-laki">Laki-laki</option>
                                      <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ttl_anak">Tempat Tanggal Lahir Anak</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="ttl_anak" name="ttl_anak" placeholder="Contoh: Balikpapan, 1 Januari 1995" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sekolah_anak">Sekolah Anak</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="sekolah_anak" name="sekolah_anak" placeholder="Sekolah Anak" required>
                                </div>
                              </div>
                            </div>
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
