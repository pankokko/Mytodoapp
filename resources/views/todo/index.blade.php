@extends("default")
@section("title")
インデックス
@endsection
@section("content")
@include("subview.header")
<div class="index">
  <div class="index-wrapper">
    <div class="index-wrapper-user">
      <div class="index-wrapper-user-text">
        <p class="index-wrapper-user-text-p">ぱんこっこさんの進捗</p>
      </div>
      <div class="index-wrapper-user-picture">
        <a href="#" class="index-wrapper-user-picture-link">
          <img class="index-wrapper-user-picture-link-image"  src="{{ asset('/storage/temp/DSC01989.JPG') }}"　width="150" height="100" alt="プロフィールアイコン">
        </a>
      </div>
      <div class="index-wrapper-user-count">
        <p class="index-wrapper-user-count-text">タスク数: 4</p>
      </div>
      <div class="index-wrapper-user-status">
        <div class="index-wrapper-user-status-doing">
          <p class="index-wrapper-user-status-doing-text">未処理</p>
          <div class="index-wrapper-user-status-doing-container"><p class="index-wrapper-user-status-doing-container-text">3</p></div>
        </div>
        <div class="index-wrapper-user-status-notyet">
            <p class="index-wrapper-user-status-notyet-text">処理中</p>
            <div class="index-wrapper-user-status-notyet-container"><p class="index-wrapper-user-status-notyet-container-text">1</p></div>
        </div>
        <div class="index-wrapper-user-status-done">
            <p class="index-wrapper-user-status-done-text">完了</p>
            <div class="index-wrapper-user-status-done-container"><p class="index-wrapper-user-status-done-container-text">2</p></div>
        </div>
      </div>
    </div>
      <div class="index-folder">
        <div class="index-folder-container">
          <p class="index-folder-container-text">フォルダー</p>
            <div class="folder-add">
              <a class="folder-add-link" href="#">
                <p class="folder-add-link-text">フォルダーを追加する</p>
              </a>
            </div>   
        </div>
        <a href="#" class="folder-list">
          <p class="folder-list-text">フォルダー1</p>
        </a>
        <a href="#" class="folder-list">
          <p class="folder-list-text">フォルダー2</p>
        </a>
        <a href="#" class="folder-list">
          <p class="folder-list-text">フォルダー3</p>
        </a>
      </div>
      
    </div>
  </div>
</div>
@endsection