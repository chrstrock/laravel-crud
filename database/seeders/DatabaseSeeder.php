<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Josh',
            'email' => 'Josh123@gmail.com',
            'password' => Hash::make('secret')
        ]);

        $user2 = User::create([
            'name' => 'Bubba',
            'email' => 'Bubba@bubbaBo.com',
            'password' => Hash::make('jkljkljkl')
        ]);

    
        
        Post::create([
            'user_id' => $user1->id,
            'content' => 'I love software engineering.  I build cool stuff!'
        ]);

        Post::create([
            'user_id' => $user2->id,
            'content' => 'Laravel is so cool!  You should definitely try it out!'
        ]);
    }
}
