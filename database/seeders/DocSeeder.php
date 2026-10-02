<?php

namespace Database\Seeders;

use App\Models\Box;
use App\Models\Doc;
use App\Models\Entity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocSeeder extends Seeder
{
    public function run(): void
    {
        Doc::factory()
            ->for(Box::factory()->create())
            ->for(Entity::factory()->create())
            ->count(30)
            ->hasAttachments(1)
            ->create();
    }
}
