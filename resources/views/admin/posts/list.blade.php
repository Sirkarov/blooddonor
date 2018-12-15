@extends('admin.master')
@section('content')
    <h3 class="box-title">Менаџирање на Огласи</h3>
    <div class="box">
        <div class="box-header">

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-lg-2"><a class="btn btn-success" href={{asset('/admin/posts/create')}}>Додади Нов Оглас</a></div>
            </div>
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 297px;">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Опис</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 323px;">Крвна Група</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 257px;">Град</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;"></th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;"></th>
                            </tr>
                            </thead>
                            <tbody id="Click">
                            @foreach($posts as $post)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$post->id}}</td>
                                    <td>{{ $post->description }}</td>
                                    <td>{{ $post->bloodType->type}}</td>
                                    <td>{{ $post->city->name}}</td>
                                    <td>
                                        <a class="btn btn-block btn-warning btn-sm"  href="{{route('admin.posts.edit', $post->id )}}">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-block btn-danger delete-button btn-sm" data-id="{{$post->id}}"
                                           data-token="{{csrf_token()}}" data-url="{{route('admin.posts.delete')}}">Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">ID</th>
                                <th rowspan="1" colspan="1">Опис</th>
                                <th rowspan="1" colspan="1">Крвна Група</th>
                                <th rowspan="1" colspan="1">Град</th>
                                <th rowspan="1" colspan="1"></th>
                                <th rowspan="1" colspan="1"></th>
                            </tr>
                            </tfoot>
                        </table></div></div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
@section('custom-scripts')
    <script>
        $(document).ready(function () {
            $("#example1").on("click", ".delete-button", function(){
                var token = $(this).data('token');
                var url = $(this).data('url');
                var id= $(this).data("id");
                var that = $(this);
                swal({
                    title: "Дали сте сигурни?",
                    text: "Нема да можете да вратите избришани податоци",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                method: "DELETE",
                                url: url,
                                data : {_token:token, id: id},
                                success: function(response){
                                    swal("Успешно е избришано.", {
                                        icon: "success",
                                    });
                                    if(response.status=='success') {
                                        that.closest('tr').fadeOut(500);
                                    }
                                }
                            });
                        }
                    });
            });
        });
    </script>
@endsection

