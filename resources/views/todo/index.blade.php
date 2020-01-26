{{-- @extends("default")
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
            <a href="#modal-01">
              <p class="folder-add-text">フォルダーを追加する<p>
            </a>
            <div class="modal-wrapper" id="modal-01">
              <a href="#!" class="modal-overlay"></a>
                <div class="modal-window">
                  <div class="modal-content">
                    {{Form::open(['url' => '/folder/create', 'files' => true]  )}}
                    {{csrf_field()}}
                      <div class="form-wrapper-group">
                        <input type="hidden" name="status" value="処理中">
                        {{Form::label("folder","folder",["class" => "form-wrapper-group-title"])}}
                        <div class="form-wrapper-group-cover">
                        {{Form::text("folder",null ,["id" => "folder" ,"class" => "form-wrapper-group-title-input"])}}  
                        </div>
                      </div>
                      <button type="submit" class="new-submit modal-submit">Submit</button>
                    {{Form::close()}}
                </div>
                <a href="#!" class="modal-close">×</a>
                </div>
            </div>
          </div>   
      </div>
      <div class="gwrapper">      
      <ul class="gnav">
        <li class="gnav-user">
          <a class="gnav-user-name" href="">一覧</a>
          @foreach($folders as $folder)
          <ul>
            <li class="gnav-list"><a class="gnav-list-link" href="#">{{$folder->folder}}</a></li>
          </ul>
          @endforeach 
        </li>
      </ul>
      </div>
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
      @foreach($items as $item)
      <div class="accbox">
          <!--ラベル1-->
          <div class="current-tasks-trio">
              <div class="current-tasks-trio-status ">{{$item->status}}</div>
          <div class="current-tasks-trio-limit ">{{$item->due}}</div>
          <div class="current-tasks-trio-updated ">{{$item->updated_at}}</div>
            </div>
          <label for="label{{$item->id}}">{{$item->title}}</label>
          <input type="checkbox" id="label{{$item->id}}" class="cssacc" />
            <div class="accshow">
              <!--ここに隠す中身-->
              <p class="hidden-content">
                {{$item->content}}
              </p>
            </div>
        </div>
        @endforeach 
</div>
<div class="pagination-wrapper">
  {{$items->links()}}
</div>
@endsection
 --}}
