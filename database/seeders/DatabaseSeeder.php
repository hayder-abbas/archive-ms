<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
        ]);

        $this->call([
            BoxSeeder::class,
            EntitySeeder::class,
            DocSeeder::class,
            AttachmentSeeder::class,
            BorrowSeeder::class,
            AuditLogSeeder::class,
        ]);
    }
}
