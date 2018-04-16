<?php
/**
 * Created by PhpStorm.
 * User: gumilar
 * Date: 16/04/18
 * Time: 16:28
 */
?>

@include('layouts.header', ['title' => $title])
<div style="width: 50%;padding: 10px;">
    <h2>Create Form News</h2>
    <form action="{{ env('APP_HOME_URL') }}create" method="POST">
        {!! csrf_field() !!}
        @if(count($errors) > 0)
            <div class="error">{{ $errors->all()[0] }}</div>
        @endif

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="email">Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="content" value="{{ old('content') }}">
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <select class="form-control" name="author">
                <option value="penulis 1" selected>penulis 1</option>
                <option value="penulis 2">penulis 2</option>
            </select>
        </div>

        <p>
            <input type="submit" class="btn btn-success" value="Save" />
            <a href="{{ env('APP_HOME_URL') }}" class="btn btn-default">Back</a>
        </p>
    </form>
</div>
@include('layouts.footer')
