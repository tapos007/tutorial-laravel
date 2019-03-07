<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\User::class, 20)
            ->create()
            ->each(function ($user) {
                $user->posts()->saveMany(factory(App\Post::class, 50))->create(['user_id' => $user->id]);
            });
    }
}
