@extends('admin.master')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title">Додадете нова Крводарителска Акција</h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('admin.bloodactions.store')}}">
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputNameCharacteristic1">Име на Крводарителска Акција</label><br><br>
                            <input type="text" class="form-control" id="exampleInpuNameCharacteristic1" placeholder="Внеси Име на Крводарителска Акција" name="characteristic">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputNameCharacteristic1">Локација на Крводарителска Акција</label><br><br>
                            <input type="text" class="form-control" id="exampleInpuNameCharacteristic1" placeholder="Внеси Локација на Крводарителска Акција" name="characteristic">

                        </div>
                    </div>
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-3">

                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer buttons">
                <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.bloodactions.list')}}"  style="display:inline"> Откажи</a>
                <button type="submit" class="btn btn-success fa fa-check" style="display:inline"> Додади</button>
            </div>
        </form>
        <!-- form end  -->
    </div>
    @endsection
