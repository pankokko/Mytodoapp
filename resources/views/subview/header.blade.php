<header class="header">
  <div class="header-wrapper">
    <div class="header-wrapper-left">
      <a class="header-wrapper-left-link" href="{{route("folder/index")}}">
        <i class="fas fa-home"></i>
      </a>
      <div class="header-wrapper-left-search">
        {{Form::open(  ["class" => "search-form"])}}
        {{csrf_field()}}
        <label for="search-submit" class="search-submit">
          <input type="submit" id="search-submit" class="search-submit-btn">
           <i class="fas fa-search"></i>
          </a>
        </label>
        {{Form::text('text', null, ["class" =>"search-form-input",'placeholder' => 'temp'])}}
        {{Form::close()}}
      </div>
      <div class="header-wrapper-left-wrapper" >
        <p class="header-wrapper-left-wrapper-text">OurTodoapp</p>
      </div>
      <div class="header-wrapper-left-user">
      <a href="/user/{{Auth::id()}}/show">
        @if($user->icon == null)
        <img  src="//static.mercdn.net/images/member_photo_noimage_thumb.png" width="30" height="30" alt="プロフィールアイコン">
        @else
        <img  src="{{ asset('/storage/icon/'.$user->icon) }}" width="30" height="30">
        @endif
        </a>
      </div>
    </div>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
  </div>
</header>
