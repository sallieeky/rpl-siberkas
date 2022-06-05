@extends('layouts.app')
@section('content')

  <div class="row mt-3">
      <div class="col-md-12">
        @if($user->email == null || $user->ttl == null || $user->alamat == null || $user->no_telp == null || $user->jenis_kelamin == null)
        <div class="alert alert-info" role="alert">
          <i class="fas fa-info-circle"></i>
          <strong>Lengkapi Akun!</strong>
          <p>
            Lengkapi data akun anda terlebih dahulu sebelum ingin mengajukan berkas.
          </p>
        </div>
        @endif

          <div class="card">
              <div class="card-header">
                  <div class="card-title">
                      <i class="fas fa-users"></i>
                      Profile Akun
                  </div>
              </div>
              <div class="card-body">
                @if (session('pesan'))
                  <div class="alert alert-success" role="alert">
                    {{ session("pesan") }}
                  </div>
                @endif

                <form action="{{ url('/profile/update/' . $user->id) }}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="nama">Nama</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $user->nama }}" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="nik">NIK</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" readonly value="{{ $user->nik }}" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="ttl">TTL</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="ttl" name="ttl" placeholder="TTL" value="{{ $user->ttl }}" required>
                      </div>
                    </div>
      
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="email">Email</label><span class="text-danger">*</span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $user->email }}" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="password">Password</label><span class="text-danger">*</span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" value="{{ $user->no_telp }}" required>
                      </div>
                    </div>
      
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label><span class="text-danger">*</span>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                          <option value="">Pilih Jenis Kelamin</option>
                          <option value="Laki-laki" {{ $user->jenis_kelamin == "Laki-laki" ? "selected" : "" }}>Laki-laki</option>
                          <option value="Perempuan" {{ $user->jenis_kelamin == "Perempuan" ? "selected" : "" }}>Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="alamat">Alamat</label><span class="text-danger">*</span>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $user->alamat }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <button class="btn btn-primary">Simpan Perubahan</button>
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
