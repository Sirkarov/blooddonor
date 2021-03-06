@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center" style="margin-bottom:10px"><h1><strong>Крводарителски Акции во Македонија 2018/19 година</strong></h1></div>
    @foreach($blood_actions as $action)
        <div class="col-lg-12" style="margin-bottom: 10px;">
        <div class="card" style=" background-color: #f2f2f2">
            <h5 class="card-header h5" style="background-color: #ff0000;color:white">{{$action->name}}</h5>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-lg-6">
                        <h6 class="card-title">Локација:</h6>
                        <h3><strong>{{$action->location}}</strong></h3>
                    </div>
                    <div class="col-lg-2">
                        <h6 class="card-title">Град:</h6>
                        <h3><strong>{{$action->city->name}}</strong></h3>
                    </div>
                    <div class="col-lg-2">
                        <h6 class="card-title">Датум:</h6>
                        <h4><strong>{{$action->date}}</strong></h4>
                    </div>
                    <div class="col-lg-2">
                        <h6 class="card-title">Време:</h6>
                        <h4><strong>{{$action->time}} h</strong></h4>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
