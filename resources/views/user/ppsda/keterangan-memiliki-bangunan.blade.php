@extends('layouts.app')
@section("css")
<style>
  /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
@endsection
@section('content')




  @isset($kmb)
  <div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <i class="fab fa-wpforms"></i>
                    Formulir PPSDA - Keterangan Memiliki Bangunan
                </div>
            </div>
            <div class="card-body">
                @if(session("pesan"))
                <div class="alert alert-success">
                  {{ session("pesan") }}
                </div>
                @endif
                <form action="/ppsda/keterangan-memiliki-bangunan" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4 class="mb-3">Data Pemohon</h4>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama">Nama</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" disabled value="{{ $kmb->nama }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama">NIK</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" disabled value="{{ $kmb->nik }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="ttl">Tempat Tanggal Lahir</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat Tanggal Lahir" disabled value="{{ $kmb->ttl }}">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label><span class="text-danger">*</span>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" disabled>
                              <option value="Laki-laki" {{ $kmb->jenis_kelamin == "Laki-laki" ? "selected" : "" }}>Laki-laki</option>
                              <option value="Perempuan" {{ $kmb->jenis_kelamin == "Perempuan" ? "selected" : "" }}>Perempuan</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="alamat">Alamat</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" disabled value="{{ $kmb->alamat }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="no_telp">Nomor Telepon/Hp</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon/Hp" disabled value="{{ $kmb->no_telp }}">
                        </div>
                      </div>
                    </div>

                    <h4 class="my-3">Data Bangunan</h4>
                    <div class="row">
                      <div class="card">
                        <div class="card-header">
                          <div class="card-title">
                            Alamat Bangunan
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="jalan_rt_rw">Jalan/RT/RW</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="jalan_rt_rw" name="jalan_rt_rw" placeholder="Jalan/RT/RW" disabled value="{{ $kmb->jalan_rt_rw }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="desa_kelurahan">Desa/Kelurahan</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="desa_kelurahan" name="desa_kelurahan" placeholder="Desa/Kelurahan" disabled value="{{ $kmb->desa_kelurahan }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="kecamatan">Kecamatan</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" disabled value="{{ $kmb->kecamatan }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="kabupaten">Kabupaten</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Kabupaten" disabled value="{{ $kmb->kabupaten }}">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="card">
                        <div class="card-header">
                          <div class="card-title">
                            Batas Bangunan
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="sebelah_utara">Sebelah Utara</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="sebelah_utara" name="sebelah_utara" placeholder="Sebelah Utara" disabled value="{{ $kmb->sebelah_utara }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="sebelah_timur">Sebelah Timur</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="sebelah_timur" name="sebelah_timur" placeholder="Sebelah Timur" disabled value="{{ $kmb->sebelah_timur }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="sebelah_selatan">Sebelah Selatan</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="sebelah_selatan" name="sebelah_selatan" placeholder="Sebelah Selatan" disabled value="{{ $kmb->sebelah_selatan }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="sebelah_barat">Sebelah Barat</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="sebelah_barat" name="sebelah_barat" placeholder="Sebelah Barat" disabled value="{{ $kmb->sebelah_barat }}">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      {{-- card input ukuran_bangunan(panjang,lebar,luas) --}}
                      <div class="card">
                        <div class="card-header">
                          <div class="card-title">
                            Ukuran Bangunan
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="panjang">Panjang</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="panjang" name="panjang" placeholder="Panjang" disabled value="{{ $kmb->panjang }}">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="lebar">Lebar</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="lebar" name="lebar" placeholder="Lebar" disabled value="{{ $kmb->lebar }}">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="luas">Luas</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="luas" name="luas" placeholder="Luas" disabled value="{{ $kmb->luas }}">
                              </div>
                            </div>
                          </div>
                        </div>

                    </div>

                    <h4 class="my-3">Berkas Pendukung</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <a href="{{ asset('storage/ppsda/surat_pengantar/'.$kmb->surat_pengantar) }}" target="_blank" class="btn btn-link">
                              <i class="fas fa-file-pdf"></i>
                              Surat Pengantar Dari RT
                            </a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <a href="{{ asset('storage/ppsda/ktp/'.$kmb->ktp) }}" target="_blank" class="btn btn-link">
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
                    Formulir PPSDA - Keterangan Memiliki Bangunan
                </div>
            </div>
            <div class="card-body">
                @if(session("pesan"))
                <div class="alert alert-success">
                  {{ session("pesan") }}
                </div>
                @endif
                <form action="/ppsda/keterangan-memiliki-bangunan" method="post" enctype="multipart/form-data">
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
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label><span class="text-danger">*</span>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                              <option value="Laki-laki" {{ Auth::user()->jenis_kelamin == "Laki-laki" ? "selected" : "" }}>Laki-laki</option>
                              <option value="Perempuan" {{ Auth::user()->jenis_kelamin == "Perempuan" ? "selected" : "" }}>Perempuan</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="alamat">Alamat</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required value="{{ Auth::user()->alamat }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="no_telp">Nomor Telepon/Hp</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" required value="{{ Auth::user()->no_telp }}">
                        </div>
                      </div>
                    </div>

                    <h4 class="my-3">Data Bangunan</h4>
                    <div class="row">
                      <div class="card">
                        <div class="card-header">
                          <div class="card-title">
                            Alamat Bangunan
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="jalan_rt_rw">Jalan/RT/RW</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="jalan_rt_rw" name="jalan_rt_rw" placeholder="Jalan/RT/RW" required value="{{ old("jalan_rt_rw") }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="desa_kelurahan">Desa/Kelurahan</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="desa_kelurahan" name="desa_kelurahan" placeholder="Desa/Kelurahan" required value="{{ old("desa_kelurahan") }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="kecamatan">Kecamatan</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required value="{{ old("kecamatan") }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="kabupaten">Kabupaten</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Kabupaten" required value="{{ old("kabupaten") }}">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="card">
                        <div class="card-header">
                          <div class="card-title">
                            Batas Bangunan
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="sebelah_utara">Sebelah Utara</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="sebelah_utara" name="sebelah_utara" placeholder="Sebelah Utara" required value="{{ old("sebelah_utara") }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="sebelah_timur">Sebelah Timur</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="sebelah_timur" name="sebelah_timur" placeholder="Sebelah Timur" required value="{{ old("sebelah_timur") }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="sebelah_selatan">Sebelah Selatan</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="sebelah_selatan" name="sebelah_selatan" placeholder="Sebelah Selatan" required value="{{ old("sebelah_selatan") }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="sebelah_barat">Sebelah Barat</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="sebelah_barat" name="sebelah_barat" placeholder="Sebelah Barat" required value="{{ old("sebelah_barat") }}">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      {{-- card input ukuran_bangunan(panjang,lebar,luas) --}}
                      <div class="card">
                        <div class="card-header">
                          <div class="card-title">
                            Ukuran Bangunan
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="panjang">Panjang</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control @error('panjang') is-invalid @enderror" id="panjang" name="panjang" placeholder="Panjang" required value="{{ old("panjang") }}">
                                  @error('panjang')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="lebar">Lebar</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control @error('panjang') is-invalid @enderror" id="lebar" name="lebar" placeholder="Lebar" required value="{{ old("lebar") }}">
                                  @error('lebar')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="luas">Luas</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control @error('panjang') is-invalid @enderror" id="luas" name="luas" placeholder="Luas" required value="{{ old("luas") }}">
                                  @error('luas')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
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
