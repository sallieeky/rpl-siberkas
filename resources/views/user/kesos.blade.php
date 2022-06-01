@extends('layouts.app')
@section('content')


    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{-- table rank staff of the month --}}
                    <div class="card-title">
                      <i class="fas fa-building"></i>
                        Bidang KESOS
                    </div>
                </div>
                <div class="card-body">
                    <h4>Bidang Pada Dinas</h4>
                    
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
