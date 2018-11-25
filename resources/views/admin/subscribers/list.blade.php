@extends('admin.master')
@extends('admin.master')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Users Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-lg-2"><a class="btn btn-success" href={{asset('/admin/subscribers/create')}}>Додади Нов Претплатник</a></div>
                <form role="form" method="POST" action="{{route('admin.subscribers.store')}}">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label>Име на Градот</label><br><br>
                            <input type="text" class="form-control" id="exampleInpuNameCharacteristic1" placeholder="Внеси Име на Градот" name="city">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer buttons">
                        <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.cities.list')}}"  style="display:inline"> Откажи</a>
                        <button type="submit" class="btn btn-success fa fa-check" style="display:inline"> Додади</button>
                    </div>
                </form>
            </div>
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 297px;">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 257px;">Email</th>
                            </thead>
                            <tbody id="Click">
                            @foreach($subscribers as $subscriber)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$subscriber->id}}</td>
                                    <td>{{ $subscriber->email }}</td>
                                    <td>
                                        <a class="btn btn-block btn-warning btn-sm"  href="{{route('admin.users.edit', $user->id )}}">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-block btn-danger delete-button btn-sm" data-id="{{$user->id}}" data-token="{{csrf_token()}}" data-url="{{route('admin.subscribers.delete')}}">Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">ID</th>
                                <th rowspan="1" colspan="1">Email</th>
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

