{{-- @extends('template.main')
@section('konten')
@section('title' ,'Halaman Tambah Kategori')
@section('page','Tambah Kategori')

@endsection --}}


{{-- <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-dialog"> --}}
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Create Data Kategori</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="card-body">
            <ul id="errorform"></ul>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
                <input type="hidden" name="kode" id="kode" value="" class="form-control">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right" id="submitbtn" onclick="store()">Submit</button>
            <button type="button" class="btn btn-default" id="btn-close" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
{{-- </div>
</div>
 --}}
