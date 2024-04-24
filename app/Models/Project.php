<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'description', 'skill', 'git_url','type_id'];

    // aggiungiamo la possibilità di leggere le tabelle a lui collegate
    public function type():BelongsTo{
        return $this->belongsTo(Type::class);
    }
}
