@extends('default')
@section('contents')
<div class="sign-up">
  <div class="sign-up__wrapper">
    <h1 class="sign-up__wrapper-text">ログイン</h1>
    <form class="sign-up__wrapper-form" method="POST" action="{{route('login')}}">
    @csrf
    <div class="sign-up__wrapper-form-box">
        <input class="sign-up__wrapper-form-box__input" type="email" name="email"  placeholder="Email">
        <div class="under-bar"></div>
    </div>
    <div class="sign-up__wrapper-form-box">
        <input class="sign-up__wrapper-form-box__input" type="password" name="password"  placeholder="Password">
        <div class="under-bar"></div>
    </div>
    <button class="sign-up__wrapper-form-button"type="submit">
    <p class="sign-up__wrapper-form-button-registrate">ログイン</p>    
    </button>
    </form>
    <a class="login-btn" href="{{route("register")}}">
      <p class="login-btn-textbox">または登録</p>
    </a>
  </div>
   <div class="form-group ">
     <label for="github" class="git-hub-login">
        <a href="{{ url('login/github') }}" class="git-hub-login-link">
        <img src="https://img.icons8.com/ios/50/000000/github.png" width="30">
         Login with GitHub
       </a>
     </label>
  </div>
</div>
@endsection
