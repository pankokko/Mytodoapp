@extends("default")
@section("title")
詳細ページ
@endsection
@section("contents")
@include("subview.header")
<div class="index">
  <div class="index-wrapper">
    <div class="index-wrapper-user">
      <div class="index-wrapper-user-text">
      <p class="index-wrapper-user-text-p">{{$folder->folder}}</p>
      </div>
      <div class="index-wrapper-user-picture">
        <a href="#" class="index-wrapper-user-picture-link">
          <img class="index-wrapper-user-picture-link-image"   src="http://get.secret.jp/pt/file/1579959808.jpg" width="150" height="100" alt="プロフィールアイコン">
        </a>
      </div>
      <div class="index-wrapper-user-count">
      <p class="index-wrapper-user-count-text">タスク数: {{$folders->count()}}</p>
      </div>
      <div class="index-wrapper-user-status">
        <div class="index-wrapper-user-status-doing">
          <p class="index-wrapper-user-status-doing-text">未処理</p>
          <div class="index-wrapper-user-status-doing-container"><p class="index-wrapper-user-status-doing-container-text">{{$notyet}}</p></div>
        </div>
        <div class="index-wrapper-user-status-notyet">
            <p class="index-wrapper-user-status-notyet-text">処理中</p>
        <div class="index-wrapper-user-status-notyet-container"><p class="index-wrapper-user-status-notyet-container-text">{{$doing}}</p></div>
        </div>
        <div class="index-wrapper-user-status-done">
            <p class="index-wrapper-user-status-done-text">完了</p>
            <div class="index-wrapper-user-status-done-container"><p class="index-wrapper-user-status-done-container-text">{{$done}}</p></div>
        </div>
      </div>
    </div>
    <div class="index-folder">
      <div class="index-folder-container">
        <p class="index-folder-container-text">フォルダ</p>
          <div class="folder-add">
            <a href="#modal-01">
              <p class="folder-add-text">フォルダを追加する<p>
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
          @foreach($user_folders as $folder)
          <ul>
            <li class="gnav-list"><a class="gnav-list-link" href="/folder/{{$folder->id}}/show">{{$folder->folder}}</a></li>
          </ul>
          @endforeach 
        </li>
      </ul>
      </div>
    </div>
    <div class="index-wrapper-menu">
      <p class="index-wrapper-menu-text">メニュー</p>
      <div class="index-wrapper-menu-list">
      <a class="index-wrapper-menu-list-link" href="/folder/{{$folder->id}}/done">
        <p class="index-wrapper-menu-list-text">完了したタスク</p>
      </a>
      </div>
      <div class="index-wrapper-menu-list">
          <a href="#modal-03">
              <p class="folder-add-text">招待状を送る<p>
            </a>
            <div class="modal-wrapper" id="modal-03">
              <a href="#!" class="modal-overlay"></a>
                <div class="modal-window">
                  <div class="modal-content">
                    {{Form::open(['url' => '/invitation/create', 'files' => true,"method" => "POST"]  )}}
                    {{csrf_field()}}
                      <div class="form-wrapper-group">
                        <input type="hidden" name="url" value="{{$folder->id}}" value="処理中">
                        {{Form::label("reciever","username",["class" => "form-wrapper-group-title"])}}
                        <div class="form-wrapper-group-cover">
                        {{Form::text("reciever",null ,["id" => "reciever" ,"class" => "form-wrapper-group-title-input"])}}  
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
  </div>
  <div class="index-todo">
    <p class="index-todo-title">タスク一覧</p>
    <div class="index-todo-container">
      <div class="index-todo-container-add"> 
        <div class="index-todo-container-add-btn">
          <a href="#modal-02">
        <p class="folder-add-text">タスクを追加する<p>
      </a>
      <div class="modal-wrapper" id="modal-02">
        <a href="#!" class="modal-overlay"></a>
          <div class="modal-window" id="modal-new">
            <div class="modal-content">
                {{Form::open(['url' => 'todo/create', 'files' => true]  )}}
                {{csrf_field()}}
                <div class="form-wrapper-group">
                  <input type="hidden" name="folder_id" value="{{$folder->id}}"> 
                  <input type="hidden" name="status" value="処理中">
                  {{Form::label("title","Title",["class" => "form-wrapper-group-title"])}}
                  <div class="form-wrapper-group-cover">
                  {{Form::text("title",null ,["id" => "title" ,"class" => "form-wrapper-group-title-input"])}}  
                  </div>
                </div>
                <div class="form-wrapper-group textarea">
                  {{Form::label("content","Contents",["class" => "form-wrapper-group-content"])}}
                  <div class="form-wrapper-group-cover content">
                  <textarea class="textbox" name="content" id="content" cols="50" rows="4"></textarea>  
                  </div>
                </div>
                <div class="form-wrapper-group due">
                  {{Form::label("due_date",null,["class" => "due_date-label"])}} 
                  <div class="form-wrapper-group-cover">
                  {{Form::text("due",null, ["id" => "due_date" , "class" => "due_date-label_input"])}}
                  </div>
                </div>
                <button type="submit" class="new-submit">Submit</button>
              {{Form::close()}}
          </div>
          <a href="#!" class="modal-close">×</a>
          </div>
      </div>
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
<div class="pagination-wrapper">
  {{-- {{$folder->links()}}  --}}
</div>

@endsection

