

@extends('Layouts.masterlayout')

@section('content')    
<head>
      <title>Sign In</title>
</head>
  @if(Session::has('save_user'))
            <span>{{Session::get('save_user')}}</span>
        @endif
 
     
       <form method="post" action="{{route('save_user')}}"  >      
       
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
              <input class="pass" type="password" align="center" name="password" value="" placeholder="Password">
              @error('Password')
              <p style="color:red;">{{$message}}</p>
             @enderror
              <input class="pass " type="password" align="center"  name="password_confirmation" value="" placeholder="Confirm Password">
              @error('password_confirmation')
              <p style="color:red;">{{$message}}</p>
             @enderror
            </div>
            <br>
            <div class="col-md-4">
            </div>
             <div class="col-md-2">
            <input type="submit" name="submit" class="submit"  value="Submit"  >            
           </div>  
           <div class="col-md-4">
           </div>
          </div>    
             
             
                                  
                        
        
 </form>   

  
  @endsection


