@extends('layouts.app')
@section('content')


  <div class="row mt-3">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <div class="card-title">
                      <i class="fas fa-building"></i>
                      Bidang KESOS
                  </div>
              </div>
              <div class="card-body">
                  <h4>Pilih berkas yang ingin diajukan</h4>
                  <a href="/kesos/skck">
                    <div class="callout callout-info">
                      <h5><i class="fas fa-file-alt"></i> <strong>Surat Keterangan Cek Kesehatan</strong></h5>
                      <p>Isi form untuk mengajukan berkas surat keterangan cek kesehatan</p>
                    </div>
                  </a>
                  <a href="/kesos/keterangan-usaha">
                    <div class="callout callout-info">
                      <h5><i class="fas fa-file-alt"></i> <strong>Keterangan Usaha</strong></h5>
                      <p>Isi form untuk mengajukan berkas keterangan usaha</p>
                    </div>
                  </a>
                  <a href="/kesos/pengantar-nikah">
                    <div class="callout callout-info">
                      <h5><i class="fas fa-file-alt"></i> <strong>Pengantar Nikah</strong></h5>
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
