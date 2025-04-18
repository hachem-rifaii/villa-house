<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'experience',
        'specialization',
        'languages',
        'description',
    ];

    protected $casts = [
        'languages' => 'array', 
    ];
    public function properties(){
        return $this->hasMany(Property::class);
    }
    public static function booted(){
        static::deleting(function($team){
            if($team->image){
                Storage::disk('public')->delete($team->image);
            }
        });
    }
}
