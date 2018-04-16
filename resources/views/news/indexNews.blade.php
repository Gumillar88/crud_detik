<?php
/**
 * Created by PhpStorm.
 * news: gumilar
 * Date: 16/04/18
 * Time: 16:10
 */
?>
@include('layouts.header', ['title' => $title])
<div class="list-news">
    <div>
        <a href="{{ env('APP_HOME_URL') }}news/create" class="btn btn-green">Create</a>
    </div>

    <table id="newsTable" class="display initTable">
        <thead>
        <tr>
            <th data-width="5%">News ID</th>
            <th data-width="20%">title</th>
            <th data-width="20%">Content</th>
            <th data-width="10%">Author</th>
            <th data-width="20%">Created</th>
            <th data-width="25%">Options</th>
        </tr>
        </thead>
        <tbody>
        
            <tr>
                <td>1</td>
                <td>title news</td>
                <td>Content News</td>
                <td>Author News</td>
                <td>Created</td>
                <td>
                    <a href="{{ env('APP_HOME_URL') }}news/edit?ID=1" class="btn btn-green">Edit</a>
                    <a href="{{ env('APP_HOME_URL') }}news/remove?ID=1" class="btn btn-red">Remove</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@include('layouts.footer')