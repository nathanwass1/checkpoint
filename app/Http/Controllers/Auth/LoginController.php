<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\GitUser;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/Films';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
     public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }
    
     public function handleProviderCallback()
    {   
       $user = $this->findOrCreateGitHubUser(
       Socialite::driver('github')->user()
       );
       
       //auth()->login($user);
       
       return redirect('/');
    }
    
    protected function findOrCreateGitHubUser($githubuser){
      $user = GitUser::firstOrNew(['github_id' => $githubuser->id]) ; 
      
      if($user->exists) return $user;
          
      $user->fill([
      'nickname' => $githubuser->nickname,
      'email' => $githubuser->email,
      'avatar' => $githubuser->avatar
      ])->save();  
          
          return $user;
      }
        
    }
    

