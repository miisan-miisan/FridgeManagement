@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
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
                <form method="post" action="{{ route('home.destroy', $item->id) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="ate">食べた！</button>
                </form>
            </div>
            <div><button class="edit"><a href="{{ route('home.edit', $item->id) }}">編集</a></button></div>
        </div>
    </div>
    @endforeach
      <div style="width: 100%; display: flex; justify-content: flex-end;">
        <div class="button">
          <a href="{{ route('home.create') }}">＋</a>
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
                <form method="post" action="{{ route('home.destroy', $item->id) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="ate">食べた！</button>
                </form>
            </div>
            <div><button class="edit"><a href="{{ route('home.edit', $item->id) }}">編集</a></button></div>
        </div>
    </div>
    @endforeach
      <div style="width: 100%; display: flex; justify-content: flex-end;">
        <div class="button">
          <a href="{{ route('home.create') }}">＋</a>
        </div>
      </div>

@endsection
