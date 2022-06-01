@extends('layouts.app')
@section('content')


  <div class="row mt-3">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <div class="card-title">
                      <i class="fas fa-building"></i>
                      Bidang TAPEM
                  </div>
              </div>
              <div class="card-body">
                  <h4>Pilih berkas yang ingin diajukan</h4>
                  <a href="/ppsda/keperluan-pbb">
                    <div class="callout callout-info">
                      <h5><i class="fas fa-file-alt"></i> <strong>Formulir Pendaftaran Perpindahan Penduduk</strong></h5>
                      <p>Isi form untuk mengajukan berkas surat keterangan cek kesehatan</p>
                    </div>
                  </a>
                  <a href="/ppsda/keterangan-harga-bangunan">
                    <div class="callout callout-info">
                      <h5><i class="fas fa-file-alt"></i> <strong>Formulir Meminta Surat Keterangan</strong></h5>
                      <p>Isi form untuk mengajukan berkas keterangan usaha</p>
                    </div>
                  </a>
                  <a href="/ppsda/keterangan-memiliki-bangunan">
                    <div class="callout callout-info">
                      <h5><i class="fas fa-file-alt"></i> <strong>Formulir Keterangan Kurang Mampu</strong></h5>
                      <p>Isi form untuk mengajukan berkas pengantar nikah</p>
                    </div>
                  </a>
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
