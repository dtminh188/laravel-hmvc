<?php

namespace App\ApiModules\Users\Models;

use App\Models\User as Model;

class User extends Model
{
    /**
     * Scope a query to only include user verified email.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVerifiedEmail($query)
    {
        return $query->whereNotNull('email_verified_at');
    }
}
