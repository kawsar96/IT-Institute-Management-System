@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <strong>WELCOME</strong>!
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <button class="btn col-lg-4 offset-lg-4 btn-danger my-5 btn-lg"><a class="linked btn-lg btn-block" href="/stu">Student Panel</a></button>
</div>

@endsection
