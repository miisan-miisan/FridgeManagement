@extends('layouts.app')

@section('content')
  <h1>編集</h1>
  <form method="post" action="{{ route('home.update', $data) }}">
      @csrf
      @method('patch')
      <input type="hidden" name="id" value="{{ $data->id }}" class="itemName">
      <label>品物：</label>
      <input type="text" name="itemName" value="{{ $data->name}}" required><br>
      <label>期限表示</label>
        <div>
          <input type="radio" id="" name="expirationType" value=1 {{ $data->expiration_type == 1 ? "checked" : "" }}>
          <label>賞味</label>
        </div>
        <div>
          <input type="radio" id="" name="expirationType" value=9 {{ $data->expiration_type == 9 ? "checked" : "" }}>
          <label>消費</label>
        </div>
        <label>期限：</label>
        <input type="date" name="expiration" value="{{ $data->expiration}}"><br>
        <label>期限表示</label>
        <div>
          <input type="radio" id="" name="stockType" value=1 {{ $data->stock_type == 1 ? "checked" : "" }}>
          <label>冷蔵</label>
        </div>
        <div>
          <input type="radio" id="" name="stockType" value=9 {{ $data->stock_type == 9 ? "checked" : "" }}>
          <label>冷凍</label><br>
          <input type="submit" value="更新">
        </form>           
          <a href="{{ route('home.index') }}">戻る</a>
@endsection