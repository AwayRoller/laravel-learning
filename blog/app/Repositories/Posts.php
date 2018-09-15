<?php
/**
 * Contains the Posts class.
 *
 * @copyright   Copyright (c) 2018 Zsolt Vizi
 * @author      Zsolt Vizi
 * @license     Proprietary
 * @since       2018-09-15
 *
 */

namespace App\Repositories;

use App\Post;

class Posts
{
    public function all()
    {
        return Post::all();
    }

}