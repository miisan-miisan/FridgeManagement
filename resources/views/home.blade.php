@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: rgb(255, 166, 0); display: flex; justify-content: space-between">
                    <div class="title">冷蔵庫</div>
                    <div class="button"><a href="{{ route('home.create') }}">＋</a></div>
                </div>
                    <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: rgb(255, 166, 0); display: flex; justify-content: space-between">
                    <div class="title">冷凍庫</div>
                    <div class="button"><a href="{{ route('home.create') }}">＋</a></div>
                </div>
                    <div class="card-body">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
