@extends('admin.master')
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Крводарителски Акции</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
            <div class="row">
                <div class="col-lg-2">
                    <a class="btn btn-success" href={{asset('/admin/bloodactions/create')}}>Нова Крводарителска Акција</a>
                </div>
              {{--  <div class="col-lg-2">
                    <form role="form" method="POST" action="{{route('admin.bloodactions.testStore')}}">
                        {{ csrf_field() }}
                        <button type="submit" required class="btn btn-warning">ДОДАДИ ТЕСТ АКЦИЈА</button>
                    </form>
                </div>--}}
            </div>
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 297px;">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Име</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 323px;">Локација</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 257px;">Град</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Датум</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Време</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Измени</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Избриши</th>
                        </thead>
                        <tbody id="Click">
                        @foreach( $blood_actions as $blood_action )
                            <tr role="row" class="odd">
                                <td class="sorting_1">{{$blood_action->id}}</td>
                                <td>{{ $blood_action->name }}</td>
                                <td>{{ $blood_action->location }}</td>
                                <td>{{ $blood_action->city->name }}</td>
                                <td>{{ $blood_action->date}}</td>
                                <td>{{ $blood_action->time }}</td>
                                <td>
                                    <a class="btn btn-block btn-warning btn-sm"  href="{{route('admin.bloodactions.edit', $blood_action->id )}}">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-block btn-danger delete-button btn-sm" data-id="{{$blood_action->id}}" data-token="{{csrf_token()}}" data-url="{{route('admin.bloodactions.delete')}}">Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">ID</th>
                            <th rowspan="1" colspan="1">Име</th>
                            <th rowspan="1" colspan="1">Локација</th>
                            <th rowspan="1" colspan="1">Град</th>
                            <th rowspan="1" colspan="1">Датум</th>
                            <th rowspan="1" colspan="1">Врреме</th>
                            <th rowspan="1" colspan="1"></th>
                            <th rowspan="1" colspan="1"></th>
                        </tr>
                        </tfoot>
                    </table></div></div>
        </div>
        </div>
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
