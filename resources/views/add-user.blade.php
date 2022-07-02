

@extends('Layouts.masterlayout')

@section('content')    
<head>
   
</head>
   <title>Sign In</title>

  @if(Session::has('save_user'))
            <span>{{Session::get('save_user')}}</span>
        @endif
   
       <form method="post" action=""  >
        <div class="main2 footer2">
          <p class="sign" align="center">Sign In</p>
            <form method="post" action=" "  >
              <input class="un " type="text" align="center" placeholder="Username"> 
               <input class="un " type="text" align="center" placeholder="fullname"> 
              <input class="un " type="text" align="center" placeholder="phoneNo">
              <input class="un " type="text" align="center" placeholder="email">
              <input class="pass" type="password" align="center" placeholder="Password">
              <input class="pass " type="text" align="center" placeholder="Confirm Password">
                <input type="submit" name="submit" class="submit"  value="Submit"  >
                    
              </form>              
            </div>   


  @endsection


