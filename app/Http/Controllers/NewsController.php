<?php
/**
 * Created by PhpStorm.
 * User: gumilar
 * Date: 16/04/18
 * Time: 16:07
 */

namespace App\Http\Controllers;

use App\Http\Models\NewsModel;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class NewsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Object constructor
     *
     * @access public
     * @return Void
     */
    public function __construct()
    {
        $this->news       = new NewsModel();
    }

    public function renderNews()
    {
        $title = "List News - Detik.com";

        $data = [
            'title' => $title,
        ];

        return view('news.indexNews', $data);
    }
}