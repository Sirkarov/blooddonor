@extends('master')
@include('includes.user_profile_scripts')
@section('content')
<div class="container" style="padding-top:50px;padding-bottom:150px">
<div class="row">
    <div class="col-lg-9"><h1 style="margin-left: 35px;">{{Auth::user()->name}} {{Auth::user()->surname}}</h1></div>
    <div class="col-lg-3">
        <a class="btn btn-block btn-danger fa fa-times cancel-edit-btn" href="{{route('user_profile',Auth::user()->id)}}"  style="display:inline"> Откажи</a>
        <button type="submit" class="btn btn-success fa fa-check" style="display:inline"> Зачувај</button>
    </div>
</div>
<div class="row">
    <div class="col-lg-3"><!--left col-->


        <div class="text-center">
            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
            <h6 style="color:black">Upload a different photo...</h6>
            <input type="file" class="text-center center-block file-upload" style="margin-left:30px">
        </div></hr><br>

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
                    @if($user->birth == null)
                        <input type="text" value="/"  class="form-control" readonly name="birth">
                    @else
                        <input type="text" value="{{$user->birth}}"  class="form-control" readonly name="gender">
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Пол</label>
                    @if($user->genderType->type == "")
                        <input type="text" value="/"  class="form-control" readonly name="gender">
                    @else
                        <input type="text" value="{{$user->genderType->type}}"  class="form-control" readonly name="gender">
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Град</label>
                    @if($user->city->name == "")
                        <input type="text" value="/"  class="form-control" readonly name="city">
                    @else
                        <input type="text" value="{{$user->city->name}}"  class="form-control" readonly name="city">
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Крвна Група</label>
                    @if($user->bloodType->type == "")
                        <input type="text" value="/"  class="form-control" readonly name="surname">
                    @else
                        <input type="text" value="{{$user->bloodType->type}}"  class="form-control" readonly name="surname">
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Години</label>
                    @if($user->years == 0)
                        <input type="text" value="/"  class="form-control" readonly name="surname">
                    @else
                        <input type="text" value="{{$user->years}}"  class="form-control" readonly name="surname">
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Број на Донации</label>
                    @if($user->donations == 0)
                        <input type="text" value="/"  class="form-control" readonly name="surname">
                    @else
                        <input type="text" value="{{$user->donations}}"  class="form-control" readonly name="surname">
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Телефон</label>
                    @if($user->phone == "")
                        <input type="text" value="/"  class="form-control" readonly name="surname">
                    @else
                        <input type="text" value="{{$user->phone}}"  class="form-control" readonly name="surname">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div><!--/col-9-->
</div><!--/row-->
@endsection
