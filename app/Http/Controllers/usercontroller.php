<?php

namespace App\Http\Controllers;


use session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use PhpParser\Node\Stmt\Echo_;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get user list
          //Getting the list from the database
          $allUsers =  DB::table('users')->get();
      // $getDate=Carbon ::now;
          return view('users-list',compact( 'allUsers' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //show controls
        return view ('SignIn');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Get current date and time
        $mydate = now()->toDateTimeString();

         // validator::validat
         $formfield = $request->validate([
            'username'=>  ['required'],
                'fullname'=>  'required',                
                'phoneNo'=>  ['required', 'max:12'],
                'email'=>  ['required','email'],           
                'password'=> ['required', 'string', 'min:5','confirmed']
               
        ]);
          //Adding user input if all the condition
     //above are met.
     if($formfield)
     {
        //encrypting the password
        

        DB::table('users')->insert(       
            [
                'username'=>  $request->username,
                'fullname'=>  $request->fullname,                
                'phoneNo'=>  $request->phoneNo,
                'email'=>  $request->email,           
                'password'=> $request->password,
                //'password'=> hash::make($request->password),
                'created_at'=> $mydate
            ]           
        );        
     }
          //  return redirect('/');
            return back()->with('save_user','Record added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //View Details of a user
        //Nothing is done for now
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Editing user entry
       // DB::table('users')->where('id',$id)->first();
        //Get users information
        $allUsers =DB::table('users')->where('id',$id)->first();

        return view ('edit-user',compact(@'allUsers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //Get current date and time
         $mydate = now()->toDateTimeString();

        DB::table('users')->where('id',$request->id)->update(
            [
                'username'=>  $request->username,
                'fullname'=>  $request->fullname,                
                'phoneNo'=>  $request->phoneNo,
                'email'=>  $request->email,
                'updated_at'=> $mydate
            ]);

            return back()->with('update_user','Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Deleting user records
        DB::table('users')->where('id',$id)->delete(); 

        return back()->with('delete_user','Record deleted successfully');
    }




    public function LogIn_user()
    {
        return view('Login');
    }
    //Logging into the system
    public function LoginUser(Request $request)
    {
        $formfield = $request->validate([
            'username'=>  ['required'],                
                //'email'=>  ['required','email'],           
                'password'=> 'required'               
        ]);
        

        if ( $formfield )
        {
            $existing = User::where('username',  $request->username)->get();

            if( $existing[0]->password == $request->password)
            {
                $request->session()->regenerateToken();
                return redirect('/')->with('welcome', "You are now login!");
            }
         
            return redirect('/')->with('/login', "You are now login!");
        
            
         //  $incoming= hash::make($request->password);
          //  $existing = User::where('username',  $request->username)->get();

         //   echo   $incoming; 
          //  echo "  ";
           // echo $existing[0]->password;
          // $user = Auth::user();

          // dd ($user);
          
           

         //  $st= boolean password_verify(  $incoming ,  $existing[0]->password);
        }

        //Validate user
       // if(auth()->attempt($formfield))
        //{
            //$request->session()->regenerate();
          //  if (Auth::attempt(['username' => $request->username, 'password' =>  $request->password]))

           
       // }
            //validation is false the perform the action below
            //return back()->withErrors(['username'=>'Invalid username or password!'])->onlyInput('username');

    }

        //Logging out from the system
    public function Userlogout(Request $request)
    {
        auth()->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->with('message', 'You have been logout!');
    }
}
