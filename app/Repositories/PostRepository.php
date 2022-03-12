<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostRepository extends BaseRepository
{
    // public function getModel()
    // {
    //     return Post::class;
    // }

    public function getTable()
    {
        return 'posts';
    }

    public function store($data)
    {
         DB::table('posts')->insert($data);
    }
    public function update($data,$id){
        DB::table('posts')->where('id',$id)->update($data);
    }

}
