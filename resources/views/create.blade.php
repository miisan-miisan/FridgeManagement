<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>冷蔵庫管理アプリ</title>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    </head>
    <body>
      <h1>登録</h1>
      <form method="post" action="{{ route('managements.store') }}">
        @csrf
          <label>品物：</label>
          <input type="text" name="itemName" required><br>
          <label>期限表示</label>
          <div>
            <input type="radio" id="" name="expirationType" value=1 checked>
            <label>賞味</label>
          </div>
          <div>
            <input type="radio" id="" name="expirationType" value=9>
            <label>消費</label>
          </div>
          <label>期限：</label>
          <input type="date" name="expiration"><br>
          <label>冷蔵/冷凍</label>
          <div>
            <input type="radio" id="" name="stockType" value=1 checked>
            <label>冷蔵</label>
          </div>
          <div>
            <input type="radio" id="" name="stockType" value=9>
            <label>冷凍</label>
          </div>
          <input type="submit" value="追加">
      </form>           
      <a href="{{ route('managements.index') }}">戻る</a>
    </body>
</html>
