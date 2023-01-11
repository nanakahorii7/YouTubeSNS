@extends('layouts.app')

@section('content')

    <div class="center-block">

        <div class="text-black form-inline center-block　text-center" style = "font-family: cursive;"
        </style>>
            <img src="img/youtube.jpg">
            <h1>×　　　SNS</h1>
        </div>

    </div>
    
    <div class="text-right">

        @if(Auth::check())
            {{ Auth::user()->name }}
        @endif

    </div>
    @include('users.users', ['users'=>$users])

@endsection