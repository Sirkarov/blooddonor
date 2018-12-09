@extends('admin.master')
@section('content')
    <h3 class="box-title">Менаџирање Корисници</h3>
    <div class="box">
        <div class="box-header">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-lg-2"><a class="btn btn-success" href={{asset('/admin/users/create')}}>Додади Нов Корисник</a></div>
                <div class="col-lg-2">
                    <form role="form" method="POST" action="{{route('admin.users.testStore')}}">
                        {{ csrf_field() }}
                        <button type="submit" required class="btn btn-warning" style="margin-left:30px">ДОДАДИ ТЕСТ КОРИСНИК</button>
                    </form>
                </div>
            </div>
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 297px;">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Име</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 323px;">Презиме</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 257px;">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Пол</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Години</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Крвна Група</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Дата на Раѓање</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Град</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Телефон</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Дарувања</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;"></th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;"></th>
                            </tr>
                            </thead>
                            <tbody id="Click">
                            @foreach($users as $user)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$user->id}}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->surname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->genderType->type}}</td>
                                    <td>{{ $user->years }}</td>
                                    <td>{{ $user->bloodType->type}}</td>
                                    <td>{{ $user->birth }}</td>
                                    <td>{{ $user->city->name}}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->donations }}</td>
                                    <td>
                                        <a class="btn btn-block btn-warning btn-sm"  href="{{route('admin.users.edit', $user->id )}}">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-block btn-danger delete-button btn-sm" data-id="{{$user->id}}"
                                           data-token="{{csrf_token()}}" data-url="{{route('admin.users.delete')}}">Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">ID</th>
                                <th rowspan="1" colspan="1">Име</th>
                                <th rowspan="1" colspan="1">Презиме</th>
                                <th rowspan="1" colspan="1">Email</th>
                                <th rowspan="1" colspan="1">Пол</th>
                                <th rowspan="1" colspan="1">Години</th>
                                <th rowspan="1" colspan="1">Крвна Група</th>
                                <th rowspan="1" colspan="1">Дата на Раѓање</th>
                                <th rowspan="1" colspan="1">Град</th>
                                <th rowspan="1" colspan="1">Телефон</th>
                                <th rowspan="1" colspan="1">Дарувања</th>
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

