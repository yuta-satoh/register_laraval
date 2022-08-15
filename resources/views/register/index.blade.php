@extends('layouts.app')

@section('content')
<div style="width: 500px; margin: 100px auto;">
    <h1 style="text-align:center ;">
      会員一覧
    </h1>
  <div style="text-align:right; margin: auto;">
    <a href="/create">>>登録</a>
  </div>

  <table border="1" style="border-collapse:collapse ; margin-left: auto; margin-right: auto; ">

      <tr>
        <th>名前</th>
        <th>電話番号</th>
        <th>メールアドレス</th>
      </tr>


      @foreach ($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->email }}</td>
        <td><a href="/edit/{{$user->id}}">>>編集</a></td>
      </tr>
      @endforeach

  </table>
</div>

@endsection