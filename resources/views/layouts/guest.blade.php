<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="/images/favicon.png">
    <title>Login | DashLite Admin Template</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=3.2.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=3.2.1') }}">
</head>



<body class="nk-body ui-rounder npc-general ui-light pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                {{ $slot }}






                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/bundle.js?ver=3.2.1') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=3.2.1') }}"></script>

</html>
