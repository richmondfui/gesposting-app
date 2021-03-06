<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Model Relationship Methods
    public function district()
    {
        return $this->hasOne(District::class);
    }

    public function schools()
    {
        return $this->hasMany(School::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class, "permission_user");
    }

      // ACL Methods
    public function hasAnyRoles($roles)
    {
        if ($this->roles()->whereIn('name', $roles)->first()) {
            return true;
        }

        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }

        return false;
    }

    public function hasAnyPermissions($permissions)
    {
        if ($this->permissions()->whereIn('name', $permissions)->first()) {
            return true;
        }

        return false;
    }

    public function hasPermission($permission)
    {
        if ($this->permissions()->where('name', $permission)->first()) {
            return true;
        }

        return false;
    }
      // ACL Methods End
}
