@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
     <div class="col-md-8">
        <div class="card" style="margin-bottom: 20px; border: white solid 2px;">
            <div class="card-header" style="background-color: rgb(255, 166, 0); display: flex; justify-content: space-between">
                <div class="title font-color-w">登録</div>
            </div>
               <div class="card-body  main-backcolor">
                  <form method="post" action="{{ route('home.store') }}">
                  @csrf
                  <label class="label">品名</label><br>
                  <input type="text" name="itemName" class="input" required><br>
                  <label class="label">期限表示</label><br>
                    <div style="display: flex;">
                      <div>
                        <input type="radio" id="" name="expirationType" value=1 checked>
                        <label>賞味</label>
                      </div>
                      <div style="margin-left: 10px;">
                        <input type="radio" id="" name="expirationType" value=9>
                        <label>消費</label>
                      </div>
                    </div>
                  <label class="label">期限：</label>
                  <input type="date" name="expiration" required><br>
                      <label class="label">冷蔵/冷凍</label>
                        <div style="display: flex;">
                          <div>
                            <input type="radio" id="" name="stockType" value=1 checked>
                            <label>冷蔵</label>
                          </div>
                          <div style="margin-left: 10px;">
                            <input type="radio" id="" name="stockType" value=9>
                            <label>冷凍</label>
                          </div>
                        </div>
                      <div align="right">
                        <input type="submit" value="追加" class="submit-button">
                      </div>
                  </form>           
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection