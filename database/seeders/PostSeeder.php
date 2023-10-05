<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use TruncateTable, DisableForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        $this->disableForeignKeys(); 
        $this->truncate('posts');
        $posts = \App\Models\Post::factory(10)
            // ->has(Comment::factory(10), 'comments')
            ->create();

        $posts->each(function (Post $post){
            $post->users()->sync([FactoryHelper::getRandomModelId(User::class)]);
        });
        
        $this->enableForeignKeys();
    }
}
