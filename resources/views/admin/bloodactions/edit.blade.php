@extends('admin.master')
@section('content')
    <div class="box characteristics">
        <div class="box-header with-border">
            <h3 class="box-title">Измени ја Крводарителската Акција {{$blood_action->name}}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-lg-6">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th style="width: 10px">Карактеристика</th>
                        <th style="width: 15px">Откажи</th>
                        <th style="width: 10px">Зачувај</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <form action="{{route('admin.bloodactions.update',$blood_action->id)}}" method="POST">
                            {{ csrf_field() }}
                        <td>{{$blood_action->id}}</td>
                            <td><input type="text" value="{{$blood_action->name}}" name="name"></td>
                            <td><input type="text" value="{{$blood_action->location}}" name="location"></td>
                            <td><input type="text" value="{{$blood_action->city_id}}" name="city"></td>
                            <td><input type="text" value="{{$blood_action->date}}" name="date"></td>
                            <td><input type="text" value="{{$blood_action->time}}" name="time"></td>

                        <td>
                            <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.bloodactions.list')}}"> Откажи</a>
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
