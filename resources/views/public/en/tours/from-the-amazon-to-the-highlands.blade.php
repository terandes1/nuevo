@extends('public.en.layouts.master')

@section('content')
<div class="inner-banner style-6">
    <img class="center-image" src="/assets/public/img/detail/bg_4.jpg" alt="">
    <div class="vertical-align">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <ul class="banner-breadcrumb color-white clearfix">
                       <li><a class="link-blue-2" href="#">home</a> /</li>
                       <li><a class="link-blue-2" href="#">flights</a> /</li>
                       <li><span>detail</span></li>
                    </ul>
                    <h2 class="color-white">flights for you</h2>
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
                    <h2 class="detail-title color-dark-2">FROM THE AMAZON TO THE HIGHLANDS</h2>
                    <div class="detail-rate rate-wrap clearfix">
                        <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        </div>
                    <!--<i>485 Rewies</i> -->
                   </div>
                   <p style="text-align: justify;">
                    From the Amazon to the Highlands is an ideal travel program to enjoy twelve days exploring a unique combination of natural and cultural settings, moving from the coast to the highlands and the Amazon Jungle. Discover the most beautiful places in Lima, Iquitos, Cusco, the Sacred Valley and Machu Picchu, staying at the best accommodations with a unique sense of style and distinction. Discover the city of Kings, Lima, accompanied by our guide who will give you insights about the capital and its secrets, moving from its fascinating past towards the present. Fly to Iquitos and its incredible flora and fauna. Fly through the Andes to Cusco and discover the most beautiful sites of the Sacred Valley. Enjoy the comfort of a train ride to Machu Picchu, marvel your senses with the amazing natural scenery that will surround you and once you reach the lost citadel, explore and admire it with plenty of time. In Cusco, stroll around its colonial streets combined with incredible Inca constructions and let the city fascinate you. 
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
                <div class="detail-content color-1">
                    <div class="detail-top slider-wth-thumbs style-1 arrows">
                        <div class="swiper-container thumbnails-preview" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide active" data-val="0">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/from-the-amazon-to-the-highlands/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/from-the-amazon-to-the-highlands/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/from-the-amazon-to-the-highlands/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/from-the-amazon-to-the-highlands/4.jpg" alt="">     
                                </div>
                                <div class="swiper-slide" data-val="4">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/from-the-amazon-to-the-highlands/5.jpg" alt="">            
                                </div>
                                <div class="swiper-slide" data-val="5">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/from-the-amazon-to-the-highlands/6.jpg" alt="">            
                                </div>
                            </div>
                            <div class="pagination pagination-hidden poin-style-1"></div>
                            <div class="arrow-wrapp arr-s-3">
                                <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
                                <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
                            </div>
                        </div>
                        <div class="swiper-container thumbnails" data-autoplay="0" data-loop="0" data-speed="500" data-slides-per-view="responsive" data-xs-slides="3" data-sm-slides="5" data-md-slides="5" data-lg-slides="5" 
                  data-add-slides="5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide current active" data-val="0">
                                  <img class="img-responsive img-full" src="/assets/public/img/tour/from-the-amazon-to-the-highlands/1_1.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                  <img class="img-responsive img-full" src="/assets/public/img/tour/from-the-amazon-to-the-highlands/2_2.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                  <img class="img-responsive img-full" src="/assets/public/img/tour/from-the-amazon-to-the-highlands/3_3.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                  <img class="img-responsive img-full" src="/assets/public/img/tour/from-the-amazon-to-the-highlands/4_4.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="4">
                                  <img class="img-responsive img-full" src="/assets/public/img/tour/from-the-amazon-to-the-highlands/5_5.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="5">
                                  <img class="img-responsive img-full" src="/assets/public/img/tour/from-the-amazon-to-the-highlands/6_6.jpg" alt="">
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
                                    Itinerary
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
                                            <div class="acc-title"><span class="acc-icon"></span>Day 1. – Arrival in Lima</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Welcome to the land of the Incas.
                                                Your Peru luxury holiday is on the go. As you go through arrivals at the airport in Lima, we will be waiting for you – just look for our sign with your name on it. We will take you to your luxury hotel and assist with the check-in procedure. There is nothing better than a time to freshen up and relax to recover from the long flight, so we will leave you to rest.
                                                Overnight in Lima
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 2. - Lima city highlights </div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Full day tour of the city and a visit to the Larco Herrera Museum.
                                                After enjoying breakfast in your hotel, we will pick you up from your hotel to explore the City of Kings, to the heart of Peru’s “City of Kings”. Here you are going to see the Plaza Mayor; the square shows beautiful examples of colonial and republican architecture in the surrounding houses. You will see the Government’s palace from the outside and you will visit the Cathedral of Lima. You will continue your tour heading to the Convent of San Francisco; this religious building is interesting because subterranean catacombs are one of the main attractions. We are going to finish this part of the tour visiting the Casa Aliaga, which is the oldest western hemisphere’s mansion; this historic house this historic house is still inhabited and under the property of the 17th generation of the Aliaga family.
                                                We will drive you outside of the center of Lima to head towards Pueblo Libre neighborhood, home for the Larco Herrera Museum. On your arrival to this site, first, you will enjoy lunch right on the vine-covered terrace of the Museum’s café. After lunch, you are going start exploring the exhibit accompanied by your guide. This is a fascinating place that houses the country’s largest and most representative collection of pre-Columbian artifacts (including extensive gold and silver collections, and a very special and peculiar collection of erotic ceramics), here you are going to have a unique open access to their exquisitely catalogued storage area; this museum is the perfect introduction to Peru’s multi-faceted cultural history.
                                                At the end of the tour, we will take you back to your hotel and your guide will provide you some suggestions of places to see and dine within a walking distance from your hotel.
                                                Overnight in Lima.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 3.-Lima Iquitos.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Flight from Lima to Iquitos and transfer to your Cruise.
                                                At a scheduled time, we will transfer you to the airport for your flight to Iquitos.
                                                On your arrival, our representative will meet you and assist with the transfer to Nauta, as we begin the journey, we will offer you a Box Lunch.
                                                Nauta is a small riverside town on the banks of the Marañon River and was the first city founded in the department of Loreto. Once we reach Nauta, you will enjoy a VIP greeting at our private port along the shores of the Marañon River where the vessel awaits you.
                                                Once on board you will be assisted by our qualified staff who will introduce you to your exquisite and cozy suite, specially equipped with all the amenities for the experienced traveler as yourself.
                                                While the Delfin begins its initial navigation, you will enjoy the most fantastic panoramic views from the elegantly outfitted observation area located on our third deck. Our bartender will be waiting to serve you with an exotic cocktail made with regional fruits and Pisco, the beloved national brandy liquor of Peru. Then, your naturalist guide will give you an overview of your journey’s schedule, activities, route, highlights, wildlife and vegetation to keep your eye out for, geographical and historical background, and other useful details. 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 4. - Cruise excursion </div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Fundo Casual and Yanayacu Pucate.
                                                In the morning, we will have a walk at Fundo Casual jungle trail, which will take you deep into the rainforest on “Terra Firma” (non-flooded forest) where your guide will point out the dynamic creatures and vegetation of the Amazon. Be sure to keep an attentive eye open for spotting surprises!
                                                You will start cruising through the Yanayacu and Pucate Rivers, peeking into different creeks and lagoons. This is one of the best-preserved and protected zones of the Pacaya Samiria National Reserve. Your guide will use his expert eye to pinpoint all the biodiversity of this region. You will even have the opportunity to swim in the jungle river along with the famous pink dolphins!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 5.-Cruise excursion. </div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Samiria River and Nauta Caño.
                                                Our skiffs skim the Samiria River and its tributaries, where an abundance of wildlife hides in the deep rainforest, such as blue and yellow macaws, scarlet macaws, toucans, umbrella birds,    monkeys, and river others, capybaras and more. Our naturalists and his expert eye pinpoint all the biodiversity of this region. This is also a popular dolphin feeding spot so we won´t be the only one enjoying the plethora of fish below.
                                                After a delicious lunch, we will visit Nauta Caño Creek. Also, go fishing for the famous piranha, a delightful and challenging experience you will not forget! As night approaches, your guide will take you on a night safari in search of caiman alligators and night birds. 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 6.-Cruise excursion – Flight to Cusco.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Visit to the Rescue Center before taking the flight to Cusco.
                                                With heavy hearts, the staff will wish you farewell as you begin your departure. At the port of Nauta, our ground crew will be waiting to take you by our private vehicle back to the city of Iquitos, about 95 kilometers journey by paved road.
                                                On our way from Nauta back to Iquitos airport, you will visit the Rescue & Rehabilitation Center of River Mammals (ACOBIA) where you will have the chance to meet baby manatees and learn about these wonderful and docile creatures and why they are on the endangered species list. As well, there are also some other animals cared for by the center that have been rescued from capture for the intention of being turned into pets and other threatening conditions. We would like to invite you to contribute to this ambitious organization and education center as you wish. Our land personnel will wait for you at the airport to handle you your boarding passes, and help you with the check in procedure.
                                                Our staff will be on hand to help you with your luggage and check in at Colonel. FAP Francisco Secada Vignetta International Airport in Iquitos. The flight will take you to Cusco, either directly or via Lima. At the security gate, your guide and cruise crew will say goodbye. We truly hope that you enjoyed your stay and Amazon travel experience with us!
                                                On your arrival in Cusco, our representative will be waiting for you to help you and assist you at the airport. Before we head towards the Sacred Valley, we will take you to a restaurant in the downtown of Cusco to get something to eat.
                                                After lunch, we will transfer you to your hotel in the sacred valley, along the way you will enjoy the views of the beautiful snowcapped mountains and the landscapes that the valley offers. 
                                                Overnight in the Sacred Valley.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 7.-Pisac Ruins and market. </div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Morning tour of Pisac Ruins and its handicraft market.
                                                Today, you are going to experience Peru’s fascinating combination of past and present. First, we will visit the market, located in the main square of Pisac to witness its vibrant activity. The market shows its colorful textiles, all kinds of dyes, cutlery, ceramics and its vast variety of fresh vegetables; it seems that this place holds something to please everyone.
                                                We will continue our exploration of the place visiting the impressive Inca ruins of Pisac, located on top of the mountain that overlooks the town; here we will appreciate its incredible constructions.
                                                In Pisac, we will have a picnic lunch in a nice spot where we will also have great views of the surroundings.
                                                After lunch, we will head towards the Inkariy museum, a fantastic place where we will immerse into the origins of the Peruvian culture.
                                                Later, we will drive you back to your hotel.
                                                Overnight in the sacred valley.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 8. - Ollantaytambo Chinchero.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Morning tour to visit the Inca fortress and the town of weavers.
                                                This morning we will visit Ollantaytambo which is a charming Inca town characterized by its cobblestone streets and beautiful stone houses with big interior courtyards and the unusual trapezoidal doors that retain the traditional Inca urban planning. The streets in this town have water canals running down towards the farming lands and the river.
                                                The fortress is located on top of the mountain that overlooks the town; it has a religious area with an impressive stonework. In the lower part, there is a section of wide terraces.
                                                Lunch will be served in a restaurant.
                                                After lunch, we will head towards Chinchero town, famous for the extraordinary beauty and quality of its traditional textiles, and for its fair where local people gather wearing their traditional colorful outfits traveling down from their villages to trade their goods. Your guide will take you to the workshop of local weavers to learn more about the efforts of the community to keep alive their textile tradition and iconography passing them to the young generations, especially women.
                                                Overnight in the Sacred Valley.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 9.-Ollantaytambo Machu Picchu. </div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Tour of Machu Picchu citadel
                                                Transfer to the train station of Ollantaytambo where we will board your train that will take us through the spectacular cloud forest to Aguas Calientes town. On our arrival we will head to the bus station to take our chartered bus to the site, once we arrive to the entrance, we will go to the gate of Machu Picchu citadel. As we trek up the entrance’s stone steps, heavy vegetation hides the surrounding views until you arrive to what seems like the top of the world, with Machu Picchu in front of your eyes. This will definitely take you to capture the vista with your camera and enjoy this almost magical and mysterious view.
                                                Accompanied by your expert guide, you will tour the site exploring every corner of this intriguing and fascinating place. After visiting this beautiful spot, you will have a break for lunch at Machu Picchu Sanctuary Lodge.
                                                The afternoon will be free for you to relax and rest enjoying the surroundings of your hotel.
                                                Overnight at Machu Picchu Sanctuary Lodge hotel.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 10. - Machu Picchu Cusco.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Second day to visit the citadel and taking time for pictures of the beautiful scenery.
                                                In the afternoon, we will board our chartered bus back to Aguas Calientes where we will board the train to Cusco.
                                                On your arrival to the train station, our presentative will meet you and assist you with the transfer to the hotel.
                                                Overnight in Cusco.  
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 11.-Cusco City highlights.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Tour of the city
                                                On this day, it will be time to immerse in the history and architectural beauty of Cusco, an amazing city that has a unique charm and captivates most travelers that come to visit. Discover Cusco and its secrets during a private city tour; accompanied by our expert guide, we will walk through the traditional streets of Cusco. As we get to explore our first site, our guide will provide us information about the history of these beautiful places. Our visit will take us to Santo Domingo church; a colonial religious building that lays on top of the ancient Inca temple of the sun. We will continue our tour visiting the Cathedral of Cusco, a place that is necessary in order to get a better understanding of the architecture and art changes that took place in the colonial period. We will continue our walk towards San Pedro market, where local people make their grocery runs.
                                                From the market, we will transfer you to a restaurant where we will have lunch.
                                                In the afternoon, our next spot to visit will be the traditional neighborhood of San Blas, a well-known neighborhood, famous for being the house of the most representative Masters of Arts in Cusco city; San Blas is considered the cradle of traditional Cusquenian art.  We will take our way back to the hotel and, en route, we will pass by the famous 12-angled stone, whose image has been taken in many TV commercials.
                                                Back in the hotel, your guide will give you some suggestions of places to visit and some restaurant options to enjoy the flavors of the local cuisine.
                                                Overnight in Cusco.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 12.-Cusco Lima </div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Flight from Cusco to Lima.
                                                At a scheduled time, we will take you to the airport for your flight back to Lima.
                                                </p>
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
        <!-- CONTACTO -->     
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
