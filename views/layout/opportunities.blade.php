<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('inc.links'){{--CSS Links in folder inc--}}
        {{--  Custom CSS designed especially for Home Layout  --}}
        <link rel="stylesheet" href="<?php echo asset('css/customopport/opportunities.css')?>" type="text/css">
        
        <title>{{config('app.name','PBO Global')}}</title>
    </head>
    <body>  
        @yield('loadingScreen'){{--Loading Animation--}}
        
        @include('inc.navbar'){{--Navbar--}}
        
        <div id="contents">{{-- This div is for wrapping up the whole content for loading screen   --}}
            <div id="fadeeffect" class="preload">

                {{--  Background Image  --}}
                    <div class="parallax-container hide-on-small-only">
                        <div class="parallax">
                            <center><h3>Start Builidng Your Career</h3></center>
                            <img style="z-index: -1;" src=<?php echo asset("img/careers1.jpg")?>>
                        </div>
                    </div>
                {{-- End of Background Image  --}}

                {{--  Navbar   --}}
                    <nav class="hide-on-small-only">
                        <div class="nav-wrapper">
                            <ul id="nav-mobile" class="hide-on-small-only">
                                <li><a href="\financeaccounting">Finance & Accounting</a></li>
                                <li><a href="\legalsupport">Legal Support Service</a></li>
                                <li><a href="\itservices">IT & IT Enabled-Services</a></li>
                                <li><a href="\salesmarketing">Sales and Marketing Support Services</a></li>
                            </ul>
                        </div>
                    </nav> 
                {{--End of Navbar   --}}

                @yield('content') {{--Job Opportunities--}} 

                @include('inc.footer') {{--Footer--}}
            </div>
        </div>

        @include('inc.scripts') {{--JScripts--}}
        <script type="text/javascript" src="<?php echo asset('js/customopport.js')?>"></script>

    </body>
</html>
