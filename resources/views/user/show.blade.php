@extends("default")
@include("subview/header")
@section('contents')
<div class="index-wrapper">
<div class="index-wrapper-user">
  <div class="index-wrapper-user-text">
  <a class="user-link" href="/user/{{Auth::id()}}/edit">
    <i class="fas fa-edit"></i>
  </a>
  <p class="index-wrapper-user-text-p">{{$user->name}}</p>
  </div>
  <div class="index-wrapper-user-picture">
    <a href="#" class="index-wrapper-user-picture-link">
      @if($user->icon == null)
      <img class="index-wrapper-user-picture-link-image" src="//static.mercdn.net/images/member_photo_noimage_thumb.png" width="150" height="100" alt="プロフィールアイコン">
      @else 
      <img class="index-wrapper-user-picture-link-image" src="{{ asset('/storage/icon/'.$user->icon) }}" width="150" height="100">
      @endif
    </a>
  </div>
  <div class="index-wrapper-user-count">
  <p class="index-wrapper-user-count-text">全タスク数:{{$todos->count()}} </p>
  </div>
  <div class="index-wrapper-user-status">
    <div class="index-wrapper-user-status-doing">
      <p class="index-wrapper-user-status-doing-text">未処理</p>
    <div class="index-wrapper-user-status-doing-container"><p class="index-wrapper-user-status-doing-container-text">{{$doing->count()}}</p></div>
    </div>
    <div class="index-wrapper-user-status-notyet">
        <p class="index-wrapper-user-status-notyet-text">処理中</p>
    <div class="index-wrapper-user-status-notyet-container"><p class="index-wrapper-user-status-notyet-container-text">{{$notyet->count()}}</p></div>
    </div>
    <div class="index-wrapper-user-status-done">
        <p class="index-wrapper-user-status-done-text">完了</p>
    <div class="index-wrapper-user-status-done-container"><p class="index-wrapper-user-status-done-container-text">{{$done->count()}}</p></div>
    </div>
  </div>
</div> 
</div>
@endsection