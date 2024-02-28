<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Parents extends Model
{
    use HasFactory;
    protected $table = 'parents';

    protected $fillable = [
        'user_id',
        'name',
        'gender',
        'phone',
        'address',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function children()
    // {
    //     return $this->hasMany(Student::class, 'parent_id');
    // }
}

