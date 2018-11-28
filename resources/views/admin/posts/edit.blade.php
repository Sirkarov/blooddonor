@section('title')
    @extends('admin.master')
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title">Измени информации за огласот <b>{{$post->id}}</b></h1>
        </div>
        <form role="form" method="POST" action="{{route('admin.posts.update',$post->id)}}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputName1">Опис</label>
                    <textarea class="form-control" required rows="5" name="description">{{$post->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputSurname1">Крвна Група</label>
                    <select class="form-control" required name="bloodType">
                        <option hidden value="{{$post->blood_type_id}}">{{$post->bloodType->type}}</option>
                        @foreach($blood_types as $bloodType)
                            <option value="{{$bloodType->id}}">{{$bloodType->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Град</label>
                    <select class="form-control" required name="city">
                        <option hidden value="{{$post->city_id}}">{{$post->city->name}}</option>
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer buttons">
                <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.posts.list')}}"  style="display:inline"> Откажи</a>
                <button type="submit" class="btn btn-success fa fa-check" style="display:inline"> Зачувај</button>
            </div>
        </form>
        <!-- form end  -->
    </div>
@endsection
