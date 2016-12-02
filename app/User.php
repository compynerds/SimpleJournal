<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * relates the user to the journal entries they've done
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getJournalEntries(){
        return $this->hasMany(JournalEntry::class);
    }


    /**
     * relate the user to the likes they've had
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getLikes(){
        return $this->hasMany(Like::class);
    }


}
