@extends('layouts.app')

@section('content')

<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators" style="bottom: 0px">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://i.imgur.com/JjzLDFA.png');"></div>
                <div class="carousel-caption">
                    <h2>妙喵</h2>
                    <a href="https://wiki.52poke.com/zh-hant/妙喵">
                        <button class="btn btn-lcyan">
                            點我看更多
                        </button>
                    </a>                    
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://i.imgur.com/78iO7RB.jpg');"></div>
                <div class="carousel-caption">
                    <h2>球球海獅</h2>
                    <a href="https://wiki.52poke.com/zh-hant/球球海獅">
                        <button class="btn btn-lblue">
                            點我看更多
                        </button>
                    </a>                    
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://i.imgur.com/bVaFjeS.jpg');"></div>
                <div class="carousel-caption">
                    <h2>火斑喵</h2>
                    <a href="https://wiki.52poke.com/zh-hant/火斑喵">
                        <button class="btn btn-lred">
                            點我看更多
                        </button>
                    </a>                    
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://i.imgur.com/LdQsJot.jpg');"></div>
                <div class="carousel-caption">
                    <h2>木木梟</h2>
                    <a href="https://wiki.52poke.com/zh-hant/木木梟">
                        <button class="btn btn-llight-green">
                            點我看更多
                        </button>
                    </a>                    
                </div>
            </div>
            
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <span class="cattitle-lg">New</span>  
                    <a href="#" class="catmore">更多商品 <i class="fa fa-btn fa-chevron-circle-right"></i></a>  
                </div>                
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="thumbnail">
                    <a href="#">
                        <img src="http://placehold.it/320x320" alt="">
                    </a> 
                    <div class="caption">
                        <h4 class="pull-right">$24.99</h4>
                        <h4 style="word-break:break-all"><a href="#">食物食物食物食物食物食物食物</a>
                        </h4>
                        <p>中文中文中文中文中文中文中文中文</p>
                    </div>                    
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="thumbnail">
                    <a href="#">
                        <img src="http://placehold.it/320x320" alt="">
                    </a> 
                    <div class="caption">
                        <h4 class="pull-right">$24.99</h4>
                        <h4 style="word-break:break-all"><a href="#">食物食物食物食物食物食物食物</a>
                        </h4>
                        <p>中文中文中文中文中文中文中文中文</p>
                    </div>                    
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="thumbnail">
                    <a href="#">
                        <img src="http://placehold.it/320x320" alt="">
                    </a> 
                    <div class="caption">
                        <h4 class="pull-right">$24.99</h4>
                        <h4 style="word-break:break-all"><a href="#">食物食物食物食物食物食物食物</a>
                        </h4>
                        <p>中文中文中文中文中文中文中文中文</p>
                    </div>                    
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="thumbnail">
                    <a href="#">
                        <img src="http://placehold.it/320x320" alt="">
                    </a> 
                    <div class="caption">
                        <h4 class="pull-right">$24.99</h4>
                        <h4 style="word-break:break-all"><a href="#">食物食物食物食物食物食物食物</a>
                        </h4>
                        <p>中文中文中文中文中文中文中文中文</p>
                    </div>                    
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="thumbnail">
                    <a href="#">
                        <img src="http://placehold.it/320x320" alt="">
                    </a> 
                    <div class="caption">
                        <h4 class="pull-right">$24.99</h4>
                        <h4 style="word-break:break-all"><a href="#">食物食物食物食物食物食物食物</a>
                        </h4>
                        <p>中文中文中文中文中文中文中文中文</p>
                    </div>                    
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="thumbnail">
                    <a href="#">
                        <img src="http://placehold.it/320x320" alt="">
                    </a> 
                    <div class="caption">
                        <h4 class="pull-right">$24.99</h4>
                        <h4 style="word-break:break-all"><a href="#">食物食物食物食物食物食物食物</a>
                        </h4>
                        <p>中文中文中文中文中文中文中文中文</p>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <span class="cattitle-md">Category 1</span>  
                    <a href="#" class="catmore">更多商品 <i class="fa fa-btn fa-chevron-circle-right"></i></a>  
                </div>                
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="thumbnail">
                    <a href="#">
                        <img src="http://placehold.it/320x320" alt="">
                    </a> 
                    <div class="caption">
                        <h4 class="pull-right">$24.99</h4>
                        <h4 style="word-break:break-all"><a href="#">食物食物食物食物食物食物食物</a>
                        </h4>
                        <p>中文中文中文中文中文中文中文中文</p>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <span class="cattitle-md">Category 2</span>  
                    <a href="#" class="catmore">更多商品 <i class="fa fa-btn fa-chevron-circle-right"></i></a>  
                </div>                
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="thumbnail">
                    <a href="#">
                        <img src="http://placehold.it/320x320" alt="">
                    </a> 
                    <div class="caption">
                        <h4 class="pull-right">$24.99</h4>
                        <h4 style="word-break:break-all"><a href="#">食物食物食物食物食物食物食物</a>
                        </h4>
                        <p>中文中文中文中文中文中文中文中文</p>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- /.row -->
        <hr>         

    </div>
    <!-- /.container -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>    
@endsection
