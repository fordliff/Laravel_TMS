

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
        <div   class="main2 row">  
          
           <p class="sign" align="center">Sign In</p>  
       

            <div class="col-md-6">
               <input class="un " type="text" align="center" name="username" value="{{old('username')}}" placeholder="Username"> 
               @error('username')
                <p style="color:red;">{{$message}}</p>
               @enderror
               <input class="un " type="text" align="center"   name="fullname" value="{{old('fullname')}}"  placeholder="Fullname"> 
               @error('fullname')
               <p style="color:red;">{{$message}}</p>
              @enderror
              <input class="un " type="text" align="center" name="phoneNo"  value="{{old('phoneNo')}}"  placeholder="Phone Number">
              @error('phoneNo')
              <p style="color:red;">{{$message}}</p>
             @enderror
            </div>
            <div class="col-md-6"> <input class="un " type="text" align="center" name ="email" value="{{old('email')}}"  placeholder="Email">
              @error('email')
              <p style="color:red;">{{$message}}</p>
             @enderror
             <input class="pass" type="password" name="password" value="" placeholder="Enter Password" ><br><br>
            @error('password')
            <p style="color:red;">{{$message}}</p>
            @enderror
            <input class="pass" type="password" name="password_confirmation" value="" placeholder="Enter Confirm Password" ><br><br>
            @error('password_confirmation')
            <p style="color:red;">{{$message}}</p>
            @enderror
            </div>         
          <br>
          <input type="submit" name="submit" class="submit"  value="Submit"  >            
        
     </div>      
 </form>   

  
  @endsection


