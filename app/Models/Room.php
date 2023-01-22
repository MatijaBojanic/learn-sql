<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot() {
        parent::boot();

        static::creating(function ($model) {
            $model->number = Hotel::find($model->hotel_id)->rooms->count() + 1;
        });
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
