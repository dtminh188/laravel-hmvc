<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $numberUser = 20;
        factory(User::class, $numberUser)->create()->each(function ($user) {
            $user->posts()->saveMany(factory(Post::class, rand(1, 3))->make());
        });
        $postIds = Post::pluck('id');
        foreach($postIds as $postId) {
            factory(Comment::class, 1)->create([
                'user_id' => rand(1, $numberUser),
                'post_id' => $postId
            ]);
        }
    }
}
