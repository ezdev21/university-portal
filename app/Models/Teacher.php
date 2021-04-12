<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Teacher extends Model implements Authenticatable
{
    use HasFactory,AuthenticableTrait;

    protected $guard='teacher';

    protected $fillable=['name','email','password'];

    public function profile()
    {
        return $this->morphOne(Profile::class,'profileable');
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
