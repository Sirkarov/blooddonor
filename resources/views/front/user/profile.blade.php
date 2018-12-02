@extends('master')
@include('includes.user_profile_scripts')
@section('content')
<div class="container" style="padding-top:50px;padding-bottom:150px">
<div class="row">
    <div class="col-lg-9"><h1 style="margin-left: 35px;">{{Auth::user()->name}} {{Auth::user()->surname}}</h1></div>
    <div class="col-lg-2">
        <a class="btn btn-block btn-warning edit-profile-btn"  href="{{route('edit_profile', $user->id )}}">Измени Профил</a>
    </div>
</div>
<div class="row">
<div class="col-lg-3"><!--left col-->

    <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
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
{{--<div class="col-lg-9">

        <div class="col-lg-6">
            <label for="first_name"><h4>ИМЕ</h4></label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
        </div>

        <div class="col-lg-6">
            <label for="last_name"><h4>ПРЕЗИМЕ</h4></label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
        </div>

        <div class="col-lg-6">
            <label for="phone"><h4>Phone</h4></label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
        </div>

        <div class="col-lg-6">
            <label for="mobile"><h4>Mobile</h4></label>
            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
        </div>

        <div class="col-lg-6">
            <label for="email"><h4>Email</h4></label>
            <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
        </div>

        <div class="col-lg-6">
            <label for="email"><h4>Location</h4></label>
            <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
        </div>

        <div class="col-lg-6">
            <label for="password"><h4>Password</h4></label>
            <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
        </div>

        <div class="col-lg-6">
            <label for="password2"><h4>Verify</h4></label>
            <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
        </div>
    </div>--}}
</div><!--/col-9-->
</div><!--/row-->
@endsection
