<!doctype html>
<html lang="nl">
<head>
    <title>{{ request()->getHttpHost() }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Darvis | Arvid de jong">
    <!-- Bootstrap core CSS -->
    <link href="/libs/bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        html {
            font-size: 0.75em;
        }
        body {
            background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
        }
        .container {
            max-width: 960px;
        }
        .pricing-header {
            max-width: 700px;
        }
        .error {
            color: red;
        }

    </style>
    @livewireStyles
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>
    <div class="container py-3">
        @livewire('widgets.widgets-header')
        {{ $slot }}
    </div>
</body>
@livewireScripts

</html>
