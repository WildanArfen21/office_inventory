@extends('template.main')
@section('konten')
@section('title' ,'Halaman Penempatan Mutasi')
@section('page','Data Penempatan Mutasi')

<div class="card">
    <div class="card-header">
        {{-- <a href="/peminjaman/create" class="btn btn-primary">Tambah Data</a> --}}
        <button type="button" id="btn-modal" style="display: none;" class="btn btn-primary" data-toggle="modal"
            data-target="#modal-default">
            Create
        </button>
        <button onclick="create()" class="btn btn-primary">Create</button>
        <div id="success" class="text-center"></div>
    </div>
    <div class="card-body" id="read">


    </div>
    <!-- /.card-body -->
</div>

{{-- <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;" aria-modal="true" role="dialog"> --}}
<div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" id="modal">
        {{-- @include('peminjaman.create') --}}
    </div>

</div>


<script type="text/javascript">
    function read() {
        $.get("{{ url('penempatan-mutasi/read') }}", {}, function (data, status) {
            $('#close-modal').click();
            $('#close-modal').click();
            $("#read").html(data);
        });
    }

    function create() {

        $.get("{{ url('penempatan-mutasi/create') }}", {}, function (data, status) {

            $('#btn-modal').click();

            $("#modal").html(data);
        });
    }


    function store() {

        var data = {
            'nomor': $('#nomor').val(),
            'nama': $('#nama').val(),
            'lokasi': $('#lokasi').val(),
            'tanggal': $('#tanggal').val(),
            'keterangan': $('#keterangan').val(),
            'jenis': $('#jenis').val(),

        }


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "{{ url('penempatan-mutasi/store') }}",
            data: data,
            dataType: "json",
            success: function (response) {
                // console.log(response);
                if (response.status == 400) {
                    inputalert();
                } else {
                    closemodal();
                    save();
                    read();
                }
            }
        });
    }

    function edit(uuid) {
        $.get(`{{ url('penempatan-mutasi/${uuid}/edit') }}`, {}, function (data, status) {
            $('#btn-modal').click();
            $("#modal").html(data);
        });
    }

    function update(uuid) {

        var data = {
            'nama': $('#nama').val(),
            'tgl_peminjaman': $('#tgl_peminjaman').val(),
            'tgl_akan_kembali': $('#tgl_akan_kembali').val(),
            'status': $('#status').val(),
            'keterangan': $('#keterangan').val(),

        }


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "PUT",
            url: `{{ url('penempatan-mutasi/${uuid}/update') }}`,
            data: data,
            dataType: "json",
            success: function (response) {
                // console.log(response);
                if (response.status == 400) {
                    inputalert();
                } else if (response.status == 404) {
                    notfound();
                } else {
                    closemodal();
                    updatesuccess();
                    read();
                }
            }
        });
    }

    function confirmdel(uuid) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                destroy(uuid);
            }
        });
    }

    function destroy(uuid) {
        $.ajax({
            type: "get",
            url: `{{ url('penempatan-mutasi/${uuid}/destroy') }}`,
            dataType: "json",
            success: function (response) {
                // console.log(response);

                if (response.status == 200) {
                    closemodal();
                    deletesuccess();
                    read();
                }
            }
        });
    }

    function closemodal(){
        $('#close-modal').click();
        $('#close-modal').click();
    }

</script>


@endsection