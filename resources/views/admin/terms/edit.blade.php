@section('title')
    @extends('admin.master')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title">Измени информации за Терминот <b>{{$term->id}}</b></h1>
        </div>
        <form role="form" method="POST" action="{{route('admin.terms.update',$term->id)}}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputYears1">Корисник</label>
                    <select class="form-control" required name="user">
                        <option hidden value="{{$term->user_id}}">{{$term->user->name}} {{$term->user->surname}}</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}} {{$user->surname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Град</label>
                    <select class="form-control" required name="city">
                        <option hidden value="{{$term->city_id}}">{{$term->city->name}}</option>
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Датум</label>
                    <input type="date" required class="form-control" value="{{$term->date}}" name="date">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Време</label>
                    <input type="time" required class="form-control" value="{{$term->time}}" name="time">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer buttons">
                <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.terms.list')}}"  style="display:inline"> Откажи</a>
                <button type="submit" class="btn btn-success fa fa-check" style="display:inline"> Зачувај</button>
            </div>
        </form>
        <!-- form end  -->
    </div>
@endsection
