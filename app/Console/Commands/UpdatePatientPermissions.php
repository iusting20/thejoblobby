<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UpdatePatientPermissions extends Command
{
    protected $signature = 'permissions:update-patient';
    protected $description = 'Update the Patient role permissions';

    public function handle()
    {
        $this->info('Updating Patient role permissions...');

        // Get the Patient role
        $role = Role::where('name', 'Patient')->first();

        if (!$role) {
            $this->error('Patient role not found!');
            return 1;
        }

        $guardName = $role->guard_name;
        $this->info("Patient role uses guard: {$guardName}");

        // Define the permissions the Patient role should have
        $permissions = [
            'view_any_booking',
            'view_booking',
            'create_booking',
        ];

        // Create permissions if they don't exist and assign them to the role
        foreach ($permissions as $permissionName) {
            $permission = Permission::firstOrCreate([
                'name' => $permissionName,
                'guard_name' => $guardName,
            ]);

            if (!$role->hasPermissionTo($permission)) {
                $role->givePermissionTo($permission);
                $this->info("Added {$permissionName} permission to Patient role");
            } else {
                $this->info("Patient role already has {$permissionName} permission");
            }
        }

        // Remove widget permissions from Patient role
        $widgetPermissions = Permission::where('name', 'like', 'widget_%')
            ->where('guard_name', $guardName)
            ->get();
            
        foreach ($widgetPermissions as $permission) {
            if ($role->hasPermissionTo($permission)) {
                $role->revokePermissionTo($permission);
                $this->info("Removed {$permission->name} permission from Patient role");
            }
        }

        // Remove user resource permissions from Patient role
        $userPermissions = Permission::where('name', 'like', '%_user')
            ->where('guard_name', $guardName)
            ->get();
            
        foreach ($userPermissions as $permission) {
            if ($role->hasPermissionTo($permission)) {
                $role->revokePermissionTo($permission);
                $this->info("Removed {$permission->name} permission from Patient role");
            }
        }

        $this->info('Patient role permissions updated successfully!');
        return 0;
    }
} 