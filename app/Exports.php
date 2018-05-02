<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;

class Exports extends Model implements FromCollection
{
    protected $table = 'filetable';
    protected $fillable = [
    	'isActive'
    ];

    // use Exportable;
  public function collection()
  {

      return Exports::all();
  }
}
