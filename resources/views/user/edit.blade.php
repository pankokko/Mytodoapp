@extends("default")
@include("subview/header")
@section("contents")
<div class="new-container">
  @if($errors->has('title'))<div class="errors-title">{{ $errors->first('title') }}</div>@endif
<div class="new-container-wrapper">
  <div class="new-container-wrapper-default">
    <div class="new-container-wrapper-default-title">ユーザー情報の編集</div>
    <div class="form-wrapper">
      {{Form::open(['files' => true, "method" => "post" ]  )}}
        {{csrf_field()}}
        {{method_field("PUT")}}
        <div class="form-wrapper-group">
          <input type="hidden" name="status" value="処理中">
          {{Form::label("name","name",["class" => "form-wrapper-group-title"])}}
          <div class="form-wrapper-group-cover">
          {{Form::text("name",null,[ "id" => "title" ,"class" => "form-wrapper-group-title-input"])}}  
          </div>
        </div>
        <div class="image">
          <label class="image-user" for="file_input">
           user icon 
            <img class="image-user-icon" src="//static.mercdn.net/images/member_photo_noimage_thumb.png" width="200" height="200">
            <input id="file_input" type="file" class="image-input" name="path">
            <input id="file_input" type="hidden" class="image-input" name="status" value="">
          </label>
        </div>
          <div class="preview" ></div>
        <button type="submit" class="new-submit">Submit</button>
      {{Form::close()}}
    </div>
  </div>
</div>
</div>
@endsection