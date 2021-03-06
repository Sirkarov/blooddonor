@extends('admin.master')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title">Додадете нов Термин</h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('admin.terms.store')}}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputYears1">Корисник</label>
                    <select class="form-control" required name="city">
                        <option hidden value="">Одбери Корисник</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}} {{$user->surname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Град</label>
                    <select class="form-control" required name="city">
                        <option hidden value="">Одбери Град</option>
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputNameCharacteristic1">Датум</label><br><br>
                    <input type="date"  data-date-format="mm-dd-yyyy" data-date-start-date="Date.default" required class="form-control" id="exampleInpuNameCharacteristic1" name="date">
                </div>
                <div class="form-group">
                    <label for="exampleInputNameCharacteristic1">Време</label><br><br>
                    <input type="time" required class="form-control" id="exampleInpuNameCharacteristic1" name="time">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer buttons">
                <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.terms.list')}}"  style="display:inline"> Откажи</a>
                <button type="submit" class="btn btn-success fa fa-check" style="display:inline"> Додади</button>
            </div>
        </form>
        <!-- form end  -->
    </div>
@endsection
