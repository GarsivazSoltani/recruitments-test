<?php

namespace App\Services\Permission\Traits;

use App\Models\Role;
use Illuminate\Support\Arr;

trait HasRoles
{
    public function roles() // ارتباط مدل با گروزه دسترسی
    {
        return $this->belongsToMany(Role::class); // رابطه چند به چند
    }

    public function giveRolesTo(...$roles) // افزودن گروه دسترسی به کاربر
    {
        $roles = $this->getAllRoles($roles);
        if ($roles->isEmpty()) return $this;
        $this->roles()->syncWithoutDetaching($roles);
        return $this;
    }

    public function withDrawRoles(...$roles) // حذف گروه دسترسی از کاربر
    {
        $roles = $this->getAllRoles($roles);
        $this->roles()->detach($roles);
        return $this;
    }

    public function refreshRoles(...$roles) // تغییر گروه دسترسی به کاربر
    {
        $roles = $this->getAllRoles($roles);
        $this->roles()->sync($roles);
        return $this;
    }

    public function hasRole(string $role) // چک کردن گروه دسترسی کاربر
    {
        return $this->roles->contains('name', $role);
    }



    protected function getAllRoles(array $roles)
    {
        return Role::whereIn('name', Arr::flatten($roles))->get();
    }
}
