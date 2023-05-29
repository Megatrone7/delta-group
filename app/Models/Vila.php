<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vila extends Model
{

    use HasFactory;
    protected $fillable = [

        'name','aks','description','url'


    ];
    public function  catgories ()
    {

        return $this->belongsTo(Catgory::class);

    }

}
