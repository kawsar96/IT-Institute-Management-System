@extends('layouts.app')

@section('content')

<div style="margin-top:150px">
    <button class="btn col-lg-4 offset-lg-4 btn-info my-2 btn-lg"><a class="linked btn-lg btn-block" href="/parttimeadmin/register">Part-time employee manager Registration</a></button>
    <button class="btn col-lg-4 offset-lg-4 btn-success my-2 btn-lg"><a class="linked btn-lg btn-block" href="/parttimeadmin/list">Part-time employee manager List</a></button>
    <button class="btn col-lg-2 offset-lg-5 btn-danger my-8 btn-lg"><a class="linked btn-lg btn-block" href="/admin">Return</a></button>
</div>
        <!-- <button class="btn btn-danger col-lg-12">
            <a href="/user/reg" class="btn btn-lg btn-danger">User Registration</a>
        </button>
        
        <button class="btn btn-info col-lg-12">
            <a href="/user/list" class="btn btn-lg btn-info">User List</a>
        </button>
        <button class="btn btn-danger col-lg-12">
            <a href="/admin" class="btn btn-lg btn-danger">Return</a>
        </button> -->
        @endsection