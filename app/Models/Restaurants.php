<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Operator;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Restaurants extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $fillable = ['name', 'location', 'open_at', 'close_at'];

    public function menus()
    {
        return $this->hasMany(Menus::class);
    }
    public function operators()
    {
        return $this->hasMany(Operator::class);
    }
    public function owner()
    {
        return $this->hasOne(Owner::class);
    }

}
