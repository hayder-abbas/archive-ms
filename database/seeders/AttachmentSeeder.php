<?php

namespace Database\Seeders;

use App\Models\Attachment;
use App\Models\Doc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttachmentSeeder extends Seeder
{
    public function run(): void
    {
        Attachment::factory()->for(Doc::factory()->create())->create();
    }
}
