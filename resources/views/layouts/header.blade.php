<?php
/**
 * Created by PhpStorm.
 * User: gumilar
 * Date: 16/04/18
 * Time: 16:12
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ env('APP_URL') }}css/app.css" rel="stylesheet">
    <link href="{{ env('APP_URL') }}css/style.css" rel="stylesheet">
    <title>{{ $title }}</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
</head>
<body>
