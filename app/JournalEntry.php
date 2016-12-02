<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalEntry extends Model
{
    protected $table = 'journal_entries';

    protected $fillable = [
        'user_id',
        'entry_date',
        'title',
        'body',
        'author'
    ];
    //


    /**
     * This will relate the likes to the journal entry (how many likes you have)
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getLikes(){
        return $this->hasMany(Like::class);
    }

    //no more relation should be needed but other functions may be


}
