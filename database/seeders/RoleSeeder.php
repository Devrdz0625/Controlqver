<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin',]);
        $role2 = Role::create(['name' => 'Empleado',]);

        Permission::create(['name' => 'dashboard',
                            'description' => 'Ver el Dashboard'])->syncRoles($role1, $role2);

        Permission::create(['name' => 'manual',
                            'description' => 'Ver el Manual de Usuario'])->syncRoles($role1, $role2);

        Permission::create(['name' => 'users.index',
                            'description' => 'Ver listado de usuarios'])->syncRoles($role1);
        // Permission::create(['name' => 'users.create',
        //                     'description' => ' '])->syncRoles($role1);
        Permission::create(['name' => 'users.edit',
                            'description' => 'Asignar un rol a usuario'])->syncRoles($role1);
        Permission::create(['name' => 'users.destroy',
                            'description' => 'Eliminar usuarios'])->syncRoles($role1);

        Permission::create(['name' => 'customers.index',
                            'description' => 'Ver listado de clientes'])->syncRoles($role1, $role2);
        Permission::create(['name' => 'customers.create',
                            'description' => 'Crear cliente'])->syncRoles($role1);
        Permission::create(['name' => 'customers.edit',
                            'description' => 'Editar cliente'])->syncRoles($role1);
        Permission::create(['name' => 'customers.destroy',
                            'description' => 'Eliminar cliente'])->syncRoles($role1);

        Permission::create(['name' => 'categorys.index',
                            'description' => 'Ver listado de categorías'])->syncRoles($role1, $role2);
        Permission::create(['name' => 'categorys.create',
                            'description' => 'Crear categorías'])->syncRoles($role1, $role2);
        Permission::create(['name' => 'categorys.edit',
                            'description' => 'Editar categorías'])->syncRoles($role1, $role2);
        Permission::create(['name' => 'categorys.destroy',
                            'description' => 'Eliminar categorías'])->syncRoles($role1, $role2);

        Permission::create(['name' => 'products.index',
                            'description' => 'Ver lista de servicios'])->syncRoles($role1, $role2);
        Permission::create(['name' => 'products.create',
                            'description' => 'Crear servicios'])->syncRoles($role1, $role2);
        Permission::create(['name' => 'products.edit',
                            'description' => 'Editar servicios'])->syncRoles($role1, $role2);
        Permission::create(['name' => 'products.destroy',
                            'description' => 'Eliminar servicios'])->syncRoles($role1, $role2);

        Permission::create(['name' => 'vendors.index',
                            'description' => 'Ver listado de área encargada'])->syncRoles($role1, $role2);
        Permission::create(['name' => 'vendors.create',
                            'description' => 'Crear área encargada'])->syncRoles($role1, $role2);
        Permission::create(['name' => 'vendors.edit',
                            'description' => 'Editar área encargada'])->syncRoles($role1, $role2);
        Permission::create(['name' => 'vendors.destroy',
                            'description' => 'Eliminar área encargada'])->syncRoles($role1, $role2);

        Permission::create(['name' => 'servicios.index',
                            'description' => 'Ver lista de servicios solicitados'])->syncRoles($role1, $role2);
        Permission::create(['name' => 'servicios.create',
                            'description' => 'Crear servicios solicitados'])->syncRoles($role1);
        Permission::create(['name' => 'servicios.edit',
                            'description' => 'Editar servicios solicitados'])->syncRoles($role1);
        Permission::create(['name' => 'servicios.destroy',
                            'description' => 'Eliminar servicios solicitados'])->syncRoles($role1);

        Permission::create(['name' => 'roles.index',
                            'description' => 'Ver lista de roles'])->syncRoles($role1, $role2);
        Permission::create(['name' => 'roles.create',
                            'description' => 'Crear rol'])->syncRoles($role1);
        Permission::create(['name' => 'roles.edit',
                            'description' => 'Editar rol'])->syncRoles($role1);
        Permission::create(['name' => 'roles.destroy',
                            'description' => 'Eliminar rol'])->syncRoles($role1);
    }
}
