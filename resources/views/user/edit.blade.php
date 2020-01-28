@extends("default")
@include("subview/header")
@section("contents")
<div class="new-container">
  @if($errors->has('title'))<div class="errors-title">{{ $errors->first('title') }}</div>@endif
<div class="new-container-wrapper">
  <div class="new-container-wrapper-default">
    <div class="new-container-wrapper-default-title">ユーザー情報の編集</div>
    <div class="form-wrapper">
      {{Form::open(['route' =>['user/update',Auth::id()],'files' => true, "method" => "post" ]  )}}
        {{csrf_field()}}
        {{method_field("PUT")}}
        <div class="form-wrapper-group">
          {{Form::label("name","name",["class" => "form-wrapper-group-title"])}}
          <div class="form-wrapper-group-cover">
          {{Form::text("name",$user->name,[ "id" => "title" ,"class" => "form-wrapper-group-title-input"])}}  
          </div>
        </div>
        <div class="image">
          <label class="image-user" for="file_input">
            user icon 
          <input id="file_input" type="file" name="icon" class="image-user-input" onChange="imgPreView(event)">
             <div id="preview"></div>
          @if($user->icon == null)
          <img  class="image-user-icon" src="//static.mercdn.net/images/member_photo_noimage_thumb.png" width="200" height="200" alt="プロフィールアイコン">
          @else
          <img class="image-user-icon"  src="{{ asset('/storage/icon/'.$user->icon) }}" width="200" height="200">
          @endif
          </label>
        </div>
        <button type="submit" class="new-submit">Submit</button>
      {{Form::close()}}
    </div>
  </div>
</div>
</div>
@endsection