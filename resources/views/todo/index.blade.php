@extends("default")
@section("title")
インデックス
@endsection
@section("content")
@include("subview.header")
 <div class="index-wrapper">
   <nav class="index-wrapper-sidenav">
     <div class="index-wrapper-sidenav-list"><i class="fas fa-th-list nav-icon"></i>Todoリスト</div>
     <div class="index-wrapper-sidenav-list"><i class="fas fa-user nav-icon"></i>マイページ</div>
   </nav>
   <div class="index-wrapper-list">
     <div class="index-wrapper-list-header"><i class="fas fa-chalkboard"></i>Todo</div>
   </div>
 </div>
@endsection