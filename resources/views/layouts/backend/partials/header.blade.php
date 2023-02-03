<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is farhan's property.">
    <meta name="author" content="abu bokkor farhan">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('backend') }}img/logo/logo.png" rel="icon">
    <title>Farhan Admin </title>
    <link href="{{ asset('backend') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend') }}/vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.min.css" />
    <link href="{{ asset('backend') }}/css/ruang-admin.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/css/custom.css" rel="stylesheet">
    @yield('css')
</head>

<body id="page-top">
    <div id="wrapper">
