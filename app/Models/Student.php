<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Parents;
use App\Models\ClassModel;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'class_name',
        'parent_name',
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

    public function parents() 
    {
        return $this->belongsTo(Parents::class, 'parent_name');
    }

    public function class() 
    {
        return $this->belongsTo(ClassModel::class, 'class_name');
    }

    public function attendances() 
    {
        return $this->hasMany(Attendance::class);
    }
}
