<?php

namespace App\Policies;

use App\User;
use App\Film;
use Illuminate\Auth\Access\HandlesAuthorization;

class FilmPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the film.
     *
     * @param  \App\User  $user
     * @param  \App\Film  $film
     * @return mixed
     */
    public function view(User $user, Film $film)
    {
        
        return $film->owner_id == $user->id;
    }

    /**
     * Determine whether the user can create films.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the film.
     *
     * @param  \App\User  $user
     * @param  \App\Film  $film
     * @return mixed
     */
    public function update(User $user, Film $film)
    {
         return $film->owner_id == $user->id;
    }

    /**
     * Determine whether the user can delete the film.
     *
     * @param  \App\User  $user
     * @param  \App\Film  $film
     * @return mixed
     */
    public function delete(User $user, Film $film)
    {
         return $film->owner_id == $user->id;
    }
}
