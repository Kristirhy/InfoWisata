@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
        <h1>
          Info Wisata
          <small>List Wisata</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Info Wisata Jogja</li>
        </ol>
      </section>
@endsection
@section('content')
   <div class="box box-primary">
       <div class="box-header">
           <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data</button>
       </div>
       <div class="box-body">
           <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Form Input Wisata</h4>
                    </div>
                    <form id="formwisata">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Wisata </label>
                                <input class="form-control" name="nama_wisata" id="nama_wisata">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi </label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Kategori Wisata </label>
                                <select class="form-control" name="kategori_wisata" id="kategori_wisata">
                                    @foreach ($datacategory as $item)
                                        <option value="{{$item->id_category}}"> {{$item->nama_kategori}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat </label>
                                <textarea class="form-control" name="alamat" id="alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto </label>
                                <input class="form-control" name="foto" type="file" id="foto">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-send"></i> Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            <div id="modals2" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Form Ubah Wisata</h4>
                    </div>
                    <form id="formwisataedit">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Wisata </label>
                                <input class="form-control" name="nama_wisataedit" id="nama_wisataedit">
                                <input type="hidden" id="idwisata">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi </label>
                                <textarea class="form-control" name="deskripsiedit" id="deskripsiedit"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Kategori Wisata </label>
                                <select class="form-control" name="kategori_wisataedit" id="kategori_wisataedit">
                                    @foreach ($datacategory as $item)
                                        <option value="{{$item->id_category}}"> {{$item->nama_kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat </label>
                                <textarea class="form-control" name="alamatedit" id="alamatedit"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto </label>
                                <input class="form-control" name="fotoedit" type="file" id="fotoedit">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-send"></i> Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            <table class="table" id="myTable">
                <thead>
                    <th>Nama Wisata</th>
                    <th>Kategori</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </thead>
            </table>
       </div>
   </div>
@stop
@section('script')
<script>
    function myfunc(id){
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url:'/api/wisata/'+id,
                            type:'DELETE',
                            success:function(){
                                Swal.fire(
                                            'Sukses!',
                                            'Data Sukses di hapus!',
                                            'success'
                                        )
                                        table.ajax.reload();
                            }
                        })
                    }
                })
          
        }
        function editfunc(id){
            $.ajax({
                url:'/api/wisata/'+id,
                type:'GET',
                success:function(data){
                    console.log(data);
                    $( '#nama_wisataedit' ).val(data.nama_wisata);
                    $( '#deskripsiedit' ).val(data.deskripsi);
                    $( '#kategori_wisataedit' ).val(data.id_kategori);
                    $( '#alamatedit' ).val(data.alamat);
                    $( '#idwisata' ).val(data.id_wisata);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/api/wisata",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama_wisata' },
                            { data: 'nama_kategori' },
                            { data: 'alamat' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id_wisata+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id_wisata+")'>Delete</button>";
                                }
                            }
                        ]
                    });
$('document').ready(function(){

        $('form[id="formwisata"]').validate({
            rules: {
                nama_wisata: 'required',
                deskripsi: 'required',
                kategori_wisata: 'required',
                alamat: 'required',
                foto: 'required',
            },
            messages: {
                judul: 'This field is required',

            },
            submitHandler: function(form) {
                var data;
                data = new FormData();
                data.append( 'nama_wisata', $( '#nama_wisata' ).val());
                data.append( 'deskripsi', $( '#deskripsi' ).val());
                data.append( 'kategori_wisata', $( '#kategori_wisata' ).val());
                data.append( 'alamat', $( '#alamat' ).val());
                data.append( 'foto', $( '#foto' )[0].files[0] );
                $.ajax({
                    url:'/api/wisata',
                    method:'POST',
                    data:data,
                    contentType: false,
                    processData:false,
                    success:function(){
                        Swal.fire(
                                'Sukses!',
                                'Data Sukses di simpan!',
                                'success'
                            ).then(function(){
                                $( '#nama_kategori' ).val('');
                                $('#myModal').modal('toggle');
                            })
                            table.ajax.reload();
                    }
                })
            }
        });
        $('form[id="formwisataedit"]').validate({
            rules: {
                nama_kategoriedit: 'required',
                deskripsiedit: 'required',
                kategori_wisataedit: 'required',
                alamatedit: 'required',
            },
            messages: {
                judul: 'This field is required',

            },
            submitHandler: function(form) {
                var id = $('#idwisata').val();
                var data;
                data = new FormData();
                data.append('_method', 'PUT');
                data.append( 'nama_wisata', $( '#nama_wisataedit' ).val());
                data.append( 'deskripsi', $( '#deskripsiedit' ).val());
                data.append( 'kategori_wisata', $( '#kategori_wisataedit' ).val());
                data.append( 'alamat', $( '#alamatedit' ).val());
                data.append( 'foto', $( '#foto' )[0].files[0] );
                $.ajax({
                    url:'/api/wisata/'+id,
                    method:'POST',
                    data:data,
                    contentType: false,
                    processData:false,
                    success:function(){
                        Swal.fire(
                                'Sukses!',
                                'Data Sukses di simpan!',
                                'success'
                            ).then(function(){
                                $( '#nama_kategoriedit' ).val('');
                                $( '#deskripsiedit' ).val('');
                                $( '#nama_kategoriedit' ).val('');
                                $( '#kategori_wisataedit' ).val('');
                                $( '#alamatedit' ).val('');
                                $('#modals2').modal('toggle');
                            })
                            table.ajax.reload();
                    }
                })
            }
        });

})
</script>
@endsection
