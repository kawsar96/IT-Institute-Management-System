@extends('layouts.app')

@section('content')



    <div style="margin-top:100px">
        <button class="btn col-lg-4 offset-lg-4 btn-primary my-2 btn-lg"><a class="linked btn-lg btn-block" href="/pending/post">1st installment</a></button>
        <button class="btn col-lg-4 offset-lg-4 btn-success my-2 btn-lg"><a class="linked btn-lg btn-block" href="/pending2/post2">2nd installment</a></button>
        
    </div>

    <div style="margin-top:100px">
<button class="btn col-lg-2 offset-lg-5 btn-danger my-2 btn-lg"><a class="linked btn-lg btn-block" href="/admin">Return Back</a></button>
</div>   


        @endsection