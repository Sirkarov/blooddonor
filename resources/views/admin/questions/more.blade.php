@section('title')
    @extends('admin.master')
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title">Информации за прашање <b>{{$question->id}}</b></h1>
        </div>
        <form role="form" method="POST" action="{{route('admin.questions.update',$question->id)}}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <h3>Наслов</h3>
                    <h4>{{$question->title}}</h4>
                </div>
                <div class="form-group">
                    <h3>Опис</h3>
                    <h4>{{$question->description}}</h4>
                </div>
                <div class="form-group">
                    <h3>Корисник</h3>
                    <h4>{{$question->user->name}}</h4>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer buttons">
                <a class="btn btn-block btn-success btn-md fa fa-arrow-left" href="{{route('admin.questions.list')}}"  style="display:inline"> Назад</a>
               </div>
        </form>
        <!-- form end  -->
    </div>
@endsection
