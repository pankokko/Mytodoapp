@extends("default")
@include("subview.header")
@section("contents")
<div class="categories-container">
  <div class="folder-add-index">
    <a href="#modal-01">
      <p class="folder-add-index-text">Add Folder<p>
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
    <div class="categories-pictures">
      @foreach($folders as $folder)
        <div class="categories-pictures-wrapper"> 
          <a  class="top-pictures-wrapper-link"  href="/folder/{{$folder->id}}/show">
          <p class="categories-pictures-wrapper-text">{{$folder->folder}}</p>
            <img class="categories-pictures-wrapper-picture" src="http://get.secret.jp/pt/file/1579959808.jpg"  width="240" height="180px">
          </a>
        </div>
        @endforeach
    </div>
  </div>
  <div class="pagination-wrapper">
  {{$folders->links()}}
  </div> 
@endsection 