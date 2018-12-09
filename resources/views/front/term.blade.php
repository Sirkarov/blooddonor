@extends('master')
@section('content')
    <div class="container" style="padding-bottom: 200px;padding-top:60px">
        <div class="row">
            <div class="col-lg-8 offset-2">
                <div class="card">
                    <div class="row text-center">
                        <div class="col-lg-12">
                            @if (session('message'))
                                <div class="alert alert-success" style="background-color: lightgreen">
                                    <h3><strong>{{ session('message') }}</strong></h3>
                                </div>
                            @endif
                        </div>
                    </div>
                    <h4 class="card-header text-center" style="background-color: #ff0000;color:white;">Закажи Термин</h4>
                    <div class="card-body">
                        <h2 style="font-weight: bold;">Податоци за Корисникот: </h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Име:  <strong>{{$user->name}} </strong></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Презиме:  <strong>{{$user->surname}} </strong></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Емаил:  <strong>{{$user->email}} </strong></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Крвна Група:  <strong>{{$user->bloodType->type}} </strong></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Донации:  <strong>{{$user->donations}} </strong></h3>
                            </div>
                        </div>
                        <br><hr>
                        <form role="form" method="POST" action="{{route('storeTerm')}} " >
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <h3>Внеси Датум</h3><br><br>
                                        <input type="date" required class="form-control" name="date">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <h3>Внеси Време</h3><br><br>
                                        <input type="time" required class="form-control" name="time">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputYears1">Град</label>
                                        <select class="form-control" required name="city">
                                            <option hidden value="">Одбери Град</option>
                                            @foreach($cities as $city)
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-right">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success btn-lg fa fa-check" style="display:inline;background-color: red"> Закажи</button>
                                </div>
                            </div>
                        </form>
                </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
