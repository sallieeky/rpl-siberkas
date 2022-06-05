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
                      <i class="fas fa-file-upload"></i>
                      Pengajuan Berkas Masuk
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
                          {{-- status select --}}
                          <td>
                            <select class="form-control" name="status" id="status-{{ $key }}-{{ $vl->id }}">
                              @foreach ($status as $st)
                                @if ($vl->status == $st)
                                  <option value="{{ $st }}" selected>{{ $st }}</option>
                                @else
                                  <option value="{{ $st }}">{{ $st }}</option>
                                @endif                                
                              @endforeach
                            </select>
                          </td>
                          {{-- berkas balasan --}}
                          <td>
                            @if($vl->berkas_balasan)
                            <a href="{{ asset("storage/berkas_balasan/" . $vl->berkas_balasan) }}" target="_blank">Lihat Berkas</a> | 
                            <form action="/upload-berkas-balasan" id="form-{{ $key }}-{{ $vl->id }}" method="POST" enctype="multipart/form-data" class="d-inline">
                              @csrf
                              <input type="hidden" name="id" value="{{ $vl->id }}">
                              <input type="hidden" name="user_id" value="{{ $vl->user_id }}">
                              <input type="hidden" name="nama" value="{{ $value["nama"] }}">
                              <label for="berkas_balasan_{{ $key }}_{{ $vl->id }}" class="btn-link" style="cursor: pointer; font-weight: normal">ubah Berkas</label>
                              <input type="file" name="berkas_balasan" style="display: none" id="berkas_balasan_{{ $key }}_{{ $vl->id }}" class="form-control">
                            </form>
                            @else
                            <form action="/upload-berkas-balasan" id="form-{{ $key }}-{{ $vl->id }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="id" value="{{ $vl->id }}">
                              <input type="hidden" name="nama" value="{{ $value["nama"] }}">
                              <label for="berkas_balasan_{{ $key }}_{{ $vl->id }}" class="btn-link" style="cursor: pointer; font-weight: normal">Upload Berkas</label>
                              <input type="file" name="berkas_balasan" style="display: none" id="berkas_balasan_{{ $key }}_{{ $vl->id }}" class="form-control">
                            </form>
                            @endif
                          </td>
                          
                          <td>
                            <a href="/{{ strtolower($value["bidang"]) }}/{{ $key }}/detail/{{ $vl->id }}" class="btn btn-info btn-sm" target="_blank">
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

<script>
  $(document).ready(function(){
    // for loop untuk mengubah status
    @foreach ($data as $key => $value)
      @foreach ($value["data"] as $vl)
        $("#berkas_balasan_{{ $key }}_{{ $vl->id }}").change(function(){
              $("#form-{{ $key }}-{{ $vl->id }}").submit();
            }); 
        $("#status-{{ $key }}-{{ $vl->id }}").change(function(){
          $("#status-{{ $key }}-{{ $vl->id }}").prop("disabled", true);
          var status = $(this).val();
          var id = "{{ $vl->id }}";
          var nama = "{{ $value["nama"] }}";
          var bidang = "{{ $value["bidang"] }}";
          var nik = "{{ $vl->nik }}";
          var nama_berkas = "{{ $value["nama"] }}";
          var url = "/update-status";
          $.ajax({
            url: url,
            type: "POST",
            data: {
              "_token": "{{ csrf_token() }}",
              status: status,
              id: id,
              nama: nama,
              bidang: bidang,
              nik: nik,
              nama_berkas: nama_berkas
            },
            success: function(data){
              // console.log(data);
              $("#status-{{ $key }}-{{ $vl->id }}").prop("disabled", false);
            }, error: function(data){
              // console.log(data);
              $("#status-{{ $key }}-{{ $vl->id }}").prop("disabled", false);
            }
          });
        });
      @endforeach
    @endforeach
  });
</script>

@endsection
