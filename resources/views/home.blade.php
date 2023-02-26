@extends('layouts.app')

@section('content')

<div id="homeContainer" class="container" data-items={{ $items }} data-freeze-items={{ $freezeItems }}>

    {{-- @if(count($freezeItems) > 0)
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-bottom: 20px; border: white solid 2px;">
                <div class="card-header" style="background-color: rgb(255, 166, 0); display: flex; justify-content: space-between">
                    <div class="title font-color-w">冷凍庫</div>
                </div>
                    <div class="card-body  main-backcolor">
                    @foreach ($freezeItems as $item)
                    <div class="box">
                        <div class="leftBox">
                            <div><p class="expiration font-color-w">{{ $item['msg'] }}</p></div>
                        </div>
                        <div class="centerBox">
                            <p class="itemName font-color-w">{{ $item->name }}</p>
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
    @endif --}}
</div>

@endsection

@section('addButton')
<div class="button"><a href="{{ route('home.create') }}" class="add-button">＋</a></div>
@endsection


