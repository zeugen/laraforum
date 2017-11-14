<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = '/images/';
    protected $fillable =['file'];

    //use an accessor to show $uploads when image is rendered
    public function getFileAttribute($photo){

      return  $this->uploads.$photo;
    }

}
