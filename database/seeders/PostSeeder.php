<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'test 1',
                'content' => 'content 1',
            ],
            [
                'title' => 'test 2',
                'content' => 'content 2',
            ]
        ];

        foreach ($posts as $post) {
            try {
                $tmp_post = Post::firstOrCreate([
                    'title' => $post['title'],
                    'content' => $post['content']
                ]);
            } catch (\Exception $exception) {
                if ($exception->getCode() == "23000") {
                    dump('Post "' . $post['title'] . '" already exist');
                } else {
                    dump($exception->getMessage());
                }
            }
        }
    }
}
