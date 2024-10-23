
@extends('layouts.app')

@section('content')

<table class="table tabel-bordered table-dark">
        <tr>            
            <th>Name</th>
            <th>Email</th>
            <th>Job Title</th>    
        </tr>
    @foreach($admins as $key => $admin)
        <tr>    
            <td>{{$admin->name}}</td>
            <td>{{$admin->email}}</td>
            <td>{{$admin->job_title}}</td>
            <td>
                <form action="/admin/destroy/{{$admin->id}}" onclick="return confirm('Are you sure you want to delete this item?');" method="post">       
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
    <div>
        <button class="btn col-lg-4 offset-lg-4 btn-danger my-5 btn-lg"><a class="linked btn-lg" href="/admin/reg">Register Admin</a></button>
    </div>

@endsection


    