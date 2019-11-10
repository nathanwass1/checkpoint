<?php

namespace App\Events;


use Illuminate\Queue\SerializesModels;

use Illuminate\Foundation\Events\Dispatchable;


class FilmCreated
{
    use Dispatchable, SerializesModels;
    
    public $Film;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($Film)
    {
        $this->Film = $Film;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
  
}
