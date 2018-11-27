@extends('admin.master')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Измени го Претплатникот {{$subscriber->email}}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-lg-6">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th style="width: 10px">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <form action="{{route('admin.subscribers.update',$subscriber->id)}}" method="POST">
                            {{ csrf_field() }}
                            <td>{{$subscriber->id}}</td>
                            <td ><input type="text" value="{{$subscriber->email}}" name="email"></td>
                            <td>
                                <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.subscribers.list')}}"> Откажи</a>
                            </td>
                            <td>
                                <button type="submit"  class="btn btn-block btn-success btn-sm fa fa-times"> Зачувај</button>
                            </td>
                        </form>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
