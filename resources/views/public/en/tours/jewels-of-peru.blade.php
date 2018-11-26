@extends('public.en.layouts.master')

@section('content')
<div class="inner-banner style-6">
    <img class="center-image" src="/assets/public/img/detail/bg_4.jpg" alt="">
    <div class="vertical-align">
        <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <!--
                    <ul class="banner-breadcrumb color-white clearfix">
                       <li><a class="link-blue-2" href="#">home</a> /</li>
                       <li><a class="link-blue-2" href="#">flights</a> /</li>
                       <li><span>detail</span></li>
                    </ul> -->
                    <h2 class="color-white">Jewels of Peru</h2>
                    <div class="detail-rate rate-wrap clearfix" >
                        <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        </div>
                    <i>485 Rewies</i> 
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>


 <!-- DETAIL WRAPPER -->
<div class="detail-wrapper">
    <div class="container">
        <div class="detail-header">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="detail-category color-grey-3"></div>
                    <h2 class="detail-title color-dark-2">Jewels of Peru</h2>
                    <div class="detail-rate rate-wrap clearfix">
                        <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        </div>
                    <i>485 Rewies</i> 
                   </div>
                </div>
                <!-- TELEFONO Y CORREO -->    
                <div class="col-xs-12 col-sm-4">
                    <div class="help-contact bg-grey-2">
                        <a class="help-phone color-dark-2 link-dr-blue" href="tel:5184247277"><img src="/assets/public/img/detail/phone24-dark.png" alt="">51 84 247277</a>
                        <a class="help-mail color-dark-2 link-dr-blue" href="mailto:terandes@terandes.com"><img src="/assets/public/img/detail/letter-dark.png" alt="">terandes@terandes.com</a>
                    </div> 
                </div>
            </div>
        </div>

        <div class="row padd-90">
            <div class="col-xs-12 col-md-8">

                <!-- SLIDER TOUR -->
                <div class="detail-content color-1">
                    <div class="detail-top slider-wth-thumbs style-1 arrows">
                        <div class="swiper-container thumbnails-preview" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide active" data-val="0">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-peru/1.jpg" alt="">
                                </div>
                            <div class="swiper-slide" data-val="1">
                                <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-peru/2.jpg" alt="">
                            </div>
                            <div class="swiper-slide" data-val="2">
                                <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-peru/3.jpg" alt="">
                            </div>
                            <div class="swiper-slide" data-val="3">
                                <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-peru/4.jpg" alt="">     
                            </div>
                            <div class="swiper-slide" data-val="4">
                                <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-peru/5.jpg" alt="">            
                            </div>
                            <div class="swiper-slide" data-val="5">
                                <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-peru/6.jpg" alt="">            
                            </div>
                        </div>
                        <div class="pagination pagination-hidden poin-style-1"></div>
                        <div class="arrow-wrapp arr-s-3">
                            <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
                            <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
                        </div>
                    </div>
                    <div class="swiper-container thumbnails" data-autoplay="0" data-loop="0" data-speed="500" data-slides-per-view="responsive" data-xs-slides="3" data-sm-slides="5" data-md-slides="5" data-lg-slides="5"                   data-add-slides="5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide current active" data-val="0">
                               <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-peru/1_1.jpg" alt="">
                            </div>
                            <div class="swiper-slide" data-val="1">
                               <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-peru/2_2.jpg" alt="">
                            </div>
                            <div class="swiper-slide" data-val="2">
                               <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-peru/3_3.jpg" alt="">
                            </div>
                            <div class="swiper-slide" data-val="3">
                               <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-peru/4_4.jpg" alt="">
                            </div>
                            <div class="swiper-slide" data-val="4">
                               <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-peru/5_5.jpg" alt="">
                            </div>
                            <div class="swiper-slide" data-val="5">
                               <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-peru/6_6.jpg" alt="">
                            </div>
                        </div>
                    <div class="pagination hidden"></div>
                </div>
            </div>                           
        </div>   
        <div class="detail-content-block">
            <div class="simple-tab color-1 tab-wrapper">
                <div class="tab-nav-wrapper">
                    <div  class="nav-tab  clearfix">
                        <div class="nav-tab-item active">
                            Description
                        </div>
                        <div class="nav-tab-item">
                            Availability
                        </div>
                        <div class="nav-tab-item">
                            Amenities
                        </div>
                        <div class="nav-tab-item">
                            Reviews
                        </div>
                        <div class="nav-tab-item">
                            Write a Review
                        </div>                          
                    </div>
                </div>
                <div class="tabs-content clearfix">
                    <div class="tab-info active">
                        <div class="detail-content-block">
                            <div class="accordion style-2">
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>How can I manage Instant Book settings?</div>
                                    <div class="acc-body">
                                        <h5>metus Aenean eget massa</h5>
                                        <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim. Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <ul>
                                                    <li>Shopping history</li>
                                                    <li>Hot offers according your settings</li>
                                                    <li>Multi-product search</li>
                                                    <li>Opportunity to share with friends</li>
                                                    <li>User-friendly interface</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <ul>
                                                    <li>Shopping history</li>
                                                    <li>Hot offers according your settings</li>
                                                    <li>Multi-product search</li>
                                                    <li>Opportunity to share with friends</li>
                                                    <li>User-friendly interface</li>
                                                </ul>                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>How do I list multiple rooms?</div>
                                    <div class="acc-body">
                                        <h5>metus Aenean eget massa</h5>
                                        <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim. Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <ul>
                                                    <li>Shopping history</li>
                                                    <li>Hot offers according your settings</li>
                                                    <li>Multi-product search</li>
                                                    <li>Opportunity to share with friends</li>
                                                    <li>User-friendly interface</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <ul>
                                                    <li>Shopping history</li>
                                                    <li>Hot offers according your settings</li>
                                                    <li>Multi-product search</li>
                                                    <li>Opportunity to share with friends</li>
                                                    <li>User-friendly interface</li>
                                                </ul>                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>How do I use my calendar?</div>
                                    <div class="acc-body">
                                        <h5>metus Aenean eget massa</h5>
                                        <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim. Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <ul>
                                                    <li>Shopping history</li>
                                                    <li>Hot offers according your settings</li>
                                                    <li>Multi-product search</li>
                                                    <li>Opportunity to share with friends</li>
                                                    <li>User-friendly interface</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <ul>
                                                    <li>Shopping history</li>
                                                    <li>Hot offers according your settings</li>
                                                    <li>Multi-product search</li>
                                                    <li>Opportunity to share with friends</li>
                                                    <li>User-friendly interface</li>
                                                </ul>                 
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                                                                        
                            </div>                      
                        </div> 
                    </div>
                    <div class="tab-info"> 
                        <h3>General Information About tour</h3>
                        <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <ul>
                            <li>Shopping history</li>
                            <li>Hot offers according your settings</li>
                            <li>Multi-product search</li>
                            <li>Opportunity to share with friends</li>
                        </ul>                                 
                        <h4>interesting for you</h4>
                        <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus.</p>
                        <h3>you need to know</h3>
                        <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
                    </div>
                    <div class="tab-info">
                        <h3>you need to know</h3>
                        <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <h3>General Information About tour</h3>
                        <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p> 
                        <img class="right-img" src="/assets/public/img/detail/tab_img.jpg" alt="">
                        <h4>interesting for you</h4>
                        <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus.</p>   
                        <ul>
                            <li>Shopping history</li>
                            <li>Hot offers according your settings</li>
                            <li>Multi-product search</li>
                            <li>Opportunity to share with friends</li>
                        </ul>                     
                    </div>
                    <div class="tab-info">
                        <img class="right-img" src="img/detail/tab_img.jpg" alt="">
                        <h3>General Information About tour</h3>
                        <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <h4>interesting for you</h4>
                        <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus.</p>
                        <ul>
                            <li>Shopping history</li>
                            <li>Hot offers according your settings</li>
                            <li>Multi-product search</li>
                            <li>Opportunity to share with friends</li>
                        </ul>
                        <h3>you need to know</h3>
                        <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="tab-info">
                        <h3>General Information About tour</h3>
                        <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <h4>interesting for you</h4>
                        <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus.</p>
                        <ul>
                            <li>Shopping history</li>
                            <li>Hot offers according your settings</li>
                            <li>Multi-product search</li>
                            <li>Opportunity to share with friends</li>
                        </ul>
                        <h3>you need to know</h3>
                        <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>     
                </div>
            </div>            
        </div>         
    </div>
    <!--RIGHT SIDEBAR-->
    <div class="col-xs-12 col-md-4">
        <div class="right-sidebar">
            <!--DETALLES DEL TOUR-->
            <div class="detail-block bg-dr-blue">
                <h4 class="color-white">details</h4>
                <div class="details-desc">
                    <p class="color-grey-9">Category:  <span class="color-white">hotels</span></p>
                    <p class="color-grey-9">price: <span class="color-white">$500 / person</span></p>
                    <p class="color-grey-9">location: <span class="color-white">paris, france</span></p>
                    <p class="color-grey-9">date: <span class="color-white">july 19th to july 29th</span></p>
                    <p class="color-pink">FLIGHT TYPE: <span class="color-white">ECONOMY</span></p>
                    <p class="color-pink">FARE TYPE: <span class="color-white">REFUNDABLE</span></p>
                    <p class="color-pink">CANCELLATION: <span class="color-white">$78 / PERSON</span></p>
                    <p class="color-pink">FLIGHT CHANGE: <span class="color-white">$53 / PERSON</span></p>
                    <p class="color-pink">SEATS & BAGGAGE: <span class="color-white">EXTRA CHARGE</span></p>
                    <p class="color-pink">INFLIGHT FEATURES: <span class="color-white">AVAILABLE</span></p>
                </div>
                <div class="details-btn">
                  <a href="#" class="c-button b-40 bg-tr-1 hv-white"><span>view on map</span></a>
                  <a href="#" class="c-button b-40 bg-white hv-transparent"><span>book now</span></a>
                </div>
            </div>

            <!-- TOURS POPULARES-->    
            <div class="popular-tours bg-grey-2">
                <h4 class="color-dark-2">popular tours</h4>
                <div class="hotel-small style-2 clearfix">
                    <a class="hotel-img black-hover" href="#">
                    <img class="img-responsive radius-3" src="/assets/public/img/detail/hotel_small_1.jpg" alt="">
                    <div class="tour-layer delay-1"></div>                    
                    </a>
                    <div class="hotel-desc">
                        <h5><span class="color-dark-2">from <strong>$273</strong></span></h5>
                        <h4>bristol Hotel</h4>
                        <div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
                    </div>
                </div>
                <div class="hotel-small style-2 clearfix">
                    <a class="hotel-img black-hover" href="#">
                    <img class="img-responsive radius-3" src="/assets/public/img/detail/hotel_small_2.jpg" alt="">
                    <div class="tour-layer delay-1"></div>                    
                    </a>
                    <div class="hotel-desc">
                        <h5><span class="color-dark-2">from <strong>$273</strong></span></h5>
                        <h4>bristol Hotel</h4>
                        <div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
                    </div>
                </div>
                <div class="hotel-small style-2 clearfix">
                    <a class="hotel-img black-hover" href="#">
                    <img class="img-responsive radius-3" src="/assets/public/img/detail/hotel_small_3.jpg" alt="">
                    <div class="tour-layer delay-1"></div>                    
                    </a>
                    <div class="hotel-desc">
                        <h5><span class="color-dark-2">from <strong>$273</strong></span></h5>
                        <h4>bristol Hotel</h4>
                        <div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
                    </div>
                </div>                      
            </div>
        </div>            
    </div>
</div>
        

    <!-- contacto --> 
        
    <div class="row" style="margin-top: -100px;">
      <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-blue-2 underline">contact</h4>
                    </div>
                </div>
            </div>
        @include('public.en.contact.contactForm')
    </div>
<!--     fin contacto-->

<!-- tours relacionados -->
<div class="may-interested padd-90">
    <div class="row">
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
            <div class="hotel-item">
                <div class="radius-top">
                    <img src="/assets/public/img/tour/jewels/1.jpg" alt="">
                    <div class="price price-s-1">$273</div>
                </div>
                <div class="title clearfix">
                    <h4><b>JEWELS OF THE SOUTH BELMOND TRENES</b></h4>
                    <div class="rate-wrap">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 rewies</i> 
                    </div>  
                    <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                    <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                    <a href="/en/tour/jewels-of-the-south-belmond-trenes" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                    <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img src="/assets/public/img/loc_icon_small_drak.png" alt="">view on map</a>
                </div>
            </div>            
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
            <div class="hotel-item">
                <div class="radius-top">
                    <img src="/assets/public/img/tour/vinicunca/1.jpg" alt="">
                    <div class="price price-s-1">$273</div>
                </div>
                <div class="title clearfix">
                    <h4><b>MULTI ACTIVE PERU II - VINICUNCA</b></h4>
                    <div class="rate-wrap">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 rewies</i> 
                    </div>  
                    <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                    <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                    <a href="/en/tour/multi-active-peru-ii-vinicunca" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                    <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img src="/assets/public/img/loc_icon_small_drak.png" alt="">view on map</a>
                </div>
            </div>            
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
            <div class="hotel-item">
                <div class="radius-top">
                    <img src="/assets/public/img/tour/relais-chateaux/1.jpg" alt="">
                    <div class="price price-s-1">$273</div>
                </div>
                <div class="title clearfix">
                    <h4><b>RELAIS & CHATEAUX</b></h4>
                    <div class="rate-wrap">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 rewies</i> 
                    </div>  
                    <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                    <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                    <a href="/en/tour/relais-chateaux" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                    <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img src="/assets/public/img/loc_icon_small_drak.png" alt="">view on map</a>
                </div>
            </div>            
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
            <div class="hotel-item">
                <div class="radius-top">
                    <img src="/assets/public/img/tour/through-the-flavors-of-peru/1.jpg" alt="">
                     <div class="price price-s-1">$273</div>
                </div>
                <div class="title clearfix">
                    <h4><b>THROUGH THE FLAVORS OF PERU</b></h4>
                    <div class="rate-wrap">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 rewies</i> 
                    </div>  
                    <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                    <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                    <a href="/en/tour/through-the-flavors-of-peru" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                    <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img src="/assets/public/img/loc_icon_small_drak.png" alt="">view on map</a>
                </div>
            </div>          
        </div>                                
    </div>
</div>
<!-- fin tours relacionados  -->

  </div>
</div>
@endsection

@section('script')

@include('public.en.contact.contactScrip')

@endsection

