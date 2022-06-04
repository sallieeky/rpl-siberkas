@extends('layouts.app')
@section('content')
@php
  $i = 1;
@endphp

  <div class="row mt-3">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <div class="card-title">
                      <i class="fas fa-history"></i>
                      History Pengajuan Berkas
                  </div>
              </div>
              <div class="card-body">
                {{-- buat table untuk menampilkan berkas yang diajukan --}}
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Nama Berkas</th>
                    <th>Bidang</th>
                    <th>Status</th>
                    <th>Berkas Balasan</th>
                    <th>Admin Yang Menangani</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $key => $value)
                      @foreach ($value["data"] as $vl)
                        <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $vl->nama }}</td>
                          <td>{{ $vl->nik }}</td>
                          <td>{{ $value["nama"] }}</td>
                          <td>{{ $value["bidang"] }}</td>
                          {{-- status --}}
                          @if ($vl->status == "Diterima")
                            <td>
                              <span class="badge badge-warning">
                                <i class="fas fa-clock"></i>
                                {{ $vl->status }}
                              </span>
                            </td>
                          @elseif ($vl->status == "Diperiksa")
                            <td>
                              <span class="badge badge-info">
                                <i class="fas fa-info"></i>
                                {{ $vl->status }}
                              </span>
                            </td>
                          @elseif ($vl->status == "Ditolak")
                            <td>
                              <span class="badge badge-danger">
                                <i class="fas fa-times"></i>
                                {{ $vl->status }}
                              </span>
                            </td>
                          @elseif ($vl->status == "Selesai")
                            <td>
                              <span class="badge badge-success">
                                <i class="fas fa-check"></i>
                                {{ $vl->status }}
                              </span>
                            </td>
                          @endif
                          
                          {{-- berkas balasan --}}
                          @if ($vl->berkas_balasan == "")
                            <td>
                              <span class="badge badge-danger">
                                <i class="fas fa-times"></i>
                                Belum Ada
                              </span>
                            </td>
                          @else
                          <td>
                            <a href="{{ asset("storage/berkas_balasan/" . $vl->berkas_balasan) }}" target="_blank" class="btn btn-sm btn-primary">
                              <i class="fas fa-download"></i>
                              Download Berkas Balasan
                            </a>
                          </td>
                          @endif
                          {{-- admin yang menangani --}}
                          @if ($vl->admin_id == "")
                            <td>
                              <span class="text-disabled"><em>Belum Ditanggapi</em></span>
                            </td>
                          @else
                            <td>
                              <span class="text-disabled">
                                {{ $vl->admin->nama }}
                              </span>
                            </td>
                          @endif
                          <td>
                            <a href="/detail" class="btn btn-info btn-sm">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                    @endforeach
                  </tbody>
                </table>
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
