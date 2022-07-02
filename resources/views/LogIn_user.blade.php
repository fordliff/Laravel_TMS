

@extends('Layouts.masterlayout')

@section('content')    
<head>
      <title>Sign In</title>
</head>
 
     
       <form method="post" action="{{route('save.user')}}"  >      
        @csrf
    @if(Session::has('save_user'))
           <span style="color:blue; font-size:14px;">{{Session::get('save_user')}}</span>
       @endif
        <div   class="main1 row">  
          
           <p class="sign" align="center">Sign In</p>  
       

          
               <input class="un " type="text" align="center" name="username" value="{{old('username')}}" placeholder="Username"> 
               @error('username')
               <br> 
               <center><span align="center" style="color:red;">{{$message}}</span></center>
               @enderror
              
             <input class="pass" type="password" name="password" value="" placeholder="Enter Password" >
            @error('password')
            <br>  <center><span align="center" style="color:red;">{{$message}}</span></center><br>
            @enderror
           <input type="submit" name="submit" class="submit"  value="Submit"  >  
            </div>         
          <br>
                    
        
     </div>      
 </form>   
   
  
  @endsection


