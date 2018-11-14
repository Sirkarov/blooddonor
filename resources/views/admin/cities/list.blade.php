@extends('admin.master')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Cities</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-lg-6">
                <div class="col-sm-1"><a class="btn btn-success " href={{asset('/admin/cities/create')}}>Add New City</a></div><br><br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Град</th>
                        <th>Измени</th>
                        <th>Избриши</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    @foreach( $cities as $city )
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
