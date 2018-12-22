<?php
/**
 * Created by PhpStorm.
 * User: chenjianeng
 * Date: 2018-12-22
 * Time: 11:45
 */
namespace App\Observers;

use App\Models\Link;
use Cache;

class LinkObserver
{
    public function saved(Link $link)
    {
        Cache::forget($link->cache_key);
    }
}