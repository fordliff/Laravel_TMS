
<!DOCTYPE html>
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>{{ config('app.name') }}</title>

<style>
.head1 {
            font-size:35px;
            color: rgb(88,169,250);
            padding: 5;
             /* color:#009900;
          color:blue;
            color:rgb(88,169,250);
            font-weight:bold;*/
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif
        }
        .head2 {
            font-size:17px;
            margin-left:10px;
            margin-bottom:15px;

            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    
    .navbar {
      overflow: hidden;
      background-color:rgb(88,169,250);
    }
    
    .navbar a {
      float: left;
      font-size: 16px;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    .dropdown {
      float: left;
      overflow: hidden;
    }
    
    .dropdown .dropbtn{
      font-size: 16px;  
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }
    
    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: grey;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: rgb(88,169,250);
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      float: none;
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    
    .dropdown-content a:hover {
      background-color: grey;
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
        .menu-log {
            right: auto;
            float: right;
        }

body {
      background-color: #F3EBF6;
      font-family: 'Ubuntu', sans-serif;
  }
  footer {
            width: 100%;
            bottom: 0px;
            position: fixed;
            background-color: #000;
            color: #fff;         
            padding-top:5px;
            padding-bottom:5px;
            text-align:center;
            font-size:30px;
            font-weight:bold;
        }
         
       
  
  .main1 {
      background-color: #FFFFFF;
      width: 350px;
      height: 330px;
      margin: 0.5em auto;
      border-radius: 1.5em;
      box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
  }

  .main2 {
    background-color: #FFFFFF;
      width: 600px;
      height:450px;
      margin: 0.5em auto;
      border-radius: 1.5em;
      box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
  }
  
  
  .sign {
      padding-top: 40px;
      /*color: #8C55AA;*/
      color: cornflowerblue;
      font-family: 'Ubuntu', sans-serif;
      font-weight: bold;
      font-size: 23px;
  }
  
  .un {
  width: 76%;
  color: rgb(38, 50, 56);
  font-weight: 700;
  font-size: 14px;
  letter-spacing: 1px;
  background: rgba(136, 126, 126, 0.04);
  padding: 10px 20px;
  border: none;
  border-radius: 20px;
  outline: none;
  box-sizing: border-box;
  border: 2px solid rgba(0, 0, 0, 0.02);
  margin-bottom: 50px;
  margin-left: 46px;
  text-align: center;
  margin-bottom: 27px;
  font-family: 'Ubuntu', sans-serif;
  }
  
  form.form1 {
      padding-top: 40px;
  }
  
  .pass {
          width: 76%;
  color: rgb(38, 50, 56);
  font-weight: 700;
  font-size: 14px;
  letter-spacing: 1px;
  background: rgba(136, 126, 126, 0.04);
  padding: 10px 20px;
  border: none;
  border-radius: 20px;
  outline: none;
  box-sizing: border-box;
  border: 2px solid rgba(0, 0, 0, 0.02);
  margin-bottom: 50px;
  margin-left: 46px;
  text-align: center;
  margin-bottom: 27px;
  font-family: 'Ubuntu', sans-serif;
  }
  
 
  .un:focus, .pass:focus {
      border: 2px solid rgba(0, 0, 0, 0.18) !important;
      
  }
  
  .submit {
    cursor: pointer;
      border-radius: 5em;
      color: #fff; 
      /*background: linear-gradient(to right, #9C27B0, #E040FB);*/
      background: linear-gradient(to right, lightblue, rgb(124, 124, 240));
      border: 0;
      padding-left: 40px;
      padding-right: 40px;
      padding-bottom: 10px;
      padding-top: 10px;
      font-family: 'Ubuntu', sans-serif;
      margin-left: 35%;
      font-size: 13px;
      box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
      font-weight: bolder;
  }
  
  .forgot {
      text-shadow: 0px 0px 3px  color:blue;
      color:blue;
      padding-top: 15px;
  }
  
  a {
      text-shadow: 0px 0px 3px  lightblue;
      color: blue;
      text-decoration: none
  }
  
  @media (max-width: 400px) {
      .main {
          border-radius: 0px;
          border-radius: 1.5em;
      }
      
</style>

</head>



<body>
      
    <!-- Header Section
    
        <div class="head2">P & G Assemblies of God portal</div>
    -->
    <header>
      <center>
        <div class="head1">Task Management System</div> </center>
    </header>
    <div class="navbar">
        <a  href="{{route('Home.page')}}" class="btn btn-primary">Home</a>       
        <div class="dropdown">
          <button class="dropbtn">Task 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">View Task List</a>
            <a href="#">Add New Task</a>
          </div>
        </div> 
        <div class="menu-log">          
            <a  href="{{route('Login.form')}}" class="btn btn-primary">Log In</a>
            <a  href="{{route('SignIn.form')}}" class="btn btn-primary">Sign In</a>
        </div>
        @auth
       
        <span class="uppercase menu-log">
          Welcome  {{auth()->username()->name}}
        </span>
        @else
        <span class="uppercase menu-log">
          <!-- Welcome ddd -->
        </span>
        @endauth

      </div>
    <!-- Menu Navigation Bar -->
    <!-- <nav class="menu">     
        <a  href="{{route('Home.page')}}" class="btn btn-primary">HOME</a>
        <a href="#news">NEWS</a>
        <a href="#notification">NOTIFICATIONS</a>
        <div class="dropdown">
            <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
        <div class="menu-log">          
          <a  href="{{route('Login.form')}}" class="btn btn-primary">LOGIN</a>
          
        </div>
      </nav>
    
      
    Body section 
    <main class = "body_sec">
        <section id="Content">
            <h3>Content section</h3>
        </section>
      </main>-->

      <main class="container">
        @yield('content')
    </main>
      
    <!-- Footer Section 
    <footer>Footer Section</footer>-->
</body>
</html>