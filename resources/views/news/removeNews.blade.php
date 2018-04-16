<?php
/**
 * Created by PhpStorm.
 * User: gumilar
 * Date: 16/04/18
 * Time: 16:29
 */
?>

@include('layouts.header', ['title' => $title])
<div style="width: 50%;padding: 10px;">
    <h2>Remove Form News <b style="color: red;">{{ $title_news }}</b></h2>
    <form action="{{ env('APP_HOME_URL') }}remove" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="ID" value="{{ base64_encode($ID) }}" />
        @if(count($errors) > 0)
            <div class="error">{{ $errors->all()[0] }}</div>
        @endif

        <p>
            <input type="submit" class="btn btn-success" value="Delete" />
            <a href="{{ env('APP_HOME_URL') }}" class="btn btn-default">Back</a>
        </p>
    </form>
</div>
@include('layouts.footer')
