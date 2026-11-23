<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Laravel Admin' }}</title>
    <style>body{margin:0;font-family:Arial,sans-serif;background:#f4f7fb;color:#1f2937}.app{min-height:100vh}.header{padding:24px 32px;background:#1d4ed8;color:#fff}.header h1{margin:0;font-size:26px}.layout{display:flex;min-height:calc(100vh - 77px)}.sidebar{width:220px;padding:24px;background:#0f172a}.sidebar a{display:block;padding:10px 12px;margin-bottom:6px;border-radius:6px;color:#cbd5e1;text-decoration:none}.sidebar a:hover,.sidebar a.active{background:#1e40af;color:#fff}.content{flex:1;padding:32px}.card{padding:24px;background:#fff;border-radius:10px;box-shadow:0 4px 14px rgba(15,23,42,.08)}</style>
</head>
<body>
<div class="app">
    @include('header')
    <div class="layout">
        @include('sidebar')
        <main class="content">@yield('content')</main>
    </div>
</div>
</body>
</html>
