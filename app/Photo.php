<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = '/images/';
    protected $img_placeholder = '/img/user/userplaceholder.png';
    protected $fillable =['file'];

    //use an accessor to show $uploads when image is rendered
    public function getFileAttribute($photo){

      return  $this->uploads.$photo;
    }
    // translation= this post has one photo
    public function photo(){
      return $this->belongsTo('App\Photo');
    }
    // translation= this post has one photo
    public function category(){
      return $this->belongsTo('App\Category');
    }

}
