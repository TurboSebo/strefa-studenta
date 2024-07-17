<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['id' => 1, 'nazwa_roli' => 'Admin']);
        Role::create(['id' => 2, 'nazwa_roli' => 'Moderator']);
        Role::create(['id' => 3, 'nazwa_roli' => 'User']);
    }
}
