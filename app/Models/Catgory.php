<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catgory extends Model
{
    use HasFactory;
public function Vila()
{
    return $this->hasMany(Vila::class);

}
}

