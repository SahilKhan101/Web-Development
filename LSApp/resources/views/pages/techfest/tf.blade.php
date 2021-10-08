@extends('layouts.app')
<?php
use App\Models\User;
?>
@section('content')

        {{-- <hr>
        ({{Auth::getDefaultDriver()}})
        <hr>
        {{Auth::guard('user')->user()->name}}
        <hr> --}}

        @if($user=User::find(auth()->user()->id))
                <p>Here are Your Accouns : <br>{{$user->accounts}}</p>
        @endif
        <p><a class="btn btn-primary btn-lg" href="/tf/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="accounts/create" role="button">Register</a></p>

@endsection
