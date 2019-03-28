
@include('layout.head')
@include('layout.top')


<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="/">Home</a><span>|</span></li>
            <li>Хлібобулочні вироби</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->

<div class="banner">
    <div class="w3l_banner_nav_left">
        <nav class="navbar nav_bottom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav nav_1">
                    <li><a href="categoryBread">Хлібобулочні вироби</a></li>
                    <li><a href="categoryDrinks">Напої</a></li>
                    <li><a href="kitchen.html">Kухня</a></li>
                    <li><a href="short-codes.html">Домогосподарство</a></li>
                    <li><a href="pet.html">Корм для тварин</a></li>
                    <!--<li><a href="bread.html">Bread & Bakery</a></li>-->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>

    <div class="w3l_banner_nav_right">

        <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
            <h3 class="w3l_fruit">Хлібобулочні вироби</h3>

            <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                @foreach ( $catBread AS $val)
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="/public/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">

                                        <div class="snipcart-thumb">

                                            <a href="category/{{ $val->id}}"><img src="{{asset('public/images/'.$val->img) }}" alt=" " class="img-responsive" /></a>
                                            <p>{{$val->goods_name }}</p>
                                            <h4>{{$val->price }} грн</h4>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--                <div class="col-md-3 w3ls_w3l_banner_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid_pos">
                                                <img src="/public/images/offer.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block">
                                                        <div class="snipcart-thumb">
                                                            <a href="single.html"><img src="/public/images/38.png" alt=" " class="img-responsive" /></a>
                                                            <p>{{$val->goods_name }}</p>
                                                            <h4>{{$val->price }}</h4>
                                                        </div>
                
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid_pos">
                                                <img src="/public/images/offer.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block">
                                                        <div class="snipcart-thumb">
                                                            <a href="single.html"><img src="/public/images/39.png" alt=" " class="img-responsive" /></a>
                                                            <p>{{$val->goods_name }}</p>
                                                            <h4>{{$val->price }}</h4>
                                                        </div>
                
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 w3ls_w3l_banner_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid_pos">
                                                <img src="/public/images/offer.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block">
                                                        <div class="snipcart-thumb">
                                                            <a href="single.html"><img src="/public/images/40.png" alt=" " class="img-responsive" /></a>
                                                            <p>{{$val->goods_name }}</p>
                                                            <h4>{{$val->price }}</h4>
                                                        </div>
                
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                <!--                <div class="clearfix"> </div>-->
            </div>

            <!--            <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                            <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="/public/images/offer.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="/public/images/41.png" alt=" " class="img-responsive" /></a>
                                                        <p>{{$val->goods_name }}</p>
                                                        <h4>{{$val->price }}</h4>
                                                    </div>
            
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="/public/images/offer.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="/public/images/42.png" alt=" " class="img-responsive" /></a>
                                                        <p>{{$val->goods_name }}</p>
                                                        <h4>{{$val->price }}</h4>
                                                    </div>
            
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="tag"><img src="/public/images/tag.png" alt=" " class="img-responsive" /></div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="/public/images/43.png" alt=" " class="img-responsive" /></a>
                                                        <p>{{$val->goods_name }}</p>
                                                        <h4>{{$val->price }}</h4>
                                                    </div>
            
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 w3ls_w3l_banner_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="/public/images/offer.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="/public/images/44.png" alt=" " class="img-responsive" /></a>
                                                        <p>{{$val->goods_name }}</p>
                                                        <h4>{{$val->price }}</h4>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>-->
            <!--            <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                            <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="/public/images/offer.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="/public/images/45.png" alt=" " class="img-responsive" /></a>
                                                        <p>{{$val->goods_name }}</p>
                                                        <h4>{{$val->price }}</h4>
                                                    </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
            <!--<div class="col-md-3 w3ls_w3l_banner_left">
                <div class="hover14 column">
                                                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                                                    <div class="agile_top_brand_left_grid_pos">
                                                                            <img src="/public/images/offer.png" alt=" " class="img-responsive" />
                                                                    </div>
                                                                    <div class="agile_top_brand_left_grid1">
                                                                            <figure>
                                                                                    <div class="snipcart-item block">
                                                                                            <div class="snipcart-thumb">
                                                                                                    <a href="single.html"><img src="/public/images/46.png" alt=" " class="img-responsive" /></a>
                                                                                                    <p>{{$val->goods_name }}</p>
                                                                                                    <h4>{{$val->price }}</h4>
                                                                                    </div>
                                                                            </figure>
                                                                    </div>
                                                            </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
                                                            <div class="hover14 column">
                                                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                                                    <div class="tag"><img src="/public/images/tag.png" alt=" " class="img-responsive" /></div>
                                                                    <div class="agile_top_brand_left_grid1">
                                                                            <figure>
                                                                                    <div class="snipcart-item block">
                                                                                            <div class="snipcart-thumb">
                                                                                                    <a href="single.html"><img src="/public/images/47.png" alt=" " class="img-responsive" /></a>
                                                                                                    <p>{{$val->goods_name }}</p>
                                                                                                    <h4>{{$val->price }}</h4>
                                                                                            </div>
                                                                                    </div>
                                                                            </figure>
                                                                    </div>
                                                            </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-3 w3ls_w3l_banner_left">
                                                            <div class="hover14 column">
                                                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                                                    <div class="agile_top_brand_left_grid_pos">
                                                                            <img src="/public/images/offer.png" alt=" " class="img-responsive" />
                                                                    </div>
                                                                    <div class="agile_top_brand_left_grid1">
                                                                            <figure>
                                                                                    <div class="snipcart-item block">
                                                                                            <div class="snipcart-thumb">
                                                                                                    <a href="single.html"><img src="/public/images/48.png" alt=" " class="img-responsive" /></a>
                                                                                                    <p>{{$val->goods_name }}</p>
                                                                                                    <h4>{{$val->price }}</h4>
                                                                                            </div>
                                                                                          
                                                                                    </div>
                                                                            </figure>
                                                                    </div>
                                                            </div>
                                                            </div>
                                                    </div>-->

            <!--                <div class="clearfix"> </div>-->
        </div>

    </div>

</div>

<div class="clearfix"></div>
</div>

<!-- //banner -->

@include('layout.footer')