
@extends('master')
@section('content')
    @include('includes.header')
    <!-- main-header section -->
    <!-- popular-cities section -->
    </div>
@endsection
<html lang="{{ app()->getLocale() }}">
@include('includes.head')
 @include('includes.header')
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>
        @include('includes.carousel')
        @include('includes.main')
    @include('includes.about')
    </body>
</html>
