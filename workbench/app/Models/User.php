<?php

namespace Workbench\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;
use Workbench\Database\Factories\UserFactory;

class User extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return new UserFactory;
    }
}
