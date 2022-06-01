@extends('layouts.app')
@section('content')


  <div class="row mt-3">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <div class="card-title">
                      <i class="fab fa-wpforms"></i>
                      Formulir PPSDA - Keterangan NJOP
                  </div>
              </div>
              <div class="card-body">
                  @if(session("pesan"))
                    <div class="alert alert-success">
                  {{ session("pesan") }}
                  </div>
                  @endif
                  <form action="/ppsda/keterangan-njop" method="post" enctype="multipart/form-data">
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

                      <h4 class="my-3">Data NJOP</h4>
                      <div class="row">
                        {{-- input kelurahan, kecamatan, kabupaten, provinsi, luas, rt --}}
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">
                              Objek Pajak
                            </div>
                          </div>
                          <div class="card-body">
                            {{-- input no_objek_pajak, jenis_objek_pajak, letak_objek --}}
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="no_objek_pajak">Nomor Objek Pajak</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="no_objek_pajak" name="no_objek_pajak" placeholder="Nomor Objek Pajak" required value="{{ old("no_objek_pajak") }}">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="jenis_objek_pajak">Jenis Objek Pajak</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="jenis_objek_pajak" name="jenis_objek_pajak" placeholder="Jenis Objek Pajak" required value="{{ old("jenis_objek_pajak") }}">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="letak_objek">Letak Objek Pajak</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="letak_objek" name="letak_objek" placeholder="Letak Objek Pajak" required value="{{ old("letak_objek") }}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">
                              Uraian NJOP
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              {{-- bikin 2 section untuk bumi(bumi_luas, bumi_njop), bangunan(bangunan_luas, bangunan_njop) --}}
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bumi_luas">Luas Bumi</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control @error("bumi_luas") is-invalid @enderror" id="bumi_luas" name="bumi_luas" placeholder="Luas Bumi" required value="{{ old("bumi_luas") }}">
                                    @error("bumi_luas")
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bumi_njop">NJOP Bumi</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control @error("bumi_njop") is-invalid @enderror" id="bumi_njop" name="bumi_njop" placeholder="NJOP Bumi" required value="{{ old("bumi_njop") }}">
                                    @error("bumi_njop")
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bangunan_luas">Luas Bangunan</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control @error("bangunan_luas") is-invalid @enderror" id="bangunan_luas" name="bangunan_luas" placeholder="Luas Bangunan" required value="{{ old("bangunan_luas") }}">
                                    @error("bangunan_luas")
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bangunan_njop">NJOP Bangunan</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control @error("bangunan_njop") is-invalid @enderror" id="bangunan_njop" name="bangunan_njop" placeholder="NJOP Bangunan" required value="{{ old("bangunan_njop") }}">
                                    @error("bangunan_njop")
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
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
