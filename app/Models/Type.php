<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    // instaurlo relazione tanti a uno (tanti progetti hanno un tipo)
    public function projects():HasMany{
        return $this->hasMany(Project::class);
    }
}
