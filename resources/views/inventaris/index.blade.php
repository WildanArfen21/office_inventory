@extends('template.main')
@section('konten')
@section('title' ,'Halaman Barang')
@section('page','Data Barang')

<div class="card">
    <div class="card-header">
        {{-- <a href="/kategori/create" class="btn btn-primary">Tambah Data</a> --}}
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
        {{-- @include('kategori.create') --}}
    </div>

</div>


<script type="text/javascript">
    function read() {
        $.get("{{ url('barang/read') }}", {}, function (data, status) {
            
            $("#read").html(data);
        });
    }

    function create() {

        $.get("{{ url('barang/create') }}", {}, function (data, status) {

            $('#btn-modal').click();

            $("#modal").html(data);
        });
    }


    function store() {

        var data = {
            'kode': $('#kode').val(),
            'nama': $('#nama').val(),
            'merk': $('#merk').val(),
            'satuan': $('#satuan').val(),
            'kategori': $('#kategori').val(),
        }


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "{{ url('barang/store') }}",
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
        $.get(`{{ url('barang/${uuid}/edit') }}`, {}, function (data, status) {
            $('#btn-modal').click();
            $("#modal").html(data);
        });
    }

    function update(uuid) {

        var data = {
            'kode': $('#kode').val(),
            'nama': $('#nama').val(),
            'merk': $('#merk').val(),
            'satuan': $('#satuan').val(),
            'kategori': $('#kategori').val(),
        }


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "PUT",
            url: `{{ url('barang/${uuid}/update') }}`,
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
            url: `{{ url('barang/${uuid}/destroy') }}`,
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
