<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsToMany(Project::class,'category_projects');
    }
    public function  user(){
        return $this->belongsTo(User::class);
    }


}
