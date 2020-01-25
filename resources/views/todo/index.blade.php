@extends("default")
@section("title")
インデックス
@endsection
@section("contents")
@include("subview.header")
<div class="index">
  <div class="index-wrapper">
    <div class="index-wrapper-user">
      <div class="index-wrapper-user-text">
      <p class="index-wrapper-user-text-p">{{Auth::user()->name}}さんの進捗</p>
      </div>
      <div class="index-wrapper-user-picture">
        <a href="#" class="index-wrapper-user-picture-link">
          <img class="index-wrapper-user-picture-link-image"  src="{{ asset('/storage/temp/DSC01989.JPG') }}" width="150" height="100" alt="プロフィールアイコン">
        </a>
      </div>
      <div class="index-wrapper-user-count">
      <p class="index-wrapper-user-count-text">タスク数: {{$count}}</p>
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
  <div class="index-todo">
    <p class="index-todo-title">タスク一覧</p>
    <div class="index-todo-container">
      <div class="index-todo-container-add"> 
        <div class="index-todo-container-add-btn">
          <a class="index-todo-container-add-btn-link" href="{{route("todo/new")}}">
            <p class="index-todo-container-add-btn-link-text">タスクを追加する</p>
          </a>  
        </div>
      </div>
    </div>
      <div class="task-list">
        <div class="task-list-name">課題名</div>
        <div class="task-list-trio">
          <div class="task-list-trio-status ">状態</div>
          <div class="task-list-trio-limit ">期限</div>
          <div class="task-list-trio-updated ">更新日時</div>
        </div>
      </div>
      {{-- @foreach($items as $item)
      <div class="current-tasks">
      <div class="current-tasks-name"><a href="javascript:void(0)" onClick="hogeFunction();return false;" class="current-tasks-name-link" href="#">{{$item->title}}</a> <div class="extra-div"></div></div>
        <div class="current-tasks-trio">
          <div class="current-tasks-trio-status ">{{$item->status}}</div>
          <div class="current-tasks-trio-limit ">{{$item->due}}</div>
          <div class="current-tasks-trio-updated ">{{$item->updated_at}}</div>
        </div>
      </div>
      @endforeach --}}
      @foreach($items as $item)
      <div class="accbox">
          <!--ラベル1-->
          <div class="current-tasks-trio">
              <div class="current-tasks-trio-status ">{{$item->status}}</div>
          <div class="current-tasks-trio-limit ">{{$item->due}}</div>
          <div class="current-tasks-trio-updated ">{{$item->updated_at}}</div>
            </div>
          <label for="label{{$item->id}}">クリックして表示1</label>
          <input type="checkbox" id="label{{$item->id}}" class="cssacc" />
            <div class="accshow">
              <!--ここに隠す中身-->
              <p>
                こんにちは1
              </p>
            </div>
            <!--//ラベル1-->
          <!--ラベル2-->
            {{-- <label for="label2">クリックして表示2</label>
            <input type="checkbox" id="label2" class="cssacc" />
            <div class="accshow">
              <!--ここに隠す中身-->
              <p>
                こんにちは2
              </p>
            </div>
            <!--//ラベル2-->
          <!--ラベル3-->
            <label for="label3">クリックして表示3</label>
            <input type="checkbox" id="label3" class="cssacc" />
            <div class="accshow">
              <!--ここに隠す中身-->
              <p>
                こんにちは3
              </p>
            </div>
            <!--//ラベル3-->
          <!--ラベル4-->
            <label for="label4">クリックして表示4</label>
            <input type="checkbox" id="label4" class="cssacc" />
            <div class="accshow">
              <!--ここに隠す中身-->
              <p>
                こんにちは4
              </p>
            </div>
            <!--//ラベル4--> --}}
        </div><!--//.accbox-->
        @endforeach 
</div>
<div class="pagination-wrapper">
  {{$items->links()}}
</div>
@endsection


    