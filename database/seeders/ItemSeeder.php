<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\ItemType;
use App\Models\User;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::query()->first();

        //если пользователей нет, создадим
        if (!$user) {
            $user = User::factory()->create([
                'email' => 'demo@example.com',
            ]);
        }

        $bookType = ItemType::query()->where('key', 'book')->firstOrFail();
        $filmType = ItemType::query()->where('key', 'film')->firstOrFail();

        Item::query()->create([
            'title' => 'Demo Book',
            'item_type_id' => $bookType->id,
            'created_by' => $user->id,
            'is_approved' => true,
        ]);

        Item::query()->create([
            'title' => 'Demo Film',
            'item_type_id' => $filmType->id,
            'created_by' => $user->id,
            'is_approved' => true,
        ]);
    }
}
