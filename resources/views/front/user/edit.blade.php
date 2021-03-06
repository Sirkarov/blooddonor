@extends('master')
@include('includes.user_profile_scripts')
@section('content')
<div class="container" style="padding-top:50px;padding-bottom:250px">
    <form role="form" method="POST" action="{{route('user_update',$user->id)}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-9"><h1 style="margin-left: 35px;">{{Auth::user()->name}} {{Auth::user()->surname}}</h1></div>
            <div class="col-lg-3">
                <a class="btn btn-block btn-danger fa fa-times cancel-edit-btn" href="{{route('user_profile',Auth::user()->id)}}"  style="display:inline"> Откажи</a>
                <button type="submit" class="btn btn-success fa fa-check" style="display:inline"> Зачувај</button>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-3">
            <div class="form-group"><!--left col-->
                <div class="text-center">
                    <img src="{{asset("uploads/".$user->image)}}" width="200" height="300" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6 style="color:black">Профил</h6>
                <input type="file" class="text-center center-block file-upload" name="image" style="margin-left:30px">
            </div></hr><br>
            </div>

        </div><!--/col-3-->
        <div class="col-lg-9">
            <div class="user-profile box-body">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Име</label>
                            <input type="text" value="{{$user->name}}"  class="form-control" readonly name="name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Презиме</label>
                            <input type="text" value="{{$user->surname}}"  class="form-control" readonly name="surname">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" value="{{$user->email}}"  class="form-control" readonly name="email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label>Датум на Раѓање</label>
                        <input type="date" value="{{$user->birth}}"  required class="form-control" name="birth">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputSurname1">Пол</label>
                        @if($user->genderType->id == 1)
                        <select class="form-control" required name="gender">
                            <option value="">Избери Пол</option>
                            @foreach($genderTypes as $genderType)
                                <option value="{{$genderType->id}}">{{$genderType->type}}</option>
                            @endforeach
                        </select>
                            @else
                            <select class="form-control" required name="gender">
                                <option value="{{$user->genderType->id}}">{{$user->genderType->type}}</option>
                                @foreach($genderTypes as $genderType)
                                    <option value="{{$genderType->id}}">{{$genderType->type}}</option>
                                @endforeach
                            </select>
                            @endif
                    </div>
                </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label>Град</label>
                        @if($user->city->id == 1)
                      <select class="form-control" required name="city">
                          <option  value="">Избери Град</option>
                          @foreach($cities as $city)
                              <option value="{{$city->id}}">{{$city->name}}</option>
                          @endforeach
                      </select>
                            @else
                            <select class="form-control" required name="city">
                                <option  value="{{$user->city->id}}">{{$user->city->name}}</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label>Крвна Група</label>
                        @if($user->bloodType->id == 1)
                       <select class="form-control" required name="bloodType">
                           <option value="">Избери Крвна Група</option>
                           @foreach($bloodTypes as $bloodType)
                               <option value="{{$bloodType->id}}">{{$bloodType->type}}</option>
                           @endforeach
                       </select>
                            @else
                            <select class="form-control" required name="bloodType">
                                <option value="{{$user->bloodType->id}}">{{$user->bloodType->type}}</option>
                                @foreach($bloodTypes as $bloodType)
                                    <option value="{{$bloodType->id}}">{{$bloodType->type}}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label>Години</label>
                        @if($user->years == 0)
                        <select class="form-control" required name="years">
                            <option value="">Внеси Години</option>
                            @for($i=17;$i<64;$i++)
                                <option value="{{$i }}">{{$i}}</option>
                                @endfor
                        </select>
                            @else
                            <select class="form-control" required name="years">
                                <option value="{{$user->years}}">{{$user->years}}</option>
                                @for($i=17;$i<64;$i++)
                                    <option value="{{$i }}">{{$i}}</option>
                                @endfor
                            </select>
                        @endif
                    </div>
                </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label>Број на Донации</label>
                        @if($user->donations == 0)
                        <select class="form-control" required name="donations">
                            <option value="">Внеси Број на Донации</option>
                            @for($i=0;$i<150;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                            @else
                            <select class="form-control" required name="donations">
                                <option value="{{$user->donations}}">{{$user->donations}}</option>
                                @for($i=0;$i<150;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        @endif
                    </div>
                </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label>Телефон</label>
                       <input class="form-control" value="{{$user->phone}}" placeholder="Внеси Телефон" type="text" required name="phone">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form><!--/col-9-->
</div><!--/row-->
@endsection
