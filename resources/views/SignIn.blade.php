

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
               <input class="un " type="text" align="center"  value="{{old('username')}}" placeholder="Username"> 
               <input class="un " type="text" align="center"  value="{{old('fullname')}}"  placeholder="fullname"> 
              <input class="un " type="text" align="center"  value="{{old('phoneNo')}}"  placeholder="phoneNo">
            </div>
            <div class="col-md-6"> <input class="un " type="text" align="center" value="{{old('email')}}"  placeholder="email">
              <input class="pass" type="password" align="center"  value="{{'Password'}}" placeholder="Password">
              <input class="pass " type="password" align="center"  name="password_confirmation" value="" placeholder="Confirm Password">
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


