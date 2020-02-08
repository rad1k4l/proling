<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">

    @yield("view_meta_tags")
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title")</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("/vendors/chartist-js/chartist-plugin-tooltip.css") }}">
    <!-- END: VENDOR CSS-->

    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" href="{{ asset("css/materialize.css") }}">
    <style>
        .debug {
            border-style: groove;
            border-color: red;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="/css/themes/style.css">
    <link rel="stylesheet" type="text/css" href="/css/pages/user-profile-page.css">
    <link rel="stylesheet" type="text/css" href="/css/pages/dashboard-modern.css">
    <!-- END: Page Level CSS-->
    @yield('application_css')
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/custom/custom.css") }}">
    <!-- END: Custom CSS-->
    @include("panel.template.header")

</head>

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">


@include('panel.template.sidenav')

    @yield("content")

@include("panel.template.footer")

</body>
</html>
