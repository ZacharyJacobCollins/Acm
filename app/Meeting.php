<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'title',
        'subject',
        'start',
        'end',
        'description',
        'avatar',
        'speaker',
    ];

    /** 
    *   @param {id} meeting id to be updated
    */
    public function update() {

    }

    /**
    *   @param {id} meeting id to be deleted
    */
    public function delete($id) {

    }

    /**
    *   Creates a meeting given a request
    *   @param {request} http request
    */
    public function create($request) {

    }
}
