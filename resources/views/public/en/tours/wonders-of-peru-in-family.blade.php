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
                    <h2 class="color-white">Wonders of Peru in family</h2>
                    
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
                    <h2 class="detail-title color-dark-2">Wonders of Peru in family</h2>
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
                <p style="text-align: justify;">
                    Wonders of Peru in Family is an ideal travel program to enjoy twelve days exploring the most beautiful places in Lima, Paracas, Nazca, Cusco, the Sacred Valley and Machu Picchu, staying at the best selection of accommodations, all of them with a unique sense of style and distinction. Discover the city of Kings, Lima, accompanied by our guide who will give you insights about the capital and its treasures, moving from its fascinating past towards the present. Explore Ballestas Islands and its incredible fauna, the National reserve of Paracas and fly over the mysterious Nazca lines. Fly through the Andes to Cusco and discover the most beautiful sites of the Sacred Valley. Enjoy the comfort of a train ride to Machu Picchu, marvel your senses with the amazing natural scenery that will surround you and once you reach the lost citadel, explore and admire it with plenty of time. In Cusco, stroll around its colonial streets combined with incredible Inca constructions and let the city fascinate you. 
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
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/wonders-of-peru-in-family/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/wonders-of-peru-in-family/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/wonders-of-peru-in-family/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/wonders-of-peru-in-family/4.jpg" alt="">     
                                </div>
                                <div class="swiper-slide" data-val="4">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/wonders-of-peru-in-family/5.jpg" alt="">            
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
                                   <img class="img-responsive img-full" src="/assets/public/img/tour/wonders-of-peru-in-family/1_1.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                   <img class="img-responsive img-full" src="/assets/public/img/tour/wonders-of-peru-in-family/2_2.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                   <img class="img-responsive img-full" src="/assets/public/img/tour/wonders-of-peru-in-family/3_3.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                   <img class="img-responsive img-full" src="/assets/public/img/tour/wonders-of-peru-in-family/4_4.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="4">
                                   <img class="img-responsive img-full" src="/assets/public/img/tour/wonders-of-peru-in-family/5_5.jpg" alt="">
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
                                    <div class="acc-title"><span class="acc-icon"></span>Day 1. – Arrival in Lima.</div>
                                    <div class="acc-body">
                                        <p style="text-align: justify; color: black">
                                        Welcome to the land of the Incas.
                                        Your Peru luxury holiday is on the go. As you go through arrivals at the airport in Lima, we will be waiting for you – just look for our sign with your name on it. We will take you to your hotel and assist with the check-in procedure. There is nothing better than a time to freshen up and relax to recover from the flight, so we will leave you to rest.
                                        Overnight in Lima.
                                        </p>
                                    </div>
                                </div>
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>Day 2. - Lima city highlights</div>
                                    <div class="acc-body">
                                        <p style="text-align: justify; color: black">
                                            Private Tour around Lima´s Best Highlights.
                                            After enjoying breakfast in your hotel, you will have the morning at leisure; you can either enjoy all the comforts of your hotel or explore the vibrant downtown of Miraflores.
                                            By noon, we will pick you up from your hotel to take you to Pueblo Libre neighborhood, home for the Larco Herrera Museum. On your arrival to this site, first, you will enjoy a delicious lunch right on the vine-covered terrace of the Museum’s café, after lunch, you are going start exploring the exhibit accompanied by your guide. This is a fascinating place houses the country’s largest and most representative collection of pre-Columbian artifacts (including extensive gold and silver collections, and a very special and peculiar collection of erotic ceramics), here you are going to have a unique open access to their exquisitely catalogued storage area; this museum is the perfect introduction to Peru’s multi-faceted cultural history. 
                                            We will continue the tour driving to the heart of Peru’s “City of Kings”. Here you are going to see the Plaza Mayor; the square shows beautiful examples of colonial and republican architecture in the surrounding houses. You will see the Government’s palace from the outside and you will visit the Cathedral of Lima. You will continue your tour heading to the Convent of San Francisco; this religious building is interesting because subterranean catacombs are one of the main attractions. We are going to finish the tour visiting the Casa Aliaga, which is the oldest western hemisphere’s mansion; this historic house is still inhabited and under the property of the 17th generation of the Aliaga family.
                                            At the end of the tour, we will take you back to your hotel; your guide will provide you some suggestions of places to see and dine within a walking distance from your hotel.
                                            Overnight in Lima.
                                        </p>
                                    </div>
                                </div>
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>Day 3. - Lima - Paracas.</div>
                                    <div class="acc-body">
                                        <p style="text-align: justify; color: black">Morning transfer by car to visit the national Reserve of Paracas. 
                                        The protected reserve covers 3350 square kilometers, divided in 65% of sea and 35% of dry land and islands. It is considered as one of the richest and most uncommon ecosystems in the world. The attraction is not only the wildlife but also the beauty of the ocean and desert landscapes.
                                        Established in 1975, it is the oldest marine reserve in Peru, and in addition to the biological areas, the reserve protects prehistoric sites of the Paracas culture and other ancient civilizations. Near the entrance of the reserve is the Interpretation Center of the National Reserve and the Julio C Tello Museum, this place was named after the archeologist who made major discoveries about the ancient Paracas culture, like the elegant pieces buried with the mummified remains of the Paracas elite. Guided tour through this pristine and unique natural reserve, visit the Mirador de Flamencos and see flamingoes eating at the shore; continue your adventure towards to learn about all the fauna in the reserve, here you can see skeletons of whales, sea lions, and penguins  Return to your hotel for lunch.
                                        Overnight at Libertador Paracas Hotel.
                                        </p>
                                    </div>
                                </div>
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>Day 4. - Ballestas Islands and Fly over the Nazca lines.</div>
                                    <div class="acc-body">
                                        <p style="text-align: justify; color: black">Tour to the Islands of Ballestas and Overflight of Nazca Lines
                                        Morning boat excursion to the Ballestas islands, depart from the boat dock in Paracas at 8:00 am for your visit to the Ballestas Islands archipelago. As you cruise west from the tiny beach town of Paracas, you cannot miss the Candelabra geoglyph, a 150 m high and 50 m wide figure of a candlestick etched into the mountain, rumored to have been an ancient guide for sailors or a connection to the Nazca lines. Ballestas islands is an excellent opportunity to see large families of over 100 sea lions sleeping on the shores, basking in the sun on the rocks or some barking loudly in efforts to protect their territory.  Spot cormorants, the Peruvian booby and Peruvian pelican as well as other impressive varieties of sea bird species and Humboldt penguins nesting together in small groups. Watch the waters for dolphins. Apart from the abundant marine and bird life found here, the Ballestas Islands are also very well known for the guano (seabird droppings) deposited on the island over thousands of years which creates a natural reserve of nitrogen-rich fertilizer over 50 meters deep in some areas.  The guano came to be Peru's number 1 export in the mid-19th century however today the extraction of guano has been regulated to happen every 10 years. Then we will return to Paracas dock.  Upon arrival at 10:00 am, you will have some time to take photos of the friendly pelicans that hang out on the shoreline beside the dock. Then we will transfer you to Pisco Regional Airport. Our staff will assist you with the check-in procedure, once we finish with it; you will get into a Cessna Grand Caravan, which comfortably sets 12 passengers to enjoy a thrilling 90-minute flight over the Nazca Lines, with the chance to see 12 of the most popular Nazca Lines.
                                        After the flight over the lines, we will take you back to your hotel where you will have lunch.
                                        The afternoon will be at leisure, you may opt to relax and enjoy the comfort of your hotel.
                                        Overnight at Libertador Paracas Hotel.
                                        </p>
                                    </div>
                                </div>  
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>Day 5. – Lima - Cusco - Sacred Valley.</div>
                                    <div class="acc-body">
                                        <p style="text-align: justify;color: black">
                                        Flight to Cusco and transfer to Urubamba in the Sacred Valley.
                                        This morning will be at leisure, so you can relax in your hotel until we meet you to transfer you to the airport for the flight to Cusco.
                                        Upon your arrival in Cusco airport, our representative will meet you and assist you with your transfer to the sacred Valley.
                                        Overnight in the Sacred Valley.
                                        </p>
                                    </div>
                                </div>
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>Day 6.-Chinchero Maras Moray.</div>
                                    <div class="acc-body">
                                        <p style="text-align: justify; color: black">
                                        Visit to Moray, the saltpans of Maras and the town of weavers of Chinchero. 
                                        After breakfast, we will continue our adventure with a trip to a nice highland spot, which is located not far away from the breathtaking Lake of Piuray. The village of Chinchero is well known because of its textile tradition, here you will have an opportunity to talk and interact with the weavers who will share some of their knowledge with you.
                                        After visiting this place, our tour will continue with the visit of the enigmatic Inca ruins at Moray. From the upper part, these circular terraces look like an ancient amphitheater, though some experts believe they served as agricultural laboratories where the Incas could experiment with new farming techniques as well as a process of acclimatization of some plants. Of course, this is just one of the various theories, and even after many years of research and dozens of hypotheses, but still the true purpose of Moray remains as a mystery. This day, you are going to inspect the site yourself and have your own theories.
                                        Depart from the intriguing Moray and continue to the small town of Maras, home of an old salt mine that dates from the Inca times. This place comprises thousands of milky pools, each set on its own terrace along the hillside, the saltpans are particularly surreal in appearance and incredibly photogenic. All these pans are owned individually and have been passed down through the local families since pre-Inca times.
                                        Once we return from seeing the saltpans, we will have a set of activities to do in town, for the young members of the group; we will build kites or take a ceramic class.
                                        Another option might be to take a bike ride in the surroundings of the community.
                                        At the end of the day, we will drive you back to your hotel.
                                        Overnight in the Sacred Valley.
                                        </p>
                                    </div>
                                </div>
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>Day 7. - Pisac and Horseback riding.</div>
                                    <div class="acc-body">
                                        <p style="text-align: justify; color: black">
                                        Morning excursion to Pisac to visit its ruins and market and a horseback ride tour.
                                        Today, you are going to experience Peru’s fascinating combination of past and present. First, we will bring you to the impressive Inca ruins of Pisac, located on top of the mountain that overlooks the town, to explore its incredible constructions.
                                        After walking around the old Inca site, we will descend to the town where we will visit the market, located in the main square of Pisac to witness its vibrant activity. The market shows its colorful textiles, all kinds of dyes, cutlery, ceramics and its vast variety of fresh vegetables; it seems that this place holds something to please everyone.
                                        Lunch in Huayoccari.
                                        After lunch, we will be ready for a horseback ride excursion in the surroundings of the hacienda. Before starting the adventure, we will have a safety briefing to be familiarized with the security protocol.   
                                        Overnight in the Sacred Valley.
                                        </p>
                                    </div>
                                </div>
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>Day 8.-Ollantaytambo Machu Picchu.</div>
                                    <div class="acc-body">
                                        <p style="text-align: justify; color: black">
                                        Morning visit to Ollantaytambo and train ride to Machu Picchu.
                                        This morning we will visit Ollantaytambo which is a charming Inca town characterized by its cobblestone streets and beautiful stone houses with big interior courtyards and the unusual trapezoidal doors that retain the traditional Inca urban planning. The streets in this town have water canals running down towards the farming lands and the river.
                                        The fortress is located on top of the mountain that overlooks the town; it has a religious area with an impressive stonework. In the lower part, there is a section of wide terraces.
                                        At the end of this visit, we will transfer you to the train station where you will board the train to Aguas Calientes.
                                        The train ride is very scenic, you will enjoy beautiful landscapes and gradually you will witness the transition from the typical brown highland landscape to the incredible green of the raincloud forest. On your arrival, our representative will assist you to take your bags to the hotel where you will have lunch.
                                        In the afternoon, you will take a bus to reach the top of the mountain where the site is located; here, accompanied by your guide you will have a tour of this incredible Inca site.
                                        Return to your hotel.
                                        Overnight in Aguas Calientes.
                                        </p>
                                    </div>
                                </div> 
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>Day 9.-Machu Picchu or Optional Huayna Picchu hike - Cusco.</div>
                                    <div class="acc-body">
                                        <p style="text-align: justify; color: black">
                                        Second visit to the site or hike to Huayna Picchu Mountain.
                                        This morning, accompanied by your guide you will have a second exploration of the site to take pictures or a hike to the Huayna Picchu Mountain.( Please remember that hiking this mountain should be booked in advance due to the limited number of entrances).
                                        Lunch at Machu Picchu Sanctuary Lodge.
                                        Return to Aguas Calientes where you will board your train to Cusco.
                                        On your arrival to the station, our representative will meet you to transfer you to the hotel.
                                        Overnight in Cusco.
                                        </p>
                                    </div>
                                </div>
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>Day 10.-Cusco highlights and Hands on experience.</div>
                                    <div class="acc-body">
                                        <p style="text-align: justify; color: black">
                                        Tour of the city and San Blas clay ceramics workshop.
                                        On this day, it will be time to immerse in the history and architectural beauty of Cusco, an amazing city that has a unique charm and captivates most travelers that come to visit. Discover Cusco and its secrets during a private city tour; accompanied by our expert guide, we will walk through the traditional streets of Cusco. As we get to explore our first site, our guide will provide us information about the history of these beautiful places. Our visit will take us to Santo Domingo church; a colonial religious building that lays on top of the ancient Inca temple of the sun. We will continue our tour visiting the Cathedral of Cusco, a place that is necessary in order to get a better understanding of the architecture and art changes that took place in the colonial period. Our next spot to visit will be the traditional neighborhood of San Blas, a well-known neighborhood, famous for being the house of the most representative Masters of Arts in Cusco city; San Blas is considered the cradle of traditional Cusquenian art.
                                        Here, after exploring the place, we will have a ceramics workshop led by a local artist who will share with you the basics of the art.
                                        We will have lunch in a restaurant in San Blas.
                                        After lunch, we will take our way back to the hotel and, en route, we will pass by the famous 12-angled stone, whose image has been taken in many TV commercials.
                                        Back in the hotel, your guide will give you some suggestions of places to visit and some restaurant options for dinner to continue enjoying the flavors of the local cuisine.
                                        Overnight in Cusco.  
                                        </p>
                                    </div>
                                </div>   
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>Day 11.-Nearby ruins and Awanakancha.</div>
                                    <div class="acc-body">
                                        <p style="text-align: justify; color: black">
                                        Morning tour to Sacsayhuaman, Q’enko and Puca Pucara before visiting Awanakancha, the Center of South American camelids.
                                        This morning, we will drive to the upper part where we are going to explore the most interesting sites constructed by the Incas in the proximity of the city. Our first site to visit will be Sacsayhuaman, an incredible megalithic construction that in the past was considered as a fortress, but recent excavations proved that it was a religious center. We will continue our explorations visiting Q’enko, a ceremonial place where we will see its labyrinth and a very particular structure similar to an amphitheater.
                                        The tour will continue and we will visit the site of Puca Pucara, it is a small complex that was built as a checkpoint for the travelers who wanted to access to the Inca city of Cusco.
                                        We will continue driving towards Awanacancha, a center of South American Camelids where you will have a chance to see and   different types of camelids such as llamas, alpacas, vicuñas and guanacos.
                                        Return to the hotel.
                                        Overnight in Cusco. 
                                        </p>
                                    </div>
                                </div> 
                                <div class="acc-panel">
                                    <div class="acc-title"><span class="acc-icon"></span>Day 12. – Cusco - Lima</div>
                                    <div class="acc-body">
                                        <p style="text-align: justify; color: black">
                                        Flight from Cusco to Lima.
                                        At a scheduled time, we will transfer you to the airport for your flight back to Lima.
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
                            <p class="f-14">A fantastic travel program to enjoy in fourteen days the best of the country.</p>
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
                            <p class="f-14">Enjoy twelve days exploring a unique selection of places for those who would like to discover the flavors of the Peruvian cuisine.</p>
                            <a href="/en/tour/through-the-flavors-of-peru" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">select</a>
                            <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img src="/assets/public/img/loc_icon_small_drak.png" alt="">view on map</a>
                        </div>
                    </div>          
                </div>                                
            </div>
        </div>
        <!-- FIN TOURS RELACIONADOS  -->
    </div>
</div>
@endsection

@section('script')

@include('public.en.contact.contactScrip')

@endsection

