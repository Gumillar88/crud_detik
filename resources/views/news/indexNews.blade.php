<?php
/**
 * Created by PhpStorm.
 * news: gumilar
 * Date: 16/04/18
 * Time: 16:10
 */
?>
@include('layouts.header', ['title' => $title])

<div style="padding: 10px;">
    <h2>List News</h2>
    <div style="padding: 5px; margin-top: 10px; margin-bottom: 10px;">
        <a href="{{ env('APP_HOME_URL') }}create" class="btn btn-success">Create</a>
    </div>
    @if(Session::has('news-created'))
        <div class="success" style="margin-top: 10px; margin-bottom: 10px;">News has been created</div>
    @endif

    @if(Session::has('news-deleted'))
        <div class="error" style="margin-top: 10px; margin-bottom: 10px;">News has been removed</div>
    @endif
    <table id="newsTable" border="1">
        <thead>
        <tr>
            <th data-width="20%">title</th>
            <th data-width="20%">Content</th>
            <th data-width="10%">Author</th>
            <th data-width="20%">Created</th>
            <th data-width="25%">Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $news_data)
            <tr>
                <td>{{ $news_data->title }}</td>
                <td>{{ $news_data->content }}</td>
                <td>{{ $news_data->author }}</td>
                <td>{{ date('j F Y', $news_data->created) }}</td>
                <td>
                    <a href="{{ env('APP_HOME_URL') }}edit?ID={{base64_encode($news_data->ID) }}" class="btn btn-green">Edit</a>
                    <a href="{{ env('APP_HOME_URL') }}remove?ID={{ base64_encode($news_data->ID) }}" class="btn btn-red">Remove</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@include('layouts.footer')