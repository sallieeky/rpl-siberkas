@extends('layouts.app')
@section('content')



    
  @isset($pn)
  <div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <i class="fab fa-wpforms"></i>
                    Formulir KESOS - Surat Pengantar Nikah
                </div>
            </div>
            <div class="card-body">
                @if(session("pesan"))
                  <div class="alert alert-success">
                {{ session("pesan") }}
                </div>
                @endif
                <form action="/kesos/pengantar-nikah" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4 class="mb-3">Data Pemohon</h4>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama">Nama</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" disabled value="{{ $pn->nama }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama">NIK</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" disabled value="{{ $pn->nik }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="ttl">Tempat Tanggal Lahir</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat Tanggal Lahir" disabled value="{{ $pn->ttl }}">
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat">Alamat</label><span class="text-danger">*</span>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" disabled>{{ $pn->alamat }}</textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="no_telp">Nomor Telepon/Hp</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon/Hp" disabled value="{{ $pn->no_telp }}">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label><span class="text-danger">*</span>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" disabled>
                              <option value="{{ $pn->jenis_kelamin }}">{{ $pn->jenis_kelamin }}</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <label for="status_perkawinan">Status Perkawinan</label><span class="text-danger">*</span>
                            <select class="form-control" id="status_perkawinan" name="status_perkawinan" disabled>
                              <option value="{{ $pn->status_perkawinan }}">{{ $pn->status_perkawinan }}</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <label for="kewarganegaraan">Kewarganegaraan</label><span class="text-danger">*</span>
                            <select class="form-control" id="kewarganegaraan" name="kewarganegaraan" disabled>
                              <option value="{{ $pn->kewarganegaraan }}">{{ $pn->kewarganegaraan }}</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <label for="agama">Agama</label><span class="text-danger">*</span>
                            <select class="form-control" id="agama" name="agama" disabled>
                              <option value="{{ $pn->agama }}">{{ $pn->agama }}</option>
                            </select>
                        </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" disabled value="{{ $pn->pekerjaan }}">
                        </div>
                      </div>
                    </div>

                    {{-- Data Perkawinan Seorang Pria dengan Wanita(nama, nik, jenis_kelamin, ttl, kewarganegaraan, agama, pekerjaan, alamat) --}}
                    <h4 class="my-3">Data Anak Dari Perkawinan</h4>
                    <div class="row">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Seorang Pria</h3>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="nama_pria">Nama</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="nama_pria" name="nama_pria" placeholder="Nama" disabled value="{{ $pn->nama_pria }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="nik_pria">NIK</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="nik_pria" name="nik_pria" placeholder="NIK" disabled value="{{ $pn->nik_pria }}">
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ttl_pria">Tempat Tanggal Lahir</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="ttl_pria" name="ttl_pria" placeholder="Tempat Tanggal Lahir" disabled value="{{ $pn->ttl_pria }}">
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="kewarganegaraan_pria">Kewarganegaraan</label><span class="text-danger">*</span>
                                  <select class="form-control" id="kewarganegaraan_pria" name="kewarganegaraan_pria" disabled>
                                    <option value="{{ $pn->kewarganegaraan_pria }}">{{ $pn->kewarganegaraan_pria }}</option>
                                  </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="agama_pria">Agama</label><span class="text-danger">*</span>
                                  <select class="form-control" id="agama_pria" name="agama_pria" disabled>
                                    <option value="{{ $pn->agama_pria }}">{{ $pn->agama_pria }}</option>
                                  </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="pekerjaan_pria">Pekerjaan</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="pekerjaan_pria" name="pekerjaan_pria" placeholder="Pekerjaan" disabled value="{{ $pn->pekerjaan_pria }}">
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                  <label for="alamat_pria">Alamat</label><span class="text-danger">*</span>
                                  <textarea class="form-control" id="alamat_pria" name="alamat_pria" placeholder="Alamat" disabled>{{ $pn->alamat_pria }}</textarea>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Seorang Wanita</h3>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="nama_wanita">Nama</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="nama_wanita" name="nama_wanita" placeholder="Nama" disabled value="{{ $pn->nama_wanita }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="nik_wanita">NIK</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="nik_wanita" name="nik_wanita" placeholder="NIK" disabled value="{{ $pn->nik_wanita }}">
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ttl_wanita">Tempat Tanggal Lahir</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="ttl_wanita" name="ttl_wanita" placeholder="Tempat Tanggal Lahir" disabled value="{{ $pn->ttl_wanita }}">
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="kewarganegaraan_wanita">Kewarganegaraan</label><span class="text-danger">*</span>
                                  <select class="form-control" id="kewarganegaraan_wanita" name="kewarganegaraan_wanita" disabled>
                                    <option value="{{ $pn->kewarganegaraan_wanita }}">{{ $pn->kewarganegaraan_wanita }}</option>
                                  </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="agama_wanita">Agama</label><span class="text-danger">*</span>
                                  <select class="form-control" id="agama_wanita" name="agama_wanita" disabled>
                                    <option value="{{ $pn->agama_wanita }}">{{ $pn->agama_wanita }}</option>
                                  </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="pekerjaan_wanita">Pekerjaan</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="pekerjaan_wanita" name="pekerjaan_wanita" placeholder="Pekerjaan" disabled value="{{ $pn->pekerjaan_wanita }}">
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                  <label for="alamat_wanita">Alamat</label><span class="text-danger">*</span>
                                  <textarea class="form-control" id="alamat_wanita" name="alamat_wanita" placeholder="Alamat" disabled>{{ $pn->alamat_wanita }}</textarea>
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
                            <a href="{{ asset('storage/kesos/surat_pengantar/'.$pn->surat_pengantar) }}" target="_blank" class="btn btn-link">
                              <i class="fas fa-file-pdf"></i>
                              Surat Pengantar Dari RT
                            </a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <a href="{{ asset('storage/kesos/ktp/'.$pn->ktp) }}" target="_blank" class="btn btn-link">
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
                    Formulir KESOS - Surat Pengantar Nikah
                </div>
            </div>
            <div class="card-body">
                @if(session("pesan"))
                  <div class="alert alert-success">
                {{ session("pesan") }}
                </div>
                @endif
                <form action="/kesos/pengantar-nikah" method="post" enctype="multipart/form-data">
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
                            <label for="kewarganegaraan">Kewarganegaraan</label><span class="text-danger">*</span>
                            <select class="form-control" id="kewarganegaraan" name="kewarganegaraan" required>
                              <option value="">Pilih Kewarganegaraan</option>
                              <option value="WNI" {{ old("kewarganegaraan") == "WNI" ? "selected" : "" }}>WNI</option>
                              <option value="WNA" {{ old("kewarganegaraan") == "WNA" ? "selected" : "" }}>WNA</option>
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
                      
                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="{{ old("pekerjaan") }}" required>
                        </div>
                      </div>
                    </div>

                    {{-- Data Perkawinan Seorang Pria dengan Wanita(nama, nik, jenis_kelamin, ttl, kewarganegaraan, agama, pekerjaan, alamat) --}}
                    <h4 class="my-3">Data Anak Dari Perkawinan</h4>
                    <div class="row">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Seorang Pria</h3>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="nama_pria">Nama</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="nama_pria" name="nama_pria" placeholder="Nama" value="{{ old("nama_pria") }}" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="nik_pria">NIK</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="nik_pria" name="nik_pria" placeholder="NIK" value="{{ old("nik_pria") }}" required>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ttl_pria">Tempat Tanggal Lahir</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="ttl_pria" name="ttl_pria" placeholder="Tempat Tanggal Lahir" value="{{ old("ttl_pria") }}" required>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="kewarganegaraan_pria">Kewarganegaraan</label><span class="text-danger">*</span>
                                  <select class="form-control" id="kewarganegaraan_pria" name="kewarganegaraan_pria" required>
                                    <option value="">Pilih Kewarganegaraan</option>
                                    <option value="WNI" {{ old("kewarganegaraan_pria") == "WNI" ? "selected" : "" }}>WNI</option>
                                    <option value="WNA" {{ old("kewarganegaraan_pria") == "WNA" ? "selected" : "" }}>WNA</option>
                                  </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="agama_pria">Agama</label><span class="text-danger">*</span>
                                  <select class="form-control" id="agama_pria" name="agama_pria" required>
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam" {{ old("agama_pria") == "Islam" ? "selected" : "" }}>Islam</option>
                                    <option value="Kristen" {{ old("agama_pria") == "Kristen" ? "selected" : "" }}>Kristen</option>
                                    <option value="Katolik" {{ old("agama_pria") == "Katolik" ? "selected" : "" }}>Katolik</option>
                                    <option value="Hindu" {{ old("agama_pria") == "Hindu" ? "selected" : "" }}>Hindu</option>
                                    <option value="Budha" {{ old("agama_pria") == "Budha" ? "selected" : "" }}>Budha</option>
                                    <option value="Konghucu" {{ old("agama_pria") == "Konghucu" ? "selected" : "" }}>Konghucu</option>
                                  </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="pekerjaan_pria">Pekerjaan</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="pekerjaan_pria" name="pekerjaan_pria" placeholder="Pekerjaan" value="{{ old("pekerjaan_pria") }}" required>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                  <label for="alamat_pria">Alamat</label><span class="text-danger">*</span>
                                  <textarea class="form-control" id="alamat_pria" name="alamat_pria" placeholder="Alamat" required>{{ old("alamat_pria") }}</textarea>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Seorang Wanita</h3>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="nama_wanita">Nama</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="nama_wanita" name="nama_wanita" placeholder="Nama" value="{{ old("nama_wanita") }}" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="nik_wanita">NIK</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="nik_wanita" name="nik_wanita" placeholder="NIK" value="{{ old("nik_wanita") }}" required>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="ttl_wanita">Tempat Tanggal Lahir</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="ttl_wanita" name="ttl_wanita" placeholder="Tempat Tanggal Lahir" value="{{ old("ttl_wanita") }}" required>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="kewarganegaraan_wanita">Kewarganegaraan</label><span class="text-danger">*</span>
                                  <select class="form-control" id="kewarganegaraan_wanita" name="kewarganegaraan_wanita" required>
                                    <option value="">Pilih Kewarganegaraan</option>
                                    <option value="WNI" {{ old("kewarganegaraan_wanita") == "WNI" ? "selected" : "" }}>WNI</option>
                                    <option value="WNA" {{ old("kewarganegaraan_wanita") == "WNA" ? "selected" : "" }}>WNA</option>
                                  </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="agama_wanita">Agama</label><span class="text-danger">*</span>
                                  <select class="form-control" id="agama_wanita" name="agama_wanita" required>
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam" {{ old("agama_wanita") == "Islam" ? "selected" : "" }}>Islam</option>
                                    <option value="Kristen" {{ old("agama_wanita") == "Kristen" ? "selected" : "" }}>Kristen</option>
                                    <option value="Katolik" {{ old("agama_wanita") == "Katolik" ? "selected" : "" }}>Katolik</option>
                                    <option value="Hindu" {{ old("agama_wanita") == "Hindu" ? "selected" : "" }}>Hindu</option>
                                    <option value="Budha" {{ old("agama_wanita") == "Budha" ? "selected" : "" }}>Budha</option>
                                    <option value="Konghucu" {{ old("agama_wanita") == "Konghucu" ? "selected" : "" }}>Konghucu</option>
                                  </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="pekerjaan_wanita">Pekerjaan</label><span class="text-danger">*</span>
                                  <input type="text" class="form-control" id="pekerjaan_wanita" name="pekerjaan_wanita" placeholder="Pekerjaan" value="{{ old("pekerjaan_wanita") }}" required>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                  <label for="alamat_wanita">Alamat</label><span class="text-danger">*</span>
                                  <textarea class="form-control" id="alamat_wanita" name="alamat_wanita" placeholder="Alamat" required>{{ old("alamat_wanita") }}</textarea>
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
