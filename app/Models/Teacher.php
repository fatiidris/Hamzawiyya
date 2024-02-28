<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ClassModel;
use App\Models\Student;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'gender',
        'phone',
        'dateofbirth',
        'address',
        'start_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function class()
    {
        return $this->hasMany(ClassModel::class, 'teacher_id');
    }

    public function students() 
    {
        return $this->hasManyThrough(Student::class, ClassModel::class, 'teacher_id', 'class_name');
    }
}