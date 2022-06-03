@extends('layouts.app')
@section('content')


    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <i class="fas fa-comment-dots"></i>
                        Kritik dan Saran
                    </div>
                </div>
                <div class="card-body">
                    <h4>Masukkan kritik dan saran</h4>
                    {{-- alert berhasil dikirim --}}
                    @if (session('pesan'))
                        <div class="alert alert-success">
                            {{ session('pesan') }}
                        </div>
                    @endif
                    <form action="/kritik-dan-saran" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="kritik">Kritik</label>
                            <textarea class="form-control" id="kritik" name="kritik" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="saran">Saran</label>
                            <textarea class="form-control" id="saran" name="saran" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Kirim</button>
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
