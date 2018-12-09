@section('title')
    @extends('admin.master')
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title">Измени информации за огласот <b>{{$question->id}}</b></h1>
        </div>
        <form role="form" method="POST" action="{{route('admin.questions.update',$question->id)}}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputName1">Наслов</label>
                    <textarea class="form-control" required rows="5" name="title">{{$question->title}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Опис</label>
                    <textarea class="form-control" required rows="5" name="description">{{$question->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Корисник</label>
                    <select class="form-control" required name="user">
                        <option hidden value="{{$question->user_id}}"></option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
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
