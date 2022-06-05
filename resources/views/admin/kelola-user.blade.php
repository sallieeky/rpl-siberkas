@extends('layouts.app')
@section('content')

  <div class="row mt-3">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <div class="card-title">
                      <i class="fas fa-users"></i>
                      Data User
                  </div>
              </div>
              <div class="card-body">
                @if (session('pesan'))
                  <div class="alert alert-success" role="alert">
                    {{ session("pesan") }}
                  </div>
                @endif
                {{-- button tambah user to togle modal --}}
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahUser">
                  <i class="fas fa-plus"></i>
                  Tambah User
                </button>
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Email</th>
                    <th>Ttl</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $us)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $us->nama }}</td>
                        <td>{{ $us->nik }}</td>
                        <td>{{ $us->email }}</td>
                        <td>{{ $us->ttl }}</td>
                        <td>{{ $us->alamat }}</td>
                        <td>{{ $us->no_telp }}</td>
                        <td>{{ $us->jenis_kelamin }}</td>
                        <td>
                          <a href="{{ url('/kelola-user/delete/'.$us->id) }}" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                            Hapus
                          </a>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
      </div>
  </div>
    
  {{-- modal tambah user --}}
  <div class="modal fade" id="tambahUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('/kelola-user/tambah') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nama">Nama</label><span class="text-danger">*</span>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ old("nama") }}" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nik">NIK</label><span class="text-danger">*</span>
                  <input type="text" class="form-control @error("nik") is-invalid @enderror" id="nik" name="nik" placeholder="NIK" value="{{ old("nik") }}" required>
                  @error('nik')
                    <small class="text-danger">{{ $message }}</s>
                  @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="ttl">TTL</label>
                  <input type="text" class="form-control" id="ttl" name="ttl" placeholder="TTL" value="{{ old("ttl") }}">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="no_telp">Nomor Telepon</label>
                  <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin</label>
                  <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="">Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
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
