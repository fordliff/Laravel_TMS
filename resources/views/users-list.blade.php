<style>
    table, th, td {
      border: 1px solid black;
    }
    </style>
    @extends('Layouts.masterlayout')
    
    @section('content')  
    <center> 
    @if(Session::has('delete_post'))
                <span>{{Session::get('delete_post')}}</span>
            @endif
            <br>
    <a style="padding:10px;" href="{{route('users.list')}}" class="btn btn-primary">Add User</a><br>
    <table >
        <tr style="font-weight:border;">
            <th>Username</th>
            <th>Fullname</th>
            <th>Phone Number</th>
            <th>Emaill Address</th> 
          <th>  <center> Action </center></th>
        </tr>
        
        @foreach($allUsers as $myUsers)
            <tr>            
                <td>{{strtolower($myUsers->username)}}</td>
                <td>{{strtoupper($myUsers->Fullname)}}}}</td>
                <td>{{$myUsers->phoneNo}}</td>
                <td>{{strtolower($myUsers->email)}}</td>
                <td><a  href="/edit-post/{{$myUsers->id}}" class="btn btn-primary">Edit</a>   &nbsp;|&nbsp;                    
                <a  href="/delete-post/{{$myUsers->id}}" class="btn btn-danger sm">Delete</a></td>   
                
            </tr>
            @endforeach
        </table>       
               
       </center>    
    
      @endsection

      
    
    
    
   