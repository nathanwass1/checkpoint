<?php

namespace Tests\Feature;

use App\Comments;
use App\User;
use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Liketest extends TestCase
{
    //use RefreshDatabase;
   public function test_a_post_can_be_liked(){
       
       $this->actingAs(factory(User::class)->create());
       $post = factory(Post::class)->create();
       
       $post->like();
       
       $this->assertCount(1, $post->likes);
       $this->assertTrue($post->likes->contains('id', auth()->id()));
       }
       
    public function a_comment_can_be_liked(){
    $this->actingAs(factory(User::class)->create());
    $comment = factory(Comments::class)->create();
      
    $comment->like();
      
    $this->assertCount(1, $comment->likes);
           
       }
}
