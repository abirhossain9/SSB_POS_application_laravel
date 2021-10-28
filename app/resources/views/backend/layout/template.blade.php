{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('backend.includes.header')
    @include('backend.includes.info')
    @include('backend.includes.css')


  </head>

  <body>

    @include('backend.includes.menubar')
    @include('backend.includes.topbar')
    @include('backend.includes.options')




    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      @yield('body')
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## Body content end ########## -->
    @include('backend.includes.scripts')
  </body>
</html>
............................. --}}



<!DOCTYPE html>
<html lang="en">
<head>
    {{-- header --}}
    @include('backend.includes.header')
    {{-- css --}}
    @include('backend.includes.css')
</head>
<body class="page-body  page-fade gray" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
    @include('backend.includes.menubar')

	<div class="main-content">

		@include('backend.includes.topbar')

        @yield('body')
        @include('backend.includes.footer')
      </div><!-- br-mainpanel -->
      <!-- ########## Body content end ########## -->
      @include('backend.includes.scripts')

</body>
</html>
