<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'filetable';
    protected $fillable = [
    	'isActive'
    ];

    public function scopeSearch($query, $s)
    {
      return $query->where('Station_Code', 'like', '%' .$s. '%')
      ->orWhere('Station_Name', 'like', '%' .$s. '%')
      ->orWhere('Location', 'like', '%' .$s. '%')
      ->orWhere('Month', 'like', '%' .$s. '%')
      ->orWhere('Day', 'like', '%' .$s. '%')
      ->orWhere('Year', 'like', '%' .$s. '%')
      ->orWhere('Weather', 'like', '%' .$s. '%')
      ->orWhere('PC', 'like', '%' .$s. '%')
      ->orWhere('Client', 'like', '%' .$s. '%')
      ->orWhere('Type', 'like', '%' .$s. '%')
      ->orWhere('Longitude', 'like', '%' .$s. '%')
      ->orWhere('Latitude', 'like', '%' .$s. '%');
    }
}
