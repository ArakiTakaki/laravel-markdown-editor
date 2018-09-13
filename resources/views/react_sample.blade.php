<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>React Sample</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app"></div>
<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>