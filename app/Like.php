<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    /**
     * migration data that can be input from the 'user'
     * @var array
     */
    protected $fillable = [
        'journal_entry_id',
        'user_id',
        'author'
        ];

    //no relations should be needed but more functions may



}
