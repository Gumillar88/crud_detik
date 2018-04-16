<?php
/**
 * Created by PhpStorm.
 * User: gumilar
 * Date: 16/04/18
 * Time: 15:54
 */

namespace App\Http\Models;

use DB;

class NewsModel
{
    /**
     * Create new news
     *
     * @access public
     * @param String $title
     * @param String $content
     * @param String $author
     * @param String $created
     * @param String $updated
     * @return Integer
     */
    public function create($title, $content, $author)
    {
        $time = time();

        return DB::table('news')->insertGetId([
            'title'         => $title,
            'content'       => $content,
            'author'        => $author,
            'created'       => $time,
            'updated'       => $time
        ]);
    }

    /**
     * Get one news data
     *
     * @access public
     * @param Integer $ID
     * @return Object
     */
    public function getOne($ID)
    {
        return DB::table('news')->where('ID', $ID)->first();
    }

    /**
     * Get all news data
     *
     * @access public
     * @return Array
     */
    public function getAll()
    {
        return DB::table('news')->get();
    }

    /**
     * Update news data
     *
     * @access public
     * @param Integer $ID
     * @param Array $data - formatted news data
     * @return Void
     */
    public function update($ID, $data)
    {
        $data['updated'] = time();

        DB::table('news')
            ->where('ID', $ID)
            ->update($data);
    }

    /**
     * Remove news
     *
     * @access public
     * @param Integer $ID
     * @return Void
     */
    public function remove($ID)
    {
        DB::table('news')
            ->where('ID', $ID)
            ->delete();
    }
}