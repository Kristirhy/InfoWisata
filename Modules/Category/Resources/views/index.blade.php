@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
        <h1>
          Category
          <small>List Category</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
          <li class="active">Category</li>
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
                    <h4 class="modal-title">Form Input Category</h4>
                    </div>
                    <form id="formcategory">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Kategori </label>
                                <input class="form-control" name="nama_kategori" id="nama_kategori">
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
                    <h4 class="modal-title">Form Ubah Category</h4>
                    </div>
                    <form id="formcategoryedit">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Kategori </label>
                                <input class="form-control" name="nama_kategoriedit" id="nama_kategoriedit">
                                <input type="hidden" id="idcategory">
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
                    <th>Nama Kategori</th>
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
                            url:'/api/category/'+id,
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
                url:'/api/category/'+id,
                type:'GET',
                success:function(data){
                    console.log(data);
                    $( '#nama_kategoriedit' ).val(data.nama_kategori);
                    $( '#idcategory' ).val(data.id_category);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/api/category",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama_kategori' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id_category+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id_category+")'>Delete</button>";
                                }
                            }
                        ]
                    });
$('document').ready(function(){

        $('form[id="formcategory"]').validate({
            rules: {
                nama_kategori: 'required',
            },
            messages: {
                judul: 'This field is required',

            },
            submitHandler: function(form) {
                var data;
                data = new FormData();
                data.append( 'nama_kategori', $( '#nama_kategori' ).val());
                $.ajax({
                    url:'/api/category',
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
        $('form[id="formcategoryedit"]').validate({
            rules: {
                nama_kategoriedit: 'required',
            },
            messages: {
                judul: 'This field is required',

            },
            submitHandler: function(form) {
                var id = $('#idcategory').val();
                var data;
                data = new FormData();
                data.append('_method', 'PUT');
                data.append( 'nama_kategori', $( '#nama_kategoriedit' ).val());
                $.ajax({
                    url:'/api/category/'+id,
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
