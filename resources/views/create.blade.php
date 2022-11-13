@extends('layouts.app')

@section('content')
  <h1>登録</h1>
  <form method="post" action="{{ route('home.store') }}">
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
      <input type="date" name="expiration" required><br>
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
  <a href="{{ route('home.index') }}">戻る</a>
@endsection