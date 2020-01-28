@extends("default")
@include("subview/header")
@section("contents")
<div class="index-todo">
  <p class="index-todo-title">完了したタスク一覧</p>
  @foreach($folders as $folder)
    <div class="accbox">
        <!--ラベル1-->
        <div class="current-tasks-trio">
          <div class="current-tasks-trio-edit"><a class="current-tasks-trio-edit-link" href="/todo/{{$folder->id}}/edit">編集</a></div>
          <div class="delete-form-wrapper">
          <form class="comment-delete" action="/todo/{{$folder->id}}/delete" method="post" >
              @csrf
              {{ method_field('delete')}}
              <label for="delete-input" class="delete-label">
              <i class="fas fa-trash">
                <input id="delete-input"  type="submit" >
              </i>
            </label>
            </form>
          </div>
          @if($folder->status == "未処理")
            <div class="current-tasks-trio-status notyet">{{$folder->status}}</div>
          @elseif($folder->status == "処理中")
            <div class="current-tasks-trio-status doing ">{{$folder->status}}</div>
          @elseif($folder->status == "完了")
            <div class="current-tasks-trio-status done ">{{$folder->status}}</div>
          @endif
          <div class="current-tasks-trio-limit ">{{$folder->due}}</div>
          <div class="current-tasks-trio-updated ">{{$folder->updated_at}}</div>
        </div>
        <label for="label{{$folder->id}}">{{$folder->title}}</label>
        <input type="checkbox" id="label{{$folder->id}}" class="cssacc" />
          <div class="accshow">
            <!--ここに隠す中身-->
            <p class="hidden-content">
              {{$folder->content}}
            </p>
          </div>
      </div>
  @endforeach  
</div>
@endsection