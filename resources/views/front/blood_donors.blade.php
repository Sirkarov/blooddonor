@extends('master')
@section('content')
    <div class="container">
        <div class="row" style="padding-bottom: 50px;">
            <div class="col-lg-12 text-center" style="margin-bottom:10px"><h1><strong>Листа на Крводарители во Македонија</strong></h1></div>
            @foreach($blood_donors as $donor)
                <div class="col-lg-6" style="margin-bottom:25px">
                    <div class="card border-pink border-lighten-3" style="background-color: #f2f2f2">
                        <div class="text-center">
                            <div class="card-body">
                                <img src="{{asset("uploads/".$donor->image)}}" class="rounded-circle  height-150" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"> {{$donor -> name}} {{$donor -> surname}}</h5>
                                <h6 class="card-subtitle" style="color:black">Крвна Група <strong>{{$donor->bloodType->type}}</strong></h6>
                            </div>
                            <a  href="{{route('blood_donor.profile', $donor->id )}}"><button type="button"  class="btn btn-primary btn-md" style="margin-bottom:15px;background-color: red">Профил     <i class="fa fa-plus-square"></i></button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
