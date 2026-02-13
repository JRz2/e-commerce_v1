<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'customer']);

        // Crear usuario admin
        $admin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@ecommerce.test',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('admin');
    }
}
