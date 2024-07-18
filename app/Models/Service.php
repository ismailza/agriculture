<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    public function scopeRecent(Builder $builder): Builder
    {
        return $builder->orderBy('created_at', 'desc');
    }

    public function requests(): HasMany
    {
        return $this->hasMany(ServiceRequest::class);
    }
}
