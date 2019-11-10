<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FilmsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
  public function create_a_film(){
      $this->actingAs(factory('App\Film')->create());
      
      $this->post('/Films/create',[
      'Title' => 'VHS'
      ]);
      
      
      $this->assertDatabaseHas('films', ['Title' => 'VHS']);
  }
}
