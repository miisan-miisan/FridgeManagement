@extends('layouts.app')

@section('content')
<div id="commentBox"></div>

<div class="comment-container row justify-content-center">
    <div class="input-group comment-area">
        <textarea class="form-control" placeholder="input massage" aria-label="With textarea"></textarea>
        <button type="input-group-prepend button" class="btn btn-outline-primary comment-btn">Submit</button>
    </div>
</div>@endsection

@section('addButton')
<div class="button"><a href="{{ route('home.create') }}" class="add-button">＋</a></div>
@endsection


