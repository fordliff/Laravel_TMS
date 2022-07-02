
<style>
    table, th, td {
      border: 1px solid black;
    }
    </style>

@extends('Layouts.masterlayout')

@section('content')    
<head>
   
</head>
   <title>Status</title>

   
    @if(Session::has('delete_post'))
                <span>{{Session::get('delete_post')}}</span>
            @endif
            <br>
    <a style="padding:10px;" href="{{route('view.status')}}" class="btn btn-primary">Add User</a><br>
    <table >
        <tr style="font-weight:border;">
            <th>ID</th>
            <th>Status Name</th>
            <th>Description</th>
          <th>  <center> Action </center></th>
        </tr>
        
        @foreach($getAllStatus as $allstatus)
            <tr>            
                <td>{{$allstatus->statusID}}</td>
                <td>{{$allstatus->statusname}}</td>
                <td>{{$allstatus->Description}}</td>
              <!--  <td><a  href="/edit-post/{{$myUsers->id}}" class="btn btn-primary">Edit</a>   &nbsp;|&nbsp;                    
                <a  href="/delete-post/{{$myUsers->id}}" class="btn btn-danger sm">Delete</a></td>   
              -->
            </tr>
        @endforeach
    </table>

  @endsection

