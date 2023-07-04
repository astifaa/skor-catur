<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Catur - Bappenda</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/x-icon"/>
    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <!--  Custom Scroll bar-->
    <link href="{{asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
    <!--  Right-sidemenu css -->
    <link href="{{asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Sidemenu css -->
    <link rel="stylesheet" href="{{asset('assets/css/sidemenu.css')}}">
    <!--  Owl-carousel css-->
    <link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
    <!-- Maps css -->
    <link href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
    <!-- Maps css -->
    <link href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
    <!-- style css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style-dark.css')}}" rel="stylesheet">
    <!---Skinmodes css-->
    <link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet" />
    <!-- Internal Data tables -->
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{asset('assets/js/table-data.js')}}"></script>
    <!---Switcher css-->
    <link href="{{asset('assets/switcher/css/switcher.css')}}" rel="stylesheet">
    <link href="{{asset('assets/switcher/demo.css')}}" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <main class="py-4">
                <div class="col-12">
                    <ul class="nav nav-tabs">

                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        <li class="nav-item dropdown">
                            @else
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">

                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                              <li>
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>


                            <!-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif -->
                            
                            @endguest
                        </ul>
                    </div>
                    @yield('content')
                </main>
            </div>
            <!-- JQuery min js -->
            <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
            <!-- Bootstrap Bundle js -->
            <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <!-- Ionicons js -->
            <script src="{{asset('assets/plugins/ionicons/ionicons.js')}}"></script>
            <!-- Moment js -->
            <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>

            <!-- Rating js-->
            <script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
            <script src="{{asset('assets/plugins/rating/jquery.barrating.js')}}"></script>

            <!--Internal  Perfect-scrollbar js -->
            <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
            <script src="{{asset('assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>
            <!--Internal Sparkline js -->
            <script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
            <!-- Custom Scroll bar Js-->
            <script src="{{asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
            <!-- right-sidebar js -->
            <script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>
            <script src="{{asset('assets/plugins/sidebar/sidebar-custom.js')}}"></script>
            <!-- Eva-icons js -->
            <script src="{{asset('assets/js/eva-icons.min.js')}}"></script>
            <!--Internal  Chart.bundle js -->
            <script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
            <!-- Moment js -->
            <script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
            <!--Internal  Flot js-->
            <script src="{{asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
            <script src="{{asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
            <script src="{{asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
            <script src="{{asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
            <script src="{{asset('assets/js/dashboard.sampledata.js')}}"></script>
            <script src="{{asset('assets/js/chart.flot.sampledata.js')}}"></script>
            <!--Internal Apexchart js-->
            <script src="{{asset('assets/js/apexcharts.js')}}"></script>
            <!-- Internal Map -->
            <script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
            <script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
            <script src="{{asset('assets/js/modal-popup.js')}}"></script>
            <!--Internal  index js -->
            <script src="{{asset('assets/js/index-dark.js')}}"></script>
            <script src="{{asset('assets/js/jquery.vmap.sampledata.js')}}"></script> 
            <!-- Sticky js -->
            <script src="{{asset('assets/js/sticky.js')}}"></script>
            <!-- custom js -->
            <script src="{{asset('assets/js/custom.js')}}"></script><!-- Left-menu js-->
            <script src="{{asset('assets/plugins/side-menu/sidemenu.js')}}"></script>
<!-- Internal Data tables -->
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js')}}" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js')}}" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

<!--Internal  Datatable js -->
<script src="{{asset('assets/js/table-data.js')}}"></script>

            <!-- Switcher js -->
            <script src="{{asset('assets/switcher/js/switcher.js')}}"></script> 
        </body>
        </html>
