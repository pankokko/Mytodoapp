<html lang="ja">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


<title>@yield("title")</title>
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<main class="wrapper">
  @yield('content')
</main>
</body>
</html>