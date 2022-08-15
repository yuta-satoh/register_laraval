@extends('layouts.app')

@section('content')

<div style="width: 500px; margin: 100px auto;">
    <h1 style="text-align:center ;">
        会員編集 会員ID:{{$users->id}}
    </h1>

    <div class="container" style="text-align:center ;">
        <div class="form-group"  style="margin-bottom:20px ; " >
        <form action="{{ route('register.edit') }}" method="POST" >
            @csrf
            <input type="hidden" name="id" value="{{$users->id}}">
            <!-- 編集フォーム -->
                <div class="col-sm-6" style="margin-bottom:5px ;">
                    <input type="text" name="name" id="InputName" class="form-control" value="{{$users->name}}" required>
                </div>
                <div class="col-sm-6" style="margin-bottom:5px ;">
                    <input type="tel" name="phone" id="InputPhone" class="form-control" value="{{$users->phone}}" required>
                </div>
                <div class="col-sm-6" style="margin-bottom:5px ;">
                    <input type="email" name="email" id="InputEmail" class="form-control" value="{{$users->email}}" required>
                </div>
            </div>
            <!-- 編集ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        編集
                    </button>
                </div>
            </div>
        </form>
        <form action="{{ route('delete',['id'=>$users->id]) }}"  method="POST" >
            @csrf
            <!-- 削除ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        削除
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection