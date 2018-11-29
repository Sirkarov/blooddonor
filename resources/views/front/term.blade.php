@extends('master')
@section('content')
    <div class="container" style="padding-bottom: 200px;padding-top:60px">
        <div class="row">
            <div class="col-lg-8 offset-2">
                <div class="card">
                    <h4 class="card-header text-center" style="background-color: #ff0000;color:white;">Закажи Термин</h4>
                    <div class="card-body">
                        <h2 style="font-weight: bold;">Податоци за Корисникот: </h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Име:  <strong>{{Auth::user()->name}} </strong></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Презиме:  <strong>{{Auth::user()->surname}} </strong></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Емаил:  <strong>{{Auth::user()->email}} </strong></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Крвна Група:  <strong>{{Auth::user()->genderType}} </strong></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Донации:  <strong>{{Auth::user()->donations}} </strong></h3>
                            </div>
                        </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
