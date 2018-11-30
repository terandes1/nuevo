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
                    <h2 class="color-white" style="text-shadow: black 0.1em 0.1em 0.2em ">Jewels of Cusco</h2>
                    <div class="col-xs-12 col-md-6 col-md-offset-4">
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
                    <h3 style="padding-bottom: 15px">DESCRIPTION </h3>
                    <p style="text-align: justify;">
                        Jewels of Cusco offers you a set of must-see destinations, Lima, Cusco, the Sacred Valley and Machu Picchu in ten days, staying at the best accommodations with a unique sense of style and distinction. Discover the city of Kings, Lima, accompanied by our guide who will give you insights about the capital, moving from its fascinating past towards the present. Discover the most beautiful sites of the Sacred Valley. Enjoy the comfort of a train ride to Machu Picchu, hike along a portion of the Inca trail and marvel your senses with the amazing natural scenery that will surround you and once you reach the lost citadel, explore and admire it with plenty of time. In Cusco, stroll around its colonial streets combined with incredible Inca constructions and let the city fascinate you. 
                        This program can be customized according to your interests, needs and travel style. Please, feel free to contact us and personalize your holiday. 
                    </p>
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
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-cusco/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-cusco/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-cusco/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-cusco/4.jpg" alt="">     
                                </div>
                                <div class="swiper-slide" data-val="4">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-cusco/5.jpg" alt="">            
                                </div>
                                <div class="swiper-slide" data-val="5">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-cusco/6.jpg" alt="">            
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
                                   <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-cusco/1_1.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                   <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-cusco/2_2.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                   <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-cusco/3_3.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                   <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-cusco/4_4.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="4">
                                   <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-cusco/5_5.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="5">
                                   <img class="img-responsive img-full" src="/assets/public/img/tour/jewels-of-cusco/6_6.jpg" alt="">
                                </div>
                            </div>
                            <div class="pagination hidden"></div>
                        </div>
                    </div>                           
                </div>   
                <div class="detail-content-block">
                    <h3 style="padding: 15px">Itinerary </h3>
                    <div class="simple-tab color-1 tab-wrapper">
                        <div class="tabs-content clearfix">
                            <div class="tab-info active">
                                <div class="detail-content-block">
                                    <div class="accordion style-2">
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 1. – Arrival in Lima.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">Welcome to the land of the Incas.
                                                Your Peru luxury holiday is on the go. 
                                                As you go through arrivals at the airport in Lima, we will be waiting for you – just look for our representative who will be with a signboard with your name on it. We will take you to your hotel and assist with the check-in procedure. There is nothing better than a time to freshen up and relax to recover from the flight, so we will leave you to rest.
                                                Overnight in Lima.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 2. - Lima city highlights</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">Private Tour around Lima´s Best Highlights.
                                                After enjoying breakfast in your hotel, you will have the morning at leisure; you can either enjoy all the comforts of your hotel or explore the vibrant downtown of Miraflores.
                                                By noon, we will pick you up from your hotel to take you to Pueblo Libre neighborhood, home for the Larco Herrera Museum. On your arrival to this site, first, you will enjoy a delicious lunch right on the vine-covered terrace of the Museum’s café, after lunch, you are going start exploring the exhibit accompanied by your guide. This is a fascinating place houses the country’s largest and most representative collection of pre-Columbian artifacts (including extensive gold and silver collections, and a very special and peculiar collection of erotic ceramics), here you are going to have a unique open access to their exquisitely catalogued storage area; this museum is the perfect introduction to Peru’s multi-faceted cultural history. 
                                                We will continue the tour driving to the heart of Peru’s “City of Kings”. Here you are going to see the Plaza Mayor; the square shows beautiful examples of colonial and republican architecture in the surrounding houses. You will see the Government’s palace from the outside and you will visit the Cathedral of Lima. You will continue your tour heading to the Convent of San Francisco; this religious building is interesting because subterranean catacombs are one of the main attractions. We are going to finish the tour visiting the Casa Aliaga, which is the oldest western hemisphere’s mansion; this historic house is still inhabited and under the property of the 17th generation of the Aliaga family.
                                                At the end of the tour, we will take you back to your hotel; your guide will provide you some suggestions of places to see and dine within a walking distance from your hotel.
                                                Overnight in Lima.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 3. - Lima Cusco Sacred Valley.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">Flight to Cusco and transfer to the Sacred Valley.
                                                After breakfast in your hotel, we will take you to the airport for your morning flight to Cusco. As you start your flight, do not miss the stunning views of the landscapes, moving from the arid desert along the coast, towards the snow-capped mountains of the Andes.
                                                On your arrival, our representative will be waiting at the airport of Cusco to take you to the Sacred Valley, where you can easily acclimatize and adjust to the elevation change. 
                                                The Sacred valley is located just an hour away from Cusco, the Sacred Valley is simply another world: cattle, showing cows and sheep grazing by the roadside, old farming terraces on the hillside that nowadays are still in use and impossibly steep peaks rising in the distance. En route, we will stop the center of South American Camelids of Awanakancha and its Living Museum, here you can marvel and admire weavers at work, sharing the beauty of their textile tradition and there will be a unique opportunity to see and feed llamas, alpacas, vicuñas and other Andean camelids.
                                                After lunch, we will continue our way to the hotel where you will spend the rest of the day.
                                                Overnight Sacred Valley.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 4. - Pisac – Sarapampa Hacienda.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">We will arrive to Pisac where we will spend some time strolling around the local market that shows its colorful textiles, all kinds of dyes, cutlery, ceramics and its vast variety of fresh vegetables; it seems that this place holds something to please everyone.
                                                Our visit will continue towards the Inca site located just on top of the mountain that overlooks the town. We will visit its impressive constructions and enjoy the views of the surroundings.
                                                After our visit to Pisac, we will drive to a nice hacienda where we will have lunch and learn about the special white corn from the Sacred Valley. 
                                                In the afternoon, we will head to visit the Inkariy Museum, a fantastic place where we will immerse into the origins of the Peruvian culture. 
                                                Overnight in the Sacred Valley.
                                                </p>
                                            </div>
                                        </div>  
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 5. - Ollantaytambo & Chinchero.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify;color: black">Tour to the Inca site of Ollantaytambo and to the town of weavers of Chinchero.
                                                This morning, after breakfast, we will start our tour; first, we will drive to visit the Inca complex of Ollantaytambo.  it is a charming town characterized by its cobblestone streets and beautiful stone houses with big interior courtyards and the unusual trapezoidal doors that retain the traditional Inca urban planning. The streets in this town have water canals running down towards the farming lands and the river.
                                                The fortress is located on top of the mountain that overlooks the town; it has a religious area with an impressive stonework and in the lower part, there is a section of wide terraces.
                                                    Lunch at Wayra Restaurant.
                                                After lunch, we will head towards Chinchero, a town of Inca origin that is famous for the extraordinary beauty and quality of its textiles and for its fair where local people dress in traditional colorful outfits and travel down from their villages to trade their goods. Accompanied by your guide you will visit this picturesque town; here you will meet local weavers in their workshop; you will have a chance to see and share time learning the basics of traditional weaving. All the weavers of Chinchero area are proud of their textile tradition and they are working hard to keep the legacy alive, passing it to the young members of their communities. 
                                                Overnight Sacred Valley.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 6. - Short hike to Machu Picchu.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">Short Inca trail to the citadel of Machu Picchu. 
                                                This morning, we will transfer you to Ollantaytambo station to board the Vistadome train to the starting point of the short Inca Trail, Km 104 of the route to Machu Picchu.
                                                On our arrival, we will get ready to start the hike; we will go through the checkpoint and cross a bridge over the Urubamba River. We are going to start visiting the archaeological complex of Chachabamba, located not far away from the control point, then we will embark on an 8 km. ascending trail, which after about four hours will take us to the archaeological complex of Wiñaywayna. This is an impressive Inca complex made up of an agricultural center with numerous terraces, a religious sector and a urban sector. On the way up, we will have magnificent views of the Urubamba River valley and the Choquesuysuy archaeological complex located on the other side of the river; we will also see a beautiful waterfall located just a few minutes away from Wiñaywayna. We will continue our hike and climb to Intipunku or The Sun Gate. This will take an hour of hiking along a trail of flat stones on the edges of cliffs in the raincloud forest. Once we reach this point, we will have a fantastic view of the lost citadel of Machu Picchu. From Intipunku we will descend to Machu Picchu and then by bus to Aguas Calientes. 
                                                For the hike, we will have a box lunch and an assistant (Porter) to help us with the food and water supply.
                                                Overnight in Aguas Calientes.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 7. - Machu Picchu Cusco.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">Second visit to the Inca citadel.
                                                This morning, accompanied by your guide, you will visit the incredible lost citadel of Machu Picchu. You will explore this fascinating Inca site from side to side, visiting its different sectors, enjoying astonishing views of the site and the surrounding scenery.
                                                Buffet lunch at Sanctuary Lodge Hotel included.
                                                Afternoon train return to Poroy. (Subject to availability, alternative station may be Ollantaytambo). On your arrival, our representative will be waiting for you at the train station to transfer you to your hotel.
                                                Overnight in Cusco.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 8.-Cusco city highlights.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">Tour of the city.
                                                This morning accompanied with your guide, you will explore the colonial streets and the squares of Cusco. You will immerse in the fascinating history of the Inca Capital. The first spot to visit will be the Santo Domingo church, a colonial temple that lays on top of the ancient Inca Temple of the Sun (Koricancha); then you will continue the tour heading towards the Cathedral of the city, located right in the main square – this is one of the most impressive exhibits of colonial art.
                                                Continue walking through the beautiful streets of the traditional neighborhood of San Blas, which is well known for being the house of the most representative Masters of Arts in Cusco city, San Blas is considered the cradle of traditional Cusquenian art.  Then you are going to descent towards the hotel, en route you will pass by the famous 12-angled stone, whose image has been taken in many TV commercials.
                                                After the tour, your guide will suggest you some restaurants where you can enjoy the flavor of the local cuisine.
                                                The rest of the day will be at leisure, you can opt to continue exploring the city on your own or if you prefer, you can relax in your hotel.
                                                Overnight in Cusco.
                                                </p>
                                            </div>
                                        </div> 
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 9. - Cusco Southern Valley</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">Tour to Tipon – Pikillacta and Andahuaylillas.
                                                This morning, after breakfast we will pick you up to start out tour towards the Southern valley, first, we will visit Tipon; an important archaeological site that holds numerous impressive terraces that are still being cultivated today. The most interesting part of the site is the irrigation system that still serves agricultural lands in the nearby areas. It consists of carved stone channels, precisely calculated and sometimes with almost vertical falls that all together constitute a hydraulic engineering masterpiece.
                                                We will continue our visit heading to Pikillacta. The constructions of this pre-Inca town are composed of more than 700 structures including 200 departments (Kanchas), 504 storages (qolqas) and different buildings that probably gave shelter to a population of around ten thousand inhabitants. The city was constructed in a harmonious and symmetric way, in blocks with straight streets that embraced many sectors such as the administrative, ceremonial, urban, defensive and a road system. 
                                                The inhabitants constructed the walls with a combination of mud and stone, all of them wide at the bottom and narrow at the upper part. Room walls and floors were also made with a kind of thick plaster showing the appearance of a white city.
                                                Lunch in a Local restaurant.
                                                Our last spot to visit is Andahuaylillas, considered as one of the most important attractions, here the church of San Pedro de Andahuaylillas is known and called the “Sistine Chapel of the Americas” due to the impressive quality of its art pieces and frescoes that decorate the walls. Built at the beginning of XVII century, the interior of the temple is decorated with murals of Luis Riaño (XVII, the paintings represent the path to glory and the path to hell. Besides, this church holds incredible treasures, like an impressive old organ, numerous canvases of the Academy of Cusco, silver work and baroque altars.
                                                Afternoon return to your hotel.
                                                Overnight in Cusco.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 10. - Cusco – Lima</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">Flight to Lima.
                                                At the scheduled time, we will meet you in your hotel for your transfer to the airport.  Flight to Lima.
                                                </p>
                                            </div>
                                        </div>         
                                    </div>                      
                                </div> 
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
                           <p class="color-grey-9">price: <span class="color-white">$500 / person</span></p>
                            <p class="color-grey-9">location: <span class="color-white">Cusco, Peru</span></p>
                            <p class="color-grey-9">days: <span class="color-white">10D / 9N</span></p>
                        </div>
                        <div class="details-btn">
                          <a href="#contact" class="c-button b-40 bg-tr-1 hv-white"><span>book now</span></a>
                        </div>
                    </div>
                <!-- TOURS POPULARES-->    
                    <div class="popular-tours bg-grey-2">
                        <h4 class="color-dark-2">popular tours</h4>
                        <div class="hotel-small style-2 clearfix">
                            <a class="hotel-img black-hover" href="/en/tour/jewels-of-cusco">
                            <img class="img-responsive radius-3" src="/assets/public/img/tour/jewels-of-cusco/1_1.jpg" alt="">
                            <div class="tour-layer delay-1"></div>                    
                            </a>
                            <div class="hotel-desc">
                                <h5><span class="color-dark-2">from <strong>$273</strong></span></h5>
                                <h4>jewels of cusco</h4>
                                <div class="hotel-loc">Discover the most beautiful sites, , explore and admire it with plenty of time</div>
                            </div>
                        </div>
                        <div class="hotel-small style-2 clearfix">
                            <a class="hotel-img black-hover" href="/en/tour/jewels-of-the-south-belmond-trenes">
                            <img class="img-responsive radius-3" src="/assets/public/img/tour/jewels/1_1.jpg" alt="">
                            <div class="tour-layer delay-1"></div>                    
                            </a>
                            <div class="hotel-desc">
                                <h5><span class="color-dark-2">from <strong>$273</strong></span></h5>
                                <h4>Jewels of the South</h4>
                                <div class="hotel-loc">Jewels of the South offers you a set of must-see destinations, Lima, Cusco, the Sacred Valley, Machu Picchu in ten days</div>
                            </div>
                        </div>
                        <div class="hotel-small style-2 clearfix">
                            <a class="hotel-img black-hover" href="/en/tour/relais-chateaux">
                            <img class="img-responsive radius-3" src="/assets/public/img/tour/relais-chateaux/1_1.jpg" alt="">
                            <div class="tour-layer delay-1"></div>                    
                            </a>

                            <div class="hotel-desc">
                                <h5><span class="color-dark-2">from <strong>$273</strong></span></h5>
                                <h4>Relais & Chateaux</h4>
                                <div class="hotel-loc">Peru is a fantastic travel program to enjoy in fourteen days the best of the country</div>
                            </div>
                        </div>  
                        <div class="hotel-small style-2 clearfix">
                            <a class="hotel-img black-hover" href="/en/tour/through-the-flavors-of-peru">
                            <img class="img-responsive radius-3" src="/assets/public/img/tour/through-the-flavors-of-peru/1_1.jpg" alt="">
                            <div class="tour-layer delay-1"></div>                    
                            </a>
                            <div class="hotel-desc">
                                <h5><span class="color-dark-2">from <strong>$273</strong></span></h5>
                                <h4>through the flavors of peru</h4>
                                <div class="hotel-loc">Enjoy twelve days exploring a unique selection of places for those who would like to discover the flavors of the Peruvian cuisine</div>
                            </div>
                        </div>                    
                    </div>
                <!-- FIN TOURS POPULARES-->
                </div>            
            </div>
        </div>
        
        <!-- CONTACTO -->  
        <div id="contact" class="row" style="margin-top: -100px;">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-blue-2 underline">contact</h4>
                        <h2>get in touch</h2>
                    </div>
                </div>
            </div>
            @include('public.en.contact.contactForm')
        </div>
        <!--FIN CONTACTO-->

        <!-- TOURS RELACIONADOS -->
        <div class="may-interested padd-90">
            <div class="row">
                <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
                    <div class="hotel-item">
                        <div class="radius-top">
                            <img src="/assets/public/img/tour/jewels-of-cusco/1.jpg" alt="">
                            <div class="price price-s-1">$273</div>
                        </div>
                        <div class="title clearfix">
                            <h4><b>JEWELS OF CUSCO</b></h4>
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
                            <p class="f-14" style="text-align:justify;">Jewels of Cusco offers you a set of must-see destinations. Discover the most beautiful sites, , explore and admire it with plenty of time</p>
                            <a href="/en/tour/jewels-of-cusco" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
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
                            <h4><b>HIKING THROUGH THE ANDES MOUNTAINS</b></h4>
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
                            <p class="f-14" style="text-align:justify;">Enjoy fifteen days exploring a unique combination of natural settings for those who love adventure. </p>
                            <a href="/en/tour/multi-active-peru-ii-vinicunca" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
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
                            <h4><b>A RELAIS & CHATEAUX EXPERIENCE IN PERU</b></h4>
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
                            <p class="f-14" style="text-align:justify;">Peru is a fantastic travel program to enjoy in fourteen days the best of the country</p>
                            <a href="/en/tour/relais-chateaux" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
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
                            <p class="f-14" style="text-align:justify;">Enjoy exploring a unique selection of places for those who would like to discover the flavors of the Peruvian cuisine</p>
                            <a href="/en/tour/through-the-flavors-of-peru" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                        </div>
                    </div>          
                </div>                                
            </div>
        </div>
        <!-- FIN DE TOURS RELACIONADOS  -->
    </div>
</div>
@endsection

@section('script')

@include('public.en.contact.contactScrip')

@endsection

