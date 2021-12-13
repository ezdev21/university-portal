<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function teachers()
    {
        $this->BelongsToMany(Teacher::class);
    }
    public function departments()
    {
       return $this->belongsToMany(Course::class); 
    }
}
