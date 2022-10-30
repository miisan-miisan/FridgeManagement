<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>冷蔵庫管理アプリ</title>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    </head>
    <body>
        <h1>冷蔵庫</h1>
        @foreach ($items as $item)
        <div class="box">
            <div class="leftBox">
                <div><p class="expiration">{{ $item['msg'] }}</p></div>
            </div>
            <div class="centerBox">
                <p class="itemName">{{ $item->name }}</p>
            </div>
            <div class="rightBox">
                <div>
                    <form method="post" action="{{ route('managements.destroy', $item->id) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="ate">食べた！</button>
                    </form>
                </div>
                <div><button class="edit"><a href="{{ route('managements.edit', $item->id) }}">編集</a></button></div>
            </div>
        </div>
        @endforeach
          <div style="width: 100%; display: flex; justify-content: flex-end;">
            <div class="button">
              <a href="{{ route('managements.create') }}">＋</a>
            </div>
          </div>
        <h1>冷凍庫</h1>
        @foreach ($freezeItems as $item)
        <div class="box">
            <div class="leftBox">
                <div><p class="expiration">{{ $item['msg'] }}</p></div>
            </div>
            <div class="centerBox">
                <p class="itemName">{{ $item->name }}</p>
            </div>
            <div class="rightBox">
                <div>
                    <form method="post" action="{{ route('managements.destroy', $item->id) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="ate">食べた！</button>
                    </form>
                </div>
                <div><button class="edit"><a href="{{ route('managements.edit', $item->id) }}">編集</a></button></div>
            </div>
        </div>
        @endforeach
          <div style="width: 100%; display: flex; justify-content: flex-end;">
            <div class="button">
              <a href="{{ route('managements.create') }}">＋</a>
            </div>
          </div>
    </body>
</html>
