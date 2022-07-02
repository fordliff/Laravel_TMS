

@extends('Layouts.masterlayout')

@section('content')    
<head>
   
</head>
   <title>Log In</title>


  <br>
  @if(Session::has('add-post'))
            <span>{{Session::get('add-post')}}</span>
        @endif
   
       <form method="post" action=" "  >
        <div class="main1">

              
            <p class="sign" align="center">Log In</p>
            <form method="post" action=""  >
              <input class="un " type="text" align="center" placeholder="Username">
              <input class="pass" type="password" align="center" placeholder="Password">
                <input type="submit" name="submit" class="submit"  value="Submit"  >
              <p class="forgot" align="center"><a href="#">Forgot Password?</p>
                    
              </form>              
            </div>   


          @php
               $currentDate = date('Y-m-d'); 
               $currentTime =date('h:m:s');
            //   $currentDate = date('Y-m-d', strtotime($currentDate));   
//$startDate = date('Y-m-d', strtotime("01/09/2019"));
//$endDate = date('Y-m-d', strtotime("01/10/2019")); 



          @endphp  

  @endsection


