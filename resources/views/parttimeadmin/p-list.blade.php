@extends('layouts.app')

@section('content')
<table class="table tabel-bordered table-dark">
        <tr>
            
            <th>Name</th>
            <th>Email</th>
           
           
                
        </tr>
        @foreach($padmins as $key => $padmin)
        <tr>
            
            <td>{{$padmin->name}}</td>
            <td>{{$padmin->email}}</td>
            
            
          
            <td>
          

               
            <form action="/parttimeadmin/destroy/{{$padmin->id}}" onclick="return confirm('Are you sure you want to delete this item?');" method="post">
                    
                     
                 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
      </tr>
      
 
      @endforeach
</table>
      <div style="margin-top:100px">
<button class="btn col-lg-2 offset-lg-5 btn-danger my-2 btn-lg"><a class="linked btn-lg btn-block" href="/parttimeadmin/dashboard">Return Back</a></button>
</div>   
      @endsection
      