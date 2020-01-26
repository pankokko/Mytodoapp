@extends("default")
@section("contents")
@include("subview.header")
  <div class="new-container">
      @if($errors->has('title'))<div class="errors-title">{{ $errors->first('title') }}</div>@endif
    <div class="new-container-wrapper">
      <div class="new-container-wrapper-default">
        <div class="new-container-wrapper-default-title">新しいタスク</div>
        <div class="form-wrapper">
          {{Form::open(['url' => 'todo/create', 'files' => true]  )}}
            {{csrf_field()}}
            <div class="form-wrapper-group">
              <input type="hidden" name="folder_id" value="{{$id}}">
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
      </div>
    </div>
  </div>
@endsection

