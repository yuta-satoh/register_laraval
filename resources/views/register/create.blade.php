@extends('layouts.app')

@section('content')

<div style="width: 500px; margin: 100px auto;">
    <h1 style="text-align:center ;">
        会員登録
    </h1>

    <div class="container" style="text-align:center ;">
    <form action="{{ route('register.store') }}" method="POST" >
    @csrf
        <div class="form-group" style="margin-bottom:20px ; " >
            <!-- 登録フォーム -->
                <div class="col-sm-6" style="margin-bottom:5px ;">
                    <input type="text" name="name" id="InputName" class="form-control" placeholder="名前" required>
                </div>
                <div class="col-sm-6" style="margin-bottom:5px ;">
                    <input type="tel" name="phone" id="InputPhone" class="form-control" placeholder="電話番号" required>
                </div>
                <div class="col-sm-6" style="margin-bottom:5px ;">
                    <input type="email" name="email" id="InputEmail" class="form-control" placeholder="メールアドレス" required>
                </div>
            </div>
            <!-- 登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        登録
                    </button>
                </div>
            </div>

    </form>
    </div>
</div>
@endsection