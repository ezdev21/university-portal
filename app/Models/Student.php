<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Student extends Model implements Authenticatable
{
    use HasFactory,AuthenticableTrait;

    protected $guard='student';

    protected $fillable=['name','email','password'];

    public function profile()
    {
        return $this->morphOne(Profile::class,'profileable');
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
