@extends('admin.master')
@section('content')
    <div class="box cities">
        <div class="box-header with-border">
            <h3 class="box-title">Измени го градот {{$city->name}}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-lg-6">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th style="width: 10px">Град</th>
                        <th style="width: 15px">Откажи</th>
                        <th style="width: 10px">Зачувај</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <form action="{{route('admin.cities.update',$city->id)}}" method="POST">
                            {{ csrf_field() }}
                            <td>{{$city->id}}</td>
                            <td ><input type="text" value="{{$city->name}}" name="city"></td>
                            <td>
                                <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.cities.list')}}"> Откажи</a>
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
