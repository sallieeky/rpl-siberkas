@extends('layouts.app')
@section('content')


    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </div>
                </div>
                <div class="card-body">
                    <h4>Bidang Pada Dinas</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <i class="fas fa-building"></i>
                                        Bidang PPSDA
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="/ppsda" class="btn btn-primary btn-block">Ajukan Berkas</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <i class="fas fa-building"></i>
                                        Bidang KESOS
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="/kesos" class="btn btn-primary btn-block">Ajukan Berkas</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <i class="fas fa-building"></i>
                                        Bidang TAPEM
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="/tapem" class="btn btn-primary btn-block">Ajukan Berkas</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
