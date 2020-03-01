<!DOCTYPE html>
<html lang="en">
@include('components.head')
@include('components.header')
<body>
  <main>
    <div class="container">
      <div class="row">
        <div class="col s12 m8 offset-m1 xl7 offset-xl1">
          @yield('content_area')
        </div>
        @include('components.right_menu')
      </div>
    </div>
  </main>

@include('components.footer')


  <!--  Scripts-->
  <!--  Scripts-->
  <!-- Sidebar BSA-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>if (!window.jQuery) { document.write('<script src="bin/jquery-3.2.1.min.js"><\/script>'); }
</script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
