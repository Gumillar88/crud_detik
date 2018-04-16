<?php
/**
 * Created by PhpStorm.
 * User: gumilar
 * Date: 16/04/18
 * Time: 16:07
 */

namespace App\Http\Controllers;

use App\Http\Models\NewsModel;

use App;
use Hash;
use Validator;
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

        $news = $this->news->getAll();

        $data = [
            'title' => $title,
            'news'  => $news
        ];


        return view('news.indexNews', $data);
    }

    public function renderCreateNews()
    {
        $title = "Create News - Detik.com";

        $data = [
            'title'     => $title
        ];

        return view('news.createNews', $data);
    }

    public function handleCreateNews(Request $request)
    {
        // Set input
        $input = $request->all();

        // Validate input
        $validator = Validator::make($input, [
            'title'     => 'required|max:255',
            'content'   => 'required|max:255'
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        // Create news
        $this->news->create($input['title'], $input['content'], $input['author']);

        // Set session
        $request->session()->flash('news-created', '');

        return redirect(env('APP_HOME_URL'));
    }

    public function renderUpdateNews(Request $request)
    {
        $title = "Edit News - Detik.com";

        // Set news id
        $ID = $request->get('ID', false);

        if (!$ID)
        {
            return redirect(env('APP_HOME_URL'));
        }

        $decodeID = base64_decode($ID);

        // Get news data
        $news = $this->news->getOne($decodeID);

        $data = [
            'title'         => $title,
            'ID'            => $decodeID,
            'title_news'    => $news->title,
            'content'       => $news->content,
            'author'        => $news->author
        ];

        return view('news.editNews', $data);
    }

    public function handleUpdateNews(Request $request)
    {
        // Set input
        $input = $request->all();

        $decodeID = base64_decode($input['ID']);

        // Validate input
        $validator = Validator::make($input, [
            'title'     => 'required|max:255',
            'content'   => 'required|max:255',
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $data = [
            'title'     => $input['title'],
            'content'   => $input['content'],
            'author'    => $input['author']
        ];

        // update data
        $this->news->update($decodeID, $data);

        $request->session()->flash('news-updated', '');
        return back();
    }

    public function renderRemoveNews(Request $request)
    {
        $title = "Delete News - Detik.com";

        // Set news id
        $ID = $request->get('ID', false);

        if (!$ID)
        {
            return redirect(env('APP_HOME_URL'));
        }

        $decodeID = base64_decode($ID);

        // Get news data
        $news = $this->news->getOne($decodeID);

        $data = [
            'title'         => $title,
            'ID'            => $decodeID,
            'title_news'         => $news->title,
        ];

        return view('news.removeNews', $data);
    }

    public function handleRemoveNews(Request $request)
    {
        // Set input
        $input = $request->all();

        $decodeID = base64_decode($input['ID']);

        //remove data news
        $this->news->remove($decodeID);

        // Set flash session
        $request->session()->flash('news-deleted', '');

        return redirect(env('APP_HOME_URL'));
    }
}