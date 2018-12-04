@extends('public.en.layouts.master')

@section('content')
<div class="top-baner swiper-animate arrows" id="inicio">
            <div style="height:880px"  class="swiper-container main-slider" data-autoplay="5000" data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide active" data-val="0"> 
                      <div class="clip">
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/detail/main_slide_1.jpg)">
                         </div>
                      </div>
                        <div class="vertical-align">
                          <div class="container" >
                            <div class="row">
                              <div class="col-md-12">
                                <div class="main-title vert-title">
                                  
                                  <h1 class="color-white delay-1" style="text-shadow: black 0.1em 0.1em 0.2em ">amazing santorini<br> 7 days tour</h1>
                                                                        
                                 </div>
                               </div>
                              </div>
                            </div>
                         </div>
                    </div>
                    <div class="swiper-slide" data-val="1"> 
                      <div class="clip">
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/detail/main_slide_2.jpg)">
                         </div>
                      </div>
                        <div class="vertical-align">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="main-title vert-title">
                                  <h1 class="color-white delay-1" style="text-shadow: black 0.1em 0.1em 0.2em ">amazing santorini<br> 7 days tour</h1>
                                </div>
                               </div>
                              </div>
                            </div>
                         </div>
                    </div>
                </div>    
                  <div class="pagination pagination-hidden poin-style-1"></div>
            </div>
                  <div class="arrow-wrapp m-200">
                    <div class="cont-1170">
                        <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
                        <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
                    </div>
                  </div>
                
    </div> 
    <!-- tours de lujo  -->
    <div class="main-wraper padd-90">
        <div class="container" id="tours">
            <div class="row">
                <div class="col-md-12">
                    <div class="second-title">
                        <h2>The Best Luxury Tours</h2>
                          <p class="color-grey"> Discover with us the most impressive destinations in Peru, visiting their archaeological sites and sharing their customs.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="radius-mask tour-block hover-aqua">
                      <div class="clip">
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/tour/jewels/1.jpg)">
                         </div>
                      </div>
                      <div class="tour-layer delay-1"></div>
                      <div class="tour-caption">
                         <div class="vertical-align">
                            <h3 class="hover-it" style="text-shadow: black 0.1em 0.1em 0.2em">JEWELS OF THE SOUTH </h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                              </div>
                            <!--<h4> <b></b></h4>  -->
                         </div>
                         <div class="vertical-bottom">
                           <div class="fl">
                            <!--
                            <div class="tour-info">
                                <img src="assets/public/img/people_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                            </div>-->
                            <div class="tour-info">
                                <img src="assets/public/img/calendar_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white"> 15 Days </strong> / <strong class="color-white"> 14 Nights</strong></span>
                            </div>
                           </div>   
                            <a href="en/tour/jewels-of-the-south-belmond-trenes" class="c-button b-50 bg-aqua hv-transparent fr"><img src="assets/public/img/flag_icon.png" alt=""><span>view more</span></a>
                         </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="radius-mask tour-block">
                      <div class="clip">
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/tour/hiking-through-the-andes-mountains/1.jpg)">
                         </div>
                      </div>
                      <div class="tour-layer delay-1"></div>
                      <div class="tour-caption">
                         <div class="vertical-align">
                            <h3 class="hover-it" style="text-shadow: black 0.1em 0.1em 0.2em">HIKING THROUGH THE ANDES MOUNTAINS</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                              </div>
                            <!--<h4>from <b>$700</b></h4>  -->
                         </div>
                         <div class="vertical-bottom">
                           <div class="fl"><!--
                            <div class="tour-info">
                                <img src="assets/public/img/people_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                            </div>-->
                            <div class="tour-info">
                                <img src="assets/public/img/calendar_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white"> 15 Days </strong> / <strong class="color-white"> 14 Nights</strong></span>
                            </div>
                           </div>   
                            <a href="en/tour/hiking-through-the-andes-mountains" class="c-button bg-aqua hv-transparent b-50 fr"><img src="assets/public/img/flag_icon.png" alt=""><span>view more</span></a>
                         </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="radius-mask tour-block">
                      <div class="clip">
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/tour/relais-chateaux/1.jpg)">
                         </div>
                      </div>
                      <div class="tour-layer delay-1"></div>
                      <div class="tour-caption">
                         <div class="vertical-align">
                            <h3 class="hover-it" style="text-shadow: black 0.1em 0.1em 0.2em">A RELAIS & CHATEAUX EXPERIENCE IN PERU</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            <!--<h4>from <b>$700</b></h4>  --> 
                         </div>
                         <div class="vertical-bottom">
                           <div class="fl"><!--
                            <div class="tour-info">
                                <img src="assets/public/img/people_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                            </div>-->
                            <div class="tour-info">
                                <img src="assets/public/img/calendar_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white"> 14 Days </strong> / <strong class="color-white"> 13 Nights</strong></span>
                            </div>
                           </div>   
                            <a href="en/tour/relais-chateaux" class="c-button bg-aqua hv-transparent b-50 fr"><img src="assets/public/img/flag_icon.png" alt=""><span>view more</span></a>
                         </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="radius-mask tour-block">
                      <div class="clip">
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/tour/jewels-of-cusco/1.jpg)">
                         </div>
                      </div>
                      <div class="tour-layer delay-1"></div>
                      <div class="tour-caption">
                         <div class="vertical-align">
                            <h3 class="hover-it" style="text-shadow: black 0.1em 0.1em 0.2em">JEWELS OF CUSCO</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            <!--<h4>from <b>$700</b></h4>  --> 
                         </div>
                         <div class="vertical-bottom">
                           <div class="fl"><!--
                            <div class="tour-info">
                                <img src="assets/public/img/people_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                            </div>-->
                            <div class="tour-info">
                                <img src="assets/public/img/calendar_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white"> 10 Days </strong> / <strong class="color-white"> 9 Nights</strong></span>
                            </div>
                           </div>   
                            <a href="en/tour/jewels-of-cusco" class="c-button bg-aqua hv-transparent b-50 fr"><img src="assets/public/img/flag_icon.png" alt=""><span>view more</span></a>
                         </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="radius-mask tour-block">
                      <div class="clip">
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/tour/through-the-flavors-of-peru/1.jpg)">
                         </div>
                      </div>
                      <div class="tour-layer delay-1"></div>
                      <div class="tour-caption">
                         <div class="vertical-align">
                            <h3 class="hover-it" style="text-shadow: black 0.1em 0.1em 0.2em">THROUGH THE FLAVORS OF PERU</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            <!--<h4>from <b>$700</b></h4>  -->
                         </div>
                         <div class="vertical-bottom">
                           <div class="fl"><!--
                            <div class="tour-info">
                                <img src="assets/public/img/people_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                            </div>-->
                            <div class="tour-info">
                                <img src="assets/public/img/calendar_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white"> 12 Days </strong> / <strong class="color-white"> 11 Nights</strong></span>
                            </div>
                           </div>   
                            <a href="en/tour/through-the-flavors-of-peru" class="c-button bg-aqua hv-transparent b-50 fr"><img src="assets/public/img/flag_icon.png" alt=""><span>view more</span></a>
                         </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="radius-mask tour-block">
                      <div class="clip">
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/tour/wonders-of-peru-in-family/1.jpg)">
                         </div>
                      </div>
                      <div class="tour-layer delay-1"></div>
                      <div class="tour-caption">
                         <div class="vertical-align">
                            <h3 class="hover-it" style="text-shadow: black 0.1em 0.1em 0.2em">WONDERS OF PERU IN FAMILY</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            <!--<h4>from <b>$700</b></h4>  -->
                         </div>
                         <div class="vertical-bottom">
                           <div class="fl"><!--
                            <div class="tour-info">
                                <img src="assets/public/img/people_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                            </div>-->
                            <div class="tour-info">
                                <img src="assets/public/img/calendar_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white"> 12 Days </strong> / <strong class="color-white"> 11 Nights</strong></span>
                            </div>
                           </div>   
                            <a href="en/tour/wonders-of-peru-in-family" class="c-button bg-aqua hv-transparent b-50 fr"><img src="assets/public/img/flag_icon.png" alt=""><span>view more</span></a>
                         </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- banner --
<div class="main-wraper">
          <div class="clip">
             <div class="bg bg-bg-chrome" style="background-image:url(assets/public/img/home_1/tour_slider_bg.jpg)">
             </div>
          </div>
          <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-slides-per-view="1" id="tour-slide">
             <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                          <div class="slider-tour padd-90-90">
                            <h3>from $960</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                              </div>
                              <h2>Maldives Vacation Packages</h2> 
                               <h5>july <b>19th</b> to july <b>26th</b></h5>
                          </div>    
                        </div>
                     </div>
                  </div> 
                </div>
                <div class="swiper-slide">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                          <div class="slider-tour padd-94-94">
                            <h3>from $960</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                              </div>
                              <h2>Maldives Vacation Packages</h2> 
                               <h5>july <b>19th</b> to july <b>26th</b></h5>
                          </div>    
                        </div>
                     </div>
                  </div> 
                </div>
                <div class="swiper-slide">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                          <div class="slider-tour padd-94-94">
                            <h3>from $960</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                              </div>
                              <h2>Maldives Vacation Packages</h2> 
                               <h5>july <b>19th</b> to july <b>26th</b></h5>
                          </div>    
                        </div>
                     </div>
                  </div> 
                </div>
                <div class="swiper-slide">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                          <div class="slider-tour padd-94-94">
                            <h3>from $960</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                              </div>
                              <h2>Maldives Vacation Packages</h2> 
                               <h5>july <b>19th</b> to july <b>26th</b></h5>
                          </div>    
                        </div>
                     </div>
                  </div> 
                </div>
             </div>
             <div class="pagination poin-style-1"></div>
          </div>
    </div>
-- fin banner -->

<!-- galerias -->
<div class="main-wraper">
    <div class="container" id="galeria"  style="
    margin-top: -119px;">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h4 class="subtitle color-dark-2-light">   </h4>
                    <h2> our gallery </h2>
                    <p class="color-grey">     </p>
                </div>
            </div>
        </div>
        <div class="isotope-container row row10">
            <div class="grid-sizer col-mob-12 col-xs-6 col-sm-3"></div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-6">
                <a class="black-hover" >
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_1.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white"> <strong> </strong></div>
                        <h4 class="color-white"><b> Wonders of peru in family</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
                <a class="black-hover" href="/en/tour/jewels-of-cusco">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_2.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white"> <strong> Jewels of Cusco </strong></div>
                        <h4 class="color-white"><b>Maras</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
                <a class="black-hover" href="/en/tour/jewels-of-the-south-belmond-trenes">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_3.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white"> <strong> Jewels of the south </strong> </div>
                        <h4 class="color-white"><b>Sacsayhuaman</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
                <a class="black-hover" href="/en/tour/jewels-of-cusco">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_4.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white"><strong> Jewels of Cusco</strong> </div>
                        <h4 class="color-white"><b>Soy y Luna Hotel</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
                <a class="black-hover" href="/en/tour/relais-chateaux">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_5.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white">  <strong>Relais & Chateaux </strong></div>
                        <h4 class="color-white"><b>Boat House</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-6">
                <a class="black-hover" href="/en/tour/wonders-of-peru-in-family">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_6.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white"> <strong> Wonders of Peru in family </strong></div>
                        <h4 class="color-white"><b>llama</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-6">
                <a class="black-hover" href="/en/tour/hiking-through-the-andes-mountains">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_7.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white">  <strong> Hiking through the andes mountains to Machupicchu</strong>  </div>
                        <h4 class="color-white"><b> Tambo del Inka </b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
                <a class="black-hover" href="/en/tour/jewels-of-cusco">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_8.jpg" alt="">
                    <div class="tour-layer delay-1"> </div>
                    <div class="vertical-align">
                        <div class="date color-white">  <strong>Jewels of Cusco </strong>  </div>
                        <h4 class="color-white"><b>Moray</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
                <a class="black-hover" href="/en/tour/wonders-of-peru-in-family">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_9.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white">  <strong> Wonders of Peru in family</strong> </div>
                        <h4 class="color-white"><b>Lima</b></h4>
                    </div>
                </a>
            </div>                                  
        </div>
    </div>
</div>

<!-- fin galeria -->
<!-- nostros -->
 <!--nosotros-->
   <div class="main-wraper">
    <div class="container" id="nosotros">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h4 class="subtitle color-dark-2-light">About Us</h4>
                    <h2>why we are the best</h2>
                    <p class="color-grey"> </p>
                </div>
            </div>
        </div>              
    </div>
    <div class="arrows bg-bluejeans">
        <div class="swiper-container main-slider-7" data-autoplay="0" data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1">
            <div class="swiper-wrapper">
                <div class="swiper-slide active" data-val="0">
                    <div class="sl-bg">
                        <img class="center-image" src="assets/public/img/home_7/testimonals.jpg" alt="">
                    </div>              
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                                <div class="sl-testimonals">
                                    
                                    <h3 class="color-white underline">Tierras de los Andes Team</h3>
                                    <p class="f-14 color-white">Tierras de los Andes is a tour operator with more than 20 years of experience in customer service, offering trips to discover Peru and South America, with high quality services that seek to meet the expectations of our visitors.
                                    Experience and enthusiasm to create and offer the most original trips to Peru. </p>
                                    
                                </div>                          
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>    
            <div class="pagination pagination-hidden poin-style-1"></div>
                     
        </div>
    </div>      
</div> 
<!-- fin nosotros -->
  <!--contacto-->   
<div class="main-wraper bg-grey-2 padd-90">
    <div class="container" id="contacto">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-blue-2 underline" style="color: #402A01">contact</h4>
                        <h2>get in touch</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @include('public.en.contact.contactForm')
            </div>
    </div>
</div>   

<div class="main-wraper padd-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h4 class="subtitle color-dark-2-light">partners</h4>
                    <h2>Our Inveastors Relations</h2>
                </div>
            </div>
        </div>                      
    </div>
    <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="5" data-add-slides="6">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="partner-entry">
                    <a href="http://www.illapa.com/" target="_blank"><img class="img-responsive" src="assets/public/img/socios/illapaA.jpg" alt=""></a>
                </div>
            </div>
            <div class="swiper-slide text-center">
                <div class="partner-entry">
                    <a href="https://www.terandes.com/fr" target="_blank" ><img class="img-responsive"  style="height: 60px;" src="assets/public/img/socios/logo.png" alt=""></a>
                </div>          
            </div>
            <div class="swiper-slide text-center">
                <div class="partner-entry">
                    <a href="https://www.turismorural.com.pe/es" target="_blank"  ><img class="img-responsive"  style="height: 60px;" src="assets/public/img/socios/rural.png" alt=""></a>
                </div>          
            </div>
            <div class="swiper-slide text-center">
                <div class="partner-entry">
                    <a href="http://illapatransportes.com/" target="_blank" ><img class="img-responsive"  style="height: 60px;" src="assets/public/img/socios/illapaT.jpg" alt=""></a>
                </div>          
            </div>
            <div class="swiper-slide text-center">
                <div class="partner-entry">
                    <a href="https://www.patronatomachupicchu.org/"   target="_blank" ><img class="img-responsive"  style="height: 60px;" src="assets/public/img/socios/patronato.png" alt=""></a>
                </div>          
            </div>
            <div class="swiper-slide text-center">
                <div class="partner-entry">
                    <a href="http://illapatransportes.com/"  target="_blank"  ><img class="img-responsive"  style="height: 60px;" src="assets/public/img/socios/illapaT.png" alt=""></a>
                </div>          
            </div>                     
        </div>
        <div class="pagination pagination-hidden"></div>
    </div>  
</div> 
@endsection

@section('script')

@include('public.en.contact.contactScrip')

@endsection