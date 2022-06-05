@extends('layouts.app')
@section('content')



  @isset($kmt)
  <div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <i class="fab fa-wpforms"></i>
                    Formulir PPSDA - Keterangan Memiliki Tanah
                </div>
            </div>
            <div class="card-body">
                @if(session("pesan"))
                  <div class="alert alert-success">
                {{ session("pesan") }}
                </div>
                @endif
                <form action="/ppsda/keterangan-memiliki-tanah" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4 class="mb-3">Data Pemohon</h4>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama">Nama</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" disabled value="{{ $kmt->nama }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama">NIK</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" disabled value="{{ $kmt->nik }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="ttl">Tempat Tanggal Lahir</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat Tanggal Lahir" disabled value="{{ $kmt->ttl }}">
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat">Alamat</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" disabled value="{{ $kmt->alamat }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="no_telp">Nomor Telepon/Hp</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon/Hp" disabled value="{{ $kmt->no_telp }}">
                        </div>
                      </div>
                    </div>

                    <h4 class="my-3">Data Tanah</h4>
                    <div class="row">
                      {{-- input kelurahan, kecamatan, kabupaten, provinsi, luas, rt --}}
                      <div class="card">
                        <div class="card-header">
                          <div class="card-title">
                            Alamat Tanah
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="kelurahan">Kelurahan</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" disabled value="{{ $kmt->kelurahan }}">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="kecamatan">Kecamatan</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" disabled value="{{ $kmt->kecamatan }}">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="kabupaten">Kabupaten</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Kabupaten" disabled value="{{ $kmt->kabupaten }}">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="provinsi">Provinsi</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" disabled value="{{ $kmt->provinsi }}">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="luas">Luas Tanah</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="luas" name="luas" placeholder="Luas Tanah" disabled value="{{ $kmt->luas }}">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="rt">RT</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="rt" name="rt" placeholder="RT" disabled value="{{ $kmt->rt }}">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      

                      {{-- input batas_tanah(sebelah_utara, sebelah_timur, sebelah_selatan, sebelah_barat) --}}
                      <div class="card">
                        <div class="card-header">
                          <div class="card-title">
                            Batas Tanah
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="batas_utara">Batas Utara</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="batas_utara" name="batas_utara" placeholder="Batas Utara" disabled value="{{ $kmt->batas_utara }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="batas_timur">Batas Timur</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="batas_timur" name="batas_timur" placeholder="Batas Timur" disabled value="{{ $kmt->batas_timur }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="batas_selatan">Batas Selatan</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="batas_selatan" name="batas_selatan" placeholder="Batas Selatan" disabled value="{{ $kmt->batas_selatan }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="batas_barat">Batas Barat</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="batas_barat" name="batas_barat" placeholder="Batas Barat" disabled value="{{ $kmt->batas_barat }}">
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
                            <a href="{{ asset('storage/ppsda/surat_pengantar/'.$kmt->surat_pengantar) }}" target="_blank" class="btn btn-link">
                              <i class="fas fa-file-pdf"></i>
                              Surat Pengantar Dari RT
                            </a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <a href="{{ asset('storage/ppsda/ktp/'.$kmt->ktp) }}" target="_blank" class="btn btn-link">
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
                      Formulir PPSDA - Keterangan Memiliki Tanah
                  </div>
              </div>
              <div class="card-body">
                  @if(session("pesan"))
                    <div class="alert alert-success">
                  {{ session("pesan") }}
                  </div>
                  @endif
                  <form action="/ppsda/keterangan-memiliki-tanah" method="post" enctype="multipart/form-data">
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

                      <h4 class="my-3">Data Tanah</h4>
                      <div class="row">
                        {{-- input kelurahan, kecamatan, kabupaten, provinsi, luas, rt --}}
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">
                              Alamat Tanah
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kelurahan">Kelurahan</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" required value="{{ old("kelurahan") }}">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kecamatan">Kecamatan</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required value="{{ old("kecamatan") }}">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kabupaten">Kabupaten</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Kabupaten" required value="{{ old("kabupaten") }}">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" required value="{{ old("provinsi") }}">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="luas">Luas Tanah</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control @error("luas") is-invalid @enderror" id="luas" name="luas" placeholder="Luas Tanah" required value="{{ old("luas") }}">
                                    @error("luas")
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="rt">RT</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="rt" name="rt" placeholder="RT" required value="{{ old("rt") }}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        

                        {{-- input batas_tanah(sebelah_utara, sebelah_timur, sebelah_selatan, sebelah_barat) --}}
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">
                              Batas Tanah
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="batas_utara">Batas Utara</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="batas_utara" name="sebelah_utara" placeholder="Batas Utara" required value="{{ old("batas_utara") }}">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="batas_timur">Batas Timur</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="batas_timur" name="sebelah_timur" placeholder="Batas Timur" required value="{{ old("batas_timur") }}">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="batas_selatan">Batas Selatan</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="batas_selatan" name="sebelah_selatan" placeholder="Batas Selatan" required value="{{ old("batas_selatan") }}">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="batas_barat">Batas Barat</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="batas_barat" name="sebelah_barat" placeholder="Batas Barat" required value="{{ old("batas_barat") }}">
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
