@extends('admin.master')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title">Додадете нов Град</h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('admin.cities.store')}}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputNameCharacteristic1">Име на Градот</label><br><br>
                    <input type="text" class="form-control" id="exampleInpuNameCharacteristic1" placeholder="Внеси Име на Градот" name="city">
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer buttons">
                <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.cities.list')}}"  style="display:inline"> Откажи</a>
                <button type="submit" class="btn btn-success fa fa-check" style="display:inline"> Додади</button>
            </div>
        </form>
        <!-- form end  -->
    </div>
@endsection
