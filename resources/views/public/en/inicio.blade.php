@extends('public.en.layouts.master')

@section('content')
<div class="top-baner swiper-animate arrows" id="inicio">
            <div style="height:880px"  class="swiper-container main-slider" data-autoplay="5000" data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide active" data-val="0"> 
                      <div class="clip">
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/home_1/main_slide_1.jpg)">
                         </div>
                      </div>
                        <div class="vertical-align">
                          <div class="container" >
                            <div class="row">
                              <div class="col-md-12">
                                <div class="main-title vert-title">
                                  <div class="top-weather-info delay-1">
                                    <p>London</p>
                                      <img src="assets/public/img/weather_icon.png" alt="">
                                        <span>+30&deg;C</span>
                                  </div>
                                  <h1 class="color-white delay-1">amazing santorini<br> 7 days tour</h1>
                                    <p class="color-white-op delay-2">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo elementum.</p>
                                    <a href="#" class="c-button bg-aqua hv-transparent delay-2"><img src="assets/public/img/loc_icon.png" alt=""><span>view our tours</span></a>
                                 </div>
                               </div>
                              </div>
                            </div>
                         </div>
                    </div>
                    <div class="swiper-slide" data-val="1"> 
                      <div class="clip">
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/home_1/main_slide_1.jpg)">
                         </div>
                      </div>
                        <div class="vertical-align">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="main-title vert-title">
                                  <div class="top-weather-info delay-1">
                                    <p>London</p>
                                      <img src="assets/public/img/weather_icon.png" alt="">
                                        <span>+30&deg;C</span>
                                  </div>
                                  <h1 class="color-white delay-1">amazing santorini<br> 7 days tour</h1>
                                    <p class="color-white-op delay-2">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo elementum.</p>
                                    <a href="#" class="c-button bg-aqua delay-2"><img src="assets/public/img/loc_icon.png" alt=""><span>view our tours</span></a>
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
                        <h2>The Best Sea Tours</h2>
                          <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id tor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="radius-mask tour-block hover-aqua">
                      <div class="clip">
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/home_1/sea_tour_img_1.jpg)">
                         </div>
                      </div>
                      <div class="tour-layer delay-1"></div>
                      <div class="tour-caption">
                         <div class="vertical-align">
                            <h3 class="hover-it">JEWELS OF THE SOUTH BELMOND TRENES</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                              </div>
                            <h4>from <b>$860</b></h4>  
                         </div>
                         <div class="vertical-bottom">
                           <div class="fl">
                            <div class="tour-info">
                                <img src="assets/public/img/people_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                            </div>
                            <div class="tour-info">
                                <img src="assets/public/img/calendar_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
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
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/home_1/sea_tour_img_2.jpg)">
                         </div>
                      </div>
                      <div class="tour-layer delay-1"></div>
                      <div class="tour-caption">
                         <div class="vertical-align">
                            <h3 class="hover-it">MULTI ACTIVE PERU II - VINICUNCA</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                              </div>
                            <h4>from <b>$750</b></h4>  
                         </div>
                         <div class="vertical-bottom">
                           <div class="fl">
                            <div class="tour-info">
                                <img src="assets/public/img/people_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                            </div>
                            <div class="tour-info">
                                <img src="assets/public/img/calendar_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
                            </div>
                           </div>   
                            <a href="en/tour/multi-active-peru-ii-vinicunca" class="c-button bg-aqua hv-transparent b-50 fr"><img src="assets/public/img/flag_icon.png" alt=""><span>view more</span></a>
                         </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="radius-mask tour-block">
                      <div class="clip">
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/home_1/sea_tour_img_3.jpg)">
                         </div>
                      </div>
                      <div class="tour-layer delay-1"></div>
                      <div class="tour-caption">
                         <div class="vertical-align">
                            <h3 class="hover-it">RELAIS & CHATEAUX</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            <h4>from <b>$600</b></h4>  
                         </div>
                         <div class="vertical-bottom">
                           <div class="fl">
                            <div class="tour-info">
                                <img src="assets/public/img/people_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                            </div>
                            <div class="tour-info">
                                <img src="assets/public/img/calendar_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
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
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/home_1/sea_tour_img_4.jpg)">
                         </div>
                      </div>
                      <div class="tour-layer delay-1"></div>
                      <div class="tour-caption">
                         <div class="vertical-align">
                            <h3 class="hover-it">JEWELS OF PERU</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            <h4>from <b>$1050</b></h4>  
                         </div>
                         <div class="vertical-bottom">
                           <div class="fl">
                            <div class="tour-info">
                                <img src="img/people_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                            </div>
                            <div class="tour-info">
                                <img src="assets/public/img/calendar_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
                            </div>
                           </div>   
                            <a href="en/tour/jewels-of-peru" class="c-button bg-aqua hv-transparent b-50 fr"><img src="assets/public/img/flag_icon.png" alt=""><span>view more</span></a>
                         </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="radius-mask tour-block">
                      <div class="clip">
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/home_1/sea_tour_img_5.jpg)">
                         </div>
                      </div>
                      <div class="tour-layer delay-1"></div>
                      <div class="tour-caption">
                         <div class="vertical-align">
                            <h3 class="hover-it">THROUGH THE FLAVORS OF PERU</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            <h4>from <b>$500</b></h4>  
                         </div>
                         <div class="vertical-bottom">
                           <div class="fl">
                            <div class="tour-info">
                                <img src="assets/public/img/people_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                            </div>
                            <div class="tour-info">
                                <img src="assets/public/img/calendar_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
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
                         <div class="bg bg-bg-chrome act" style="background-image:url(assets/public/img/home_1/sea_tour_img_6.jpg)">
                         </div>
                      </div>
                      <div class="tour-layer delay-1"></div>
                      <div class="tour-caption">
                         <div class="vertical-align">
                            <h3 class="hover-it">crete</h3>
                              <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            <h4>from <b>$700</b></h4>  
                         </div>
                         <div class="vertical-bottom">
                           <div class="fl">
                            <div class="tour-info">
                                <img src="assets/public/img/people_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                            </div>
                            <div class="tour-info">
                                <img src="assets/public/img/calendar_icon.png" alt="">
                                  <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
                            </div>
                           </div>   
                            <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="assets/public/img/flag_icon.png" alt=""><span>view more</span></a>
                         </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- banner -->
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
<!-- fin banner -->

<!-- galerias -->
<div class="main-wraper">
    <div class="container" id="galeria">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h4 class="subtitle color-dark-2-light">our gallery</h4>
                    <h2>why we are the best</h2>
                    <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id tor.</p>
                </div>
            </div>
        </div>
        <div class="isotope-container row row10">
            <div class="grid-sizer col-mob-12 col-xs-6 col-sm-3"></div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-6">
                <a class="black-hover" href="detail.html">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_1.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
                        <h4 class="color-white"><b>tours in monaco</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
                <a class="black-hover" href="detail.html">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_2.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
                        <h4 class="color-white"><b>tours in monaco</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
                <a class="black-hover" href="detail.html">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_3.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
                        <h4 class="color-white"><b>tours in monaco</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
                <a class="black-hover" href="detail.html">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_4.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
                        <h4 class="color-white"><b>tours in monaco</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
                <a class="black-hover" href="detail.html">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_5.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
                        <h4 class="color-white"><b>tours in monaco</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-6">
                <a class="black-hover" href="detail.html">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_6.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
                        <h4 class="color-white"><b>tours in monaco</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-6">
                <a class="black-hover" href="detail.html">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_7.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
                        <h4 class="color-white"><b>tours in monaco</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
                <a class="black-hover" href="detail.html">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_8.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
                        <h4 class="color-white"><b>tours in monaco</b></h4>
                    </div>
                </a>
            </div>
            <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
                <a class="black-hover" href="detail.html">
                    <img class="img-full img-responsive" src="assets/public/img/home_7/gal_9.jpg" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div class="vertical-align">
                        <div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
                        <h4 class="color-white"><b>tours in monaco</b></h4>
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
                    <h4 class="subtitle color-dark-2-light">testimonials</h4>
                    <h2>what our clients say</h2>
                    <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id tor.</p>
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
                                    <div class="tour-info">
                                        <img src="img/calendar_icon.png" alt="">
                                          <span class="font-style-2 color-white">July<b> 19th</b> to July<b> 26th</b></span>
                                    </div>
                                    <h3 class="color-white underline">inna, david lunoe</h3>
                                    <p class="f-14 color-white">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                    <img class="sl-img" src="assets/publicimg/home_7/sl_1.jpg" alt="">
                                    <img class="sl-img" src="assets/publicimg/home_7/sl_2.jpg" alt="">
                                    <img class="sl-img" src="assets/publicimg/home_7/sl_3.jpg" alt="">
                                </div>                          
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-val="1">
                    <div class="sl-bg">
                        <img class="center-image" src="assets/publicimg/home_7/testimonals.jpg" alt="">
                    </div>              
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                                <div class="sl-testimonals">
                                    <div class="tour-info">
                                        <img src="assets/publicimg/calendar_icon.png" alt="">
                                          <span class="font-style-2 color-white">July<b> 19th</b> to July<b> 26th</b></span>
                                    </div>
                                    <h3 class="color-white underline">inna, david lunoe</h3>
                                    <p class="f-14 color-white">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                    <img class="sl-img" src="assets/public/img/home_7/sl_1.jpg" alt="">
                                    <img class="sl-img" src="assets/public/img/home_7/sl_2.jpg" alt="">
                                    <img class="sl-img" src="assets/public/img/home_7/sl_3.jpg" alt="">
                                </div>                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="pagination pagination-hidden poin-style-1"></div>
            <div class="arrow-wrapp arr-s-4">
                <div class="cont-1170">
                    <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
                    <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
                </div>
            </div>          
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
                        <h4 class="subtitle color-blue-2 underline">contact</h4>
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
                    <h4 class="subtitle color-dark-2-light">our partners</h4>
                    <h2>Our Inveastors Relations</h2>
                    <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id tor.</p>
                </div>
            </div>
        </div>                      
    </div>
    <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="5" data-add-slides="6">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="partner-entry">
                    <a href="#"><img class="img-responsive" src="assets/public//img/home_7/partner_1.png" alt=""></a>
                </div>
            </div>
            <div class="swiper-slide text-center">
                <div class="partner-entry">
                    <a href="#"><img class="img-responsive" src="assets/public/img/home_7/partner_2.png" alt=""></a>
                </div>          
            </div>
            <div class="swiper-slide text-center">
                <div class="partner-entry">
                    <a href="#"><img class="img-responsive" src="assets/public/img/home_7/partner_3.png" alt=""></a>
                </div>          
            </div>
            <div class="swiper-slide text-center">
                <div class="partner-entry">
                    <a href="#"><img class="img-responsive" src="assets/public/img/home_7/partner_4.png" alt=""></a>
                </div>          
            </div>
            <div class="swiper-slide text-center">
                <div class="partner-entry">
                    <a href="#"><img class="img-responsive" src="assets/public/img/home_7/partner_5.png" alt=""></a>
                </div>          
            </div>
            <div class="swiper-slide text-center">
                <div class="partner-entry">
                    <a href="#"><img class="img-responsive" src="assets/public/img/home_7/partner_6.png" alt=""></a>
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