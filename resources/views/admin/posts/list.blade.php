@extends('admin.master')
@section('content')
    <h3 class="box-title">Менаџирање на Огласи</h3>
    <div class="box">
        <div class="box-body">
            <div class="col-lg-6">
                <div class="col-sm-1"><a class="btn btn-success " href={{asset('/admin/posts/create')}}>Додај нов Оглас</a></div><br><br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Наслов</th>
                        <th>Опис</th>
                        <th>Крвна Група</th>
                        <th>Град</th>
                        <th>Измени</th>
                        <th>Избриши</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    @foreach( $posts as $post )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$city->name}}</td>

                            <td>
                                <a class="btn btn-block btn-warning btn-sm" href="{{route('admin.cities.edit', $city->id )}}">Edit</a>
                            </td>
                            <td>
                                <form role="form" method="POST" action="{{route('admin.cities.destroy', $city->id)}}">
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
