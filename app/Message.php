<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $table = 'messages';
    public $fillable = ['user_id', 'body', 'recipient'];

    public function getUser(){
        return User::findOrFail($this->user_id);
    }

    public function timeAgo(){
        $time_ago = Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
        return $time_ago;
    }
}
