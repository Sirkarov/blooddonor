@extends('admin.master')
@section('content')
    <h1 class="box-title">Менаџирање на Прашања</h1>
    <div class="box">
        <div class="box-body">
            <div class="row">
                <div class="col-lg-4">
                    <form role="form" method="POST" action="{{route('admin.questions.store')}}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group" style="display: inline">
                                        <label for="exampleInputEmail1">Внеси ново Прашање</label>
                                        <input type="text" required class="form-control" placeholder="Внеси Прашање" name="title">
                                    </div>
                                    <button type="submit" class="btn btn-success fa fa-check pull-left" style="margin-top: 10px;height: 34px"> Додади</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-lg-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20px;">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 80px;">Активен</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 80px;">Корисник</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 80px;">Наслов</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 80px;">Содржина</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 30px;"></th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 30px;"></th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 30px;"></th>
                            </thead>
                            <tbody id="Click">
                            @foreach($questions as $question)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$question->id}}</td>
                                    <td><input type="checkbox" value="{{$question->isActive}}" style="height: 20px;width: 70px;" class="custom-control-input" id="isActive"></td>
                                    <td>{{$question->user->name}}</td>
                                    <td>{{ $question->title }}</td>
                                    <td>{{ $question->description }}</td>
                                    <td>
                                        <a class="btn btn-block btn-success btn-sm"  href="{{route('admin.questions.more', $question->id )}}">More</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-block btn-warning btn-sm"  href="{{route('admin.questions.edit', $question->id )}}">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-block btn-danger delete-button btn-sm" data-id="{{$question->id}}" data-token="{{csrf_token()}}" data-url="{{route('admin.questions.delete')}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">ID</th>
                                <th rowspan="1" colspan="1">Активен</th>
                                <th rowspan="1" colspan="1">Корисник</th>
                                <th rowspan="1" colspan="1">Наслов</th>
                                <th rowspan="1" colspan="1">Содржина</th>
                                <th rowspan="1" colspan="1">Види Повеќе</th>
                                <th rowspan="1" colspan="1">Edit</th>
                                <th rowspan="1" colspan="1">Delete</th>
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

