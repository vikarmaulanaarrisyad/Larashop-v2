<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany(User::class,'role_user', 'user_id', 'role_id')->withTimestamps();
    }
}
