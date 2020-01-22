<html lang="ja">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<title>@yield("title")</title>
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<main class="wrapper">
  @yield('content')
</main>
</body>
</html>