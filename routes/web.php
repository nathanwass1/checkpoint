<?php
use Symfony\Component\Finder\Finder;
use App\Events\SubscribeStatusUpdated;
use App\Events\PopcornCreated;
use App\popcorn;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@welcome');

//Route::get('/subscribe', 'PageController@subscribe');

Route::get('/contacts', 'PageController@contacts');

Route::get('/vue', 'PageController@vue');

Route::get('/about', 'PageController@about');



Route::resource('Films', 'FilmController');

Route::post('/Films/create', 'FilmController@store');

Route::post('Films/{Film}/Orders', 'OrderController@store');

Route::patch('/Orders/{Order}', 'OrderController@update');

Route::resource('reviews', 'ReviewsController');

Route::resource('posts', 'PostController');

//Auth::loginUsingId(1);
Auth::routes();
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/snacks', 'PageController@snacks');

Route::get('/test', 'PageController@test');

//Route::get('login', 'Auth.LoginController');

Route::get('/events', 'PageController@events');

Route::get('/popcorn', function (){
   return popcorn::latest()->pluck('body'); 
});

Route::post('/popcorn', function(){
   $popcorn = popcorn::forceCreate(request(['body'])); 
   
   event(new PopcornCreated($popcorn))->dontBroadcastToCurrentUser;
});

/*Route::get('/', function(){
    
    $files = Finder::create()
    ->in(app_path())
    ->name('*.php')
    ->contains('User');
    
    foreach ($files as $file){
        
        var_dump($file->getRealPath());
    }
    
});     */

class Subscribe{
      public $id;
    
    public function __construct($id){
        $this->id =$id;
    }
}

Route::get('/subscribe', function(){
      SubscribeStatusUpdated::dispatch(new Subscribe(1));
});

