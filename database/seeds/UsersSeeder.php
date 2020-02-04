<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::truncate();

        for ($i = 1; $i <= 5; $i++) {
            factory(User::class)->create([
                'email' => sprintf('user%s@example.com', $i),
            ]);
        }
    }
}
