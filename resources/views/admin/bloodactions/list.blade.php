@extends('admin.master')
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Крводарителски Акции</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="col-lg-6">
            <div class="col-sm-1"><a class="btn btn-success " href={{asset('/admin/bloodactions/create')}}>Нова Крводарителска Акција</a></div><br><br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10px">ID</th>
                <th style="width: 30px">Име</th>
                <th style="width: 30px">Локација</th>
                <th style="width: 30px">Град</th>
                <th style="width: 30px">Датум</th>
                <th style="width: 30px">Време</th>
                <th style="width: 10px">Измени</th>
                <th style="width: 10px">Избриши</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
            @foreach( $blood_actions as $blood_action )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td style="width:180px">{{$blood_action->name}}</td>
                <td style="width:500px">{{$blood_action->location}}</td>
                <td>{{$blood_action->city->name}}</td>
                <td>{{$blood_action->date}}</td>
                <td>{{$blood_action->time}}</td>
                <td>
                   <a class="btn btn-block btn-warning btn-sm" href="{{route('admin.bloodactions.edit', $blood_action->id )}}">Edit</a>
                </td>
                <td>
                <form role="form" method="POST" action="{{route('admin.bloodactions.destroy', $blood_action->id)}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-block btn-danger btn-sm">Delete</button>
                </form>
                </td>
            </tr>
                @endforeach
        </table>
        </div>
    </div>
</div>
@endsection
