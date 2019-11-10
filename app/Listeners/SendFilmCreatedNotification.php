<?php

namespace App\Listeners;

use App\Events\FilmCreated;
use App\Mail\FilmCreated as FilmCreatedMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendFilmCreatedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  FilmCreated  $event
     * @return void
     */
    public function handle(FilmCreated $event)
    {
        Mail::to($event->Film->owner->email)->send(new FilmCreatedMail($event->Film));
    }
}
