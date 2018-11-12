@section('title')
    @extends('admin.master')
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title">Измени информации за коисникот <b>{{$user->name}} {{$user->surname}}</b></h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('admin.users.update',$user->id)}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputName1">Име</label>
                    <input type="text" class="form-control" value="{{$user->name}}" required name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputSurname1">Презиме</label>
                    <input type="text" class="form-control" value="{{$user->surname}}" required name="surname">
                </div>
                <div class="form-group">
                    <label for="exampleInputSurname1">Улога</label>
                    <select class="form-control" required name="role">
                        <option hidden value="{{$user->role_id}}">{{$user->roleType->role}}</option>
                        @foreach($roleTypes as $roleType)
                            <option value="{{$roleType->id}}">{{$roleType->role}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputSurname1">Пол</label>
                    <select class="form-control" required name="gender">
                        <option hidden value="{{$user->gender_type_id}}">{{$user->genderType->type}}</option>
                        @foreach($genderTypes as $genderType)
                            <option value="{{$genderType->id}}">{{$genderType->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Адреса</label>
                    <input type="email"  class="form-control" value="{{$user->email}}" required name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Години</label>
                    <input type="text"  class="form-control" value="{{$user->years}}" required name="years">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Град</label>
                    <select class="form-control" required name="city">
                        <option hidden value="{{$user->city_id}}">{{$user->city->name}}</option>
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Телефон</label>
                    <input type="text"  class="form-control" value="{{$user->phone}}" required name="phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Опис</label>
                    <input type="text" class="form-control" value="{{$user->description}}" required name="description">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Facebook</label>
                    <input type="text"  class="form-control" value="{{$user->facebook}}" required name="facebook">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Twitter</label>
                    <input type="text"  class="form-control" value="{{$user->twitter}}" required name="twitter">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer buttons">
                <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.users.list')}}"  style="display:inline"> Откажи</a>
                <button type="submit" required class="btn btn-success fa fa-check" style="display:inline"> Зачувај</button>
            </div>
        </form>
        <!-- form end  -->
    </div>
@endsection
