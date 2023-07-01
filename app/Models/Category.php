<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Category extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
// Category::create([
// 'name'=> "Programing",
// 'slug'=> "programing",
// ])

// Post::create([
//     'title' => "Judul keempat",
//     'category_id' => "1",
//     'slug' => 'judul-keempat',
//     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae eaque hic nesciunt quae illo dolores repudiandae,",
//     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae eaque hic nesciunt quae illo dolores repudiandae, cumque commodi laudantium dignissimos eum, temporibus eos veritatis quaerat vero accusantium minus atque perferendis voluptatum? Cum animi dolore non quibusdam laboriosam culpa nihil, perspiciatis magni veritatis amet debitis quia! Voluptate laboriosam cum cumque, expedita numquam obcaecati ipsa magni dicta aspernatur. Nesciunt exercitationem doloribus praesentium ullam rerum ad explicabo corrupti reiciendis et vel tenetur id iste perferendis eius dignissimos, consequatur quae voluptas incidunt! Voluptate, blanditiis.",
// ])

