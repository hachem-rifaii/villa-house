<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $icon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Property> $properties
 * @property-read int|null $properties_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Featured newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Featured newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Featured query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Featured whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Featured whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Featured whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Featured whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Featured whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Featured whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Featured extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon',
    ];
    public function properties()
    {
        return $this->belongsToMany(Property::class, 'properties_featureds')->withTimestamps();
    }
    public static function booted()
    {
        static::deleted(function ($featured) {
            if ($featured->icon) {
                Storage::disk('public')->delete($featured->icon);
            };
        });
    }
}
