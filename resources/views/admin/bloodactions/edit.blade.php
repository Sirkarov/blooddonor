@extends('admin.master')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Измени ја Крводарителската Акција {{$blood_action->name}}</h3>
        </div>
        <!-- /.box-header -->
        <form role="form" method="POST" action="{{route('admin.bloodactions.update',$blood_action->id)}}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputName1">Име</label>
                    <input type="text" class="form-control" value="{{$blood_action->name}}" required name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputSurname1">Локација</label>
                    <input type="text" class="form-control" value="{{$blood_action->location}}" required name="location">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Град</label>
                    <select class="form-control" required name="city">
                        <option hidden value="{{$blood_action->city_id}}">{{$blood_action->city->name}}</option>
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Датум</label>
                    <input type="date" required class="form-control" value="{{$blood_action->date}}" name="date">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Време</label>
                    <input type="time" required class="form-control" value="{{$blood_action->time}}" name="time">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer buttons">
                <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.bloodactions.list')}}"  style="display:inline"> Откажи</a>
                <button type="submit" class="btn btn-success fa fa-check" style="display:inline"> Зачувај</button>
            </div>
        </form>
    </div>
    @endsection
