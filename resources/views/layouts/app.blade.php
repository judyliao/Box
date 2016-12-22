<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    
    <!-- Styles -->
    <link href="{{ asset('/css/vendor/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/vendor/modern-business.css') }}" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <!--JavaScripts-->
    <script src="{{ asset('/js/vendor/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('/js/vendor/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/js/vendor/jquery.form.js') }}"></script>
    <style>
        body {
            font-family: 'Microsoft Jhenghei UI';
        }

        .fa-btn {
            margin-right: 6px;
        }
        
        .footer {
			position: relative;
			bottom: 0;
			width: 100%;	
			height: auto;
			background-color: #404040;
			color: #bfbfbf;
			box-shadow: 0 -4px 8px 0 rgba(0, 0, 0, 0.2), 0 -6px 20px 0 rgba(0, 0, 0, 0.19);
		}
    </style>
    
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">    
                <!-- Left Side Of Navbar -->
                {{-- <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul> --}}

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li>
                        <a href="about.html">關於我們</a>
                    </li>
                    <li>
                        <a href="contact.html">聯絡資訊</a>
                    </li>                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>                    
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">登入</a></li>
                        <li><a href="{{ url('/register') }}">註冊</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>登出</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
		<table align="center">
		  <tr>	
			<td>		
				<li style="margin: 30px 10px 0; font-weight: bold"><span>顯示建議：</span>Chrome、IE 9.0、Firefox 3.5 以上 1024x768 以上解析度</li>
				<li style="margin: 10px 10px 30px; font-weight: bold"><span>系統版本： 0.0.0.{{ explode(' ',Config::get('version.version','   '))[1] }}</span></li>							
			</td>
		  </tr>
		</table>
    </footer>  
</body>
</html>
