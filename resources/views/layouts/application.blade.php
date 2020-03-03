<!-- デフォルトのレイアウト -->
<!DOCTYPE html>
<html lang="en">
@include('components.head')
@include('components.header')
<body>
  <main>
    <div class="container">
      <div class="row">
        <div class="col s12 m8 offset-m1 xl7 offset-xl1">
          <!-- yieldで各ページ毎の内容を表示 -->
          @yield('content_area')
        </div>
        @include('components.right_menu')
      </div>
    </div>
  </main>

@include('components.footer')
  <!-- script -->
@include('components.js')
  </body>
</html>
