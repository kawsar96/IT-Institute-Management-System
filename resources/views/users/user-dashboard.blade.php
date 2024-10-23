@extends('layouts.app')

@section('content')



    <div style="margin-top:60px">
    <button class="btn col-lg-4 offset-lg-4 btn-primary my-2 btn-lg "><a class="linked btn-lg btn-block" href="/student">Student Panel</a></button>
        <button class="btn col-lg-4 offset-lg-4 btn-primary my-2 btn-lg"><a class="linked btn-lg btn-block" href="/employee/dashboard">Employee Panel</a></button>
        <button class="btn col-lg-4 offset-lg-4 btn-primary my-2 btn-lg"><a class="linked btn-lg btn-block" href="/user/dashboard">User Panel</a></button>
        <button class="btn col-lg-4 offset-lg-4 btn-primary my-2 btn-lg"><a class="linked btn-lg btn-block" href="/parttimeadmin/dashboard">Part-time Employee Management Panel</a></button>
        <button class="btn col-lg-4 offset-lg-4 btn-danger my-2 btn-lg"><a class="linked btn-lg btn-block" href="/notification">Notifications</a></button>
        
    </div>




        @endsection