<?php

namespace App\Policies;

use App\Models\Board;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BoardPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Board  $board
     * @return mixed
     */
    public function view(User $user, Board $board)
    {
        // only associate users can see the board
        return $board->users->find($user->id)!=null;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        // create board and associate board owner
        return author::user()==$user;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Board  $board
     * @return mixed
     */
    public function update(User $user, Board $board)
    {
        // only board owner can update the board
        return $user->id===$board->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Board  $board
     * @return mixed
     */
    public function delete(User $user, Board $board)
    {
        // only board owner can delete the board
        return $user->id===$board->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Board  $board
     * @return mixed
     */
    public function restore(User $user, Board $board)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Board  $board
     * @return mixed
     */
    public function forceDelete(User $user, Board $board)
    {
        //
    }
}
