@extends('admin.master')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title">Додадете нова Карактеристика</h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('admin.characteristics.store')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputNameCharacteristic1">Име на Карактеристика</label><br><br>
                    <input type="text" class="form-control" id="exampleInpuNameCharacteristic1" placeholder="Внеси Име на Карактеристика" name="characteristic">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer buttons">
                <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.characteristics.list')}}"  style="display:inline"> Откажи</a>
                <button type="submit" class="btn btn-success fa fa-check" style="display:inline"> Додади</button>
            </div>
        </form>
        <!-- form end  -->
    </div>
    @endsection
