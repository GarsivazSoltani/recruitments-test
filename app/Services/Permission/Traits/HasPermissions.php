<?php
namespace App\Services\Permission\Traits;

use App\Models\Permission;
use Illuminate\Support\Arr;


trait HasPermissions
{
    public function permissions() // ارتباط مدل با سطح دسترسی
    {
        return $this->belongsToMany(Permission::class); // رابطه چند به چند
    }

    public function givePermissionsTo(...$permissions) // افزودن سطح دسترسی به کاربر
    {
        $permissions = $this->getAllPermissions($permissions);
        if ($permissions->isEmpty()) return $this;
        $this->permissions()->syncWithoutDetaching($permissions);
        return $this;
    }
    
    public function withDrawPermissions(...$permissions) // حذف سطح دسترسی از کاربر
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }

    public function refreshPermissions(...$permissions) // تغییر سطح دسترسی کاربر
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->sync($permissions);
        return $this;
    }

    public function hasPermission(Permission $permission) // چک کردن سطح دسترسی کاربر
    {
        return $this->hasPermissionThroughRole($permission) || $this->permissions->contains($permission);
    }

    protected function hasPermissionThroughRole(Permission $permission) // چک کردن سطح دسترسی از طریق رول
    {
        // dd($permission->roles);
        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) return true;
        }
        return false;
    }
    
    protected function getAllPermissions(array $permissions) // تبدیل سطح دسترسی‌ها به آرایه یک سطری
    {
        return Permission::whereIn('name', Arr::flatten($permissions))->get();
    }
}
