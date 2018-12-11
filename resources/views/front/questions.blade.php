@extends('master')
@section('content')
<div class="questions container" style="padding-top:20px;">
    <h1 style="font-weight: bold">Најчесто поставувани прашања за Крводарителството</h1>
    <div class="row">
        <div class="col-lg-5" style="height: 20px">
            @if (session('message'))
                <div class="alert alert-success" style="background-color: lightgreen;">
                    <h5 style="color:black"><strong>{{ session('message') }}</strong></h5>
                </div>
            @endif
        </div>
        <div class="col-lg-7">
            <form role="form" method="POST" action="{{route('admin.questions.frontstore')}}">
                {{ csrf_field() }}
                <div class="form-group sub">
                    <div class="input-group">
                        <input type="text" required class="form-control" placeholder="Постави прашање" name="title">
                        <button class="btn btn-default" type="submit" style="margin-left: 2px;background-color: red;font-weight: bold;color:white;">Постави Прашање</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row" style="margin-top: 10px">
        @foreach($questions as $question)
        <div class="col-lg-12">
            <div class="card">
                <h5 class="card-header h5" style="background-color: #ff0000;color:white;">{{$question->title}}</h5>
                <div class="card-body">
                    <div class="row text-center">
                        <h5>
                        {{$question->description}}
                        </h5>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
    </div>
</div>
@endsection
