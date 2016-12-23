<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    
    <!-- Styles -->
    {{-- <link href="{{ asset('/css/vendor/font-awesome.min.css') }}" rel="stylesheet"> --}}
	<link href="{{ asset('/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/vendor/modern-business.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/customer/better-button.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
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

        .contentbody {
            padding-top: 30px;
            padding-bottom: 10px;
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

        .thumbnail img {
            width: 100%;
        }

        .ratings {
            padding-right: 10px;
            padding-left: 10px;
            color: #d17581;
        }

        .thumbnail {
            padding: 0;
        }

        .thumbnail .caption-full {
            padding: 9px;
            color: #333;
        }

        .cattitle-lg{
            font-weight: bold;
            font-size: 32px;
        }

        .cattitle-md{
            font-weight: bold;
            font-size: 24px;
        }

        .catmore{
            float:right;
            font-weight: bold;
            font-size: 20px;
            padding: 10px 0 0 0;
        }

        .catmore:link{
            
            background-color:transparent;
            text-decoration:none;
        }

        .catmore:hover{
            color:#ff8c1a;
            background-color:transparent;
            text-decoration:none;
        }

        .catmore:active{
            color: #e67300;
            background-color:transparent;
            text-decoration:none;
        }

        /*.catmore:visited{
            color:green;
            background-color:transparent;
            text-decoration:none;
        }*/

        
      
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
                <li style="margin: 10px 10px 30px; font-weight: bold"><span>系統版本： 0.1.0.{{ exec('git rev-list --count HEAD') }} ({{exec('git rev-parse --short HEAD')}})</span></li>							
			</td>
		  </tr>
		</table>
    </footer>  
</body>
</html>
