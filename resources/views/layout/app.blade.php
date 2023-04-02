<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
 @include('layout.header')
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    @include('layout.navbar') 

    <!-- main menu-->
    @include('layout.sidebar')
    <!-- / main menu-->

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class=" "><!-- stats -->
              @yield('content')

        </div>
      </div>
    </div> 

    @include('layout.footer')
    @yield('js')
  </body>
</html>
