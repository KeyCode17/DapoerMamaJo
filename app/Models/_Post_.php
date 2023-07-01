<?php

namespace App\Models;

class Post
{
    private static $home_posts = [
        [
            'title' => 'Welcome post pertama',
            'slug' => 'welcome-post-pertama',
            'author' => 'Daffa',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae eaque hic nesciunt quae illo dolores repudiandae, cumque commodi laudantium dignissimos eum, temporibus eos veritatis quaerat vero accusantium minus atque perferendis voluptatum? Cum animi dolore non quibusdam laboriosam culpa nihil, perspiciatis magni veritatis amet debitis quia! Voluptate laboriosam cum cumque, expedita numquam obcaecati ipsa magni dicta aspernatur. Nesciunt exercitationem doloribus praesentium ullam rerum ad explicabo corrupti reiciendis et vel tenetur id iste perferendis eius dignissimos, consequatur quae voluptas incidunt! Voluptate, blanditiis.',
        ],
        [
            'title' => 'Welcome post kedua',
            'slug' => 'welcome-post-kedua',
            'author' => 'Dapol',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae eaque hic nesciunt quae illo dolores repudiandae, cumque commodi laudantium dignissimos eum, temporibus eos veritatis quaerat vero accusantium minus atque perferendis voluptatum? Cum animi dolore non quibusdam laboriosam culpa nihil, perspiciatis magni veritatis amet debitis quia! Voluptate laboriosam cum cumque, expedita numquam obcaecati ipsa magni dicta aspernatur. Nesciunt exercitationem doloribus praesentium ullam rerum ad explicabo corrupti reiciendis et vel tenetur id iste perferendis eius dignissimos, consequatur quae voluptas incidunt! Voluptate, blanditiis.',
        ],
    ];

    public static function all()
    {
        return collect(self::$home_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        // return $post;
    }
}
