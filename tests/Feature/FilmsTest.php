<?php

namespace Tests\Feature;
use App\Film;
use Tests\TestCase;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FilmsTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
  public function test_create_a_film(){
      $this->actingAs(factory('App\Film')->create());
      
      $this->post('/Films/create',[
      'Title' => 'VHS'
      ]);
      
      
      $this->assertDatabaseHas('films', ['Title' => 'VHS']);
  }
}
