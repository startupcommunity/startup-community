<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'license',
        'photo',
        'handicap',
        'time_playing',
        'type',
        'gender',
        'birthday',
        'address',
        'phone',
        'province',
        'cp',
        'country',
        'language',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
