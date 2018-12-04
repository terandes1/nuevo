@extends('public.en.layouts.master')

@section('content')
<div class="inner-banner style-6">
    <img class="center-image" src="/assets/public/img/detail/bg_4.jpg" alt="">
    <div class="vertical-align" style="padding-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">                       
                    <h2 class="color-white"  style="margin-bottom: 0px;text-shadow: black 0.1em 0.1em 0.2em ">JEWELS OF THE SOUTH - BELMOND TRENES</h2>
                    <div class="col-xs-12 col-md-6 col-md-offset-4">
                    <div class="detail-rate rate-wrap clearfix">
                            <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            </div>
                        
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
                            Jewels of the South offers you a set of must-see destinations, Lima, Cusco, the Sacred Valley, Machu Picchu in ten days, staying at the best accommodations with a unique sense of style and distinction. Discover the city of Kings, Lima, accompanied by our guide who will give you insights about the capital, moving from its fascinating past towards the present. Explore the most beautiful sites of the Sacred Valley.
                    </p>
                    <div id="bloque-desplegable" class="collapse">
                           <p style="text-align: justify;">
                             Enjoy the comfort of a train ride to Machu Picchu, hike along a portion of the Inca trail and marvel your senses with the amazing natural scenery that will surround you and once you reach the lost citadel, explore and admire it with plenty of time. In Cusco, stroll around its colonial streets combined with incredible Inca constructions and let the city fascinate you. Board the incredible Belmond Andean Explorer to visit Puno and its beautiful islands on the Titicaca Lake and reach Arequipa and the Colca Canyon. 
                            This program can be customized according to your interests, needs and travel style. Please, feel free to contact us and personalize your holiday.
                            </p>
                    </div>
                    <button  data-toggle="collapse" class="c-button b-40 bg-red-3 hv-red-3-o"  href="#bloque-desplegable">READ MORE</button>


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
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/jewels/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/jewels/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/jewels/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/jewels/4.jpg" alt="">     
                                </div>
                                <div class="swiper-slide" data-val="4">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/jewels/5.jpg" alt="">            
                                </div>
                                <div class="swiper-slide" data-val="5">
                                    <img class="img-responsive img-full" src="/assets/public/img/tour/jewels/6.jpg" alt="">            
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
                                  <img class="img-responsive img-full" src="/assets/public/img/tour/jewels/1_1.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                  <img class="img-responsive img-full" src="/assets/public/img/tour/jewels/2_2.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                  <img class="img-responsive img-full" src="/assets/public/img/tour/jewels/3_3.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                  <img class="img-responsive img-full" src="/assets/public/img/tour/jewels/4_4.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="4">
                                  <img class="img-responsive img-full" src="/assets/public/img/tour/jewels/5_5.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="5">
                                  <img class="img-responsive img-full" src="/assets/public/img/tour/jewels/6_6.jpg" alt="">
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
                                            <div class="acc-title"><span class="acc-icon"></span>Day 1. – Arrival in Lima</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Welcome to the land of the Incas.
                                                Your Peru luxury holiday is on the go. 
                                                As you go through arrivals at the airport in Lima, we will be waiting for you – just look for our representative who will be with a sign with your name on it. We will take you to your hotel and assist with the check-in procedure. There is nothing better than a time to freshen up and relax to recover from the flight, so we will leave you to rest.
                                                Overnight in Lima.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 2. - Lima city highlights </div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Private Tour around Lima´s Best Highlights
                                                After enjoying breakfast in your hotel, you will have the morning at leisure; you can either enjoy all the comforts of your hotel or explore the vibrant downtown of Miraflores.
                                                By noon, we will pick you up from your hotel to take you to Pueblo Libre neighborhood, home for the Larco Herrera Museum. On your arrival to this site, first, you will enjoy a delicious lunch right on the vine-covered terrace of the Museum’s café, after lunch, you are going start exploring the exhibit accompanied by your guide. This is a fascinating place houses the country’s largest and most representative collection of pre-Columbian artifacts (including extensive gold and silver collections, and a very special and peculiar collection of erotic ceramics), here you are going to have a unique open access to their exquisitely catalogued storage area; this museum is the perfect introduction to Peru’s multi-faceted cultural history. 
                                                We will continue the tour driving to the heart of Peru’s “City of Kings”. Here you are going to see the Plaza Mayor; the square shows beautiful examples of colonial and republican architecture in the surrounding houses. You will see the Government’s palace from the outside and you will visit the Cathedral of Lima. You will continue your tour heading to the Convent of San Francisco; this religious building is interesting because subterranean catacombs are one of the main attractions. We are going to finish the tour visiting the Casa Aliaga, which is the oldest western hemisphere’s mansion; this historic house is still inhabited and under the property of the 17th generation of the Aliaga family.
                                                At the end of the tour, we will take you back to your hotel; your guide will provide you some suggestions of places to see and dine within a walking distance from your hotel.
                                                Overnight in Lima.
 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 3. - Lima Cusco Sacred valley nearby ruins and Pisac.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Flight to Cusco and transfer to the Sacred Valley – Visit to Pisac.
                                                After breakfast in your hotel, we will take you to the airport for your morning flight to Cusco. As you start your flight, do not miss the stunning views of the landscapes, moving from the arid desert along the coast, towards the snow-capped mountains of the Andes.
                                                On your arrival, our representative will be waiting at the airport of Cusco to take you to the Sacred Valley, where you can easily acclimatize and adjust to the elevation change. 
                                                The Sacred valley is located just an hour away from Cusco, the Sacred Valley is simply another world: cattle, showing cows and sheep grazing by the roadside, old farming terraces on the hillside that nowadays are still in use and impossibly steep peaks rising in the distance. En route, we will stop to admire the impressive Sacsayhuaman, a religious place located on a hill that overlooks the city; This Inca site was thought to be a fortress when the Spaniards arrived. Our journey will continue to visit Q’enko, a shrine dedicated to worship the sun and the mother earth. We will continue towards the center of South American Camelids of Awanakancha and its Living Museum, here you can marvel and admire weavers at work, sharing the beauty of their textile tradition and there will be a unique opportunity to see and feed llamas, alpacas, vicuñas and other Andean camelids.
                                                We will arrive to Pisac where we will spend some time strolling around the local market that shows its colorful textiles, all kinds of dyes, cutlery, ceramics and its vast variety of fresh vegetables; it seems that this place holds something to please everyone.
                                                We will drive to a nice hacienda where we will have lunch.
                                                After lunch, we will continue our way to the hotel where you will spend the rest of the day.
                                                Overnight Sacred Valley. 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 4. – Ollantaytambo & Chinchero.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Private tour to the Inca town and fortress of Ollantaytambo and visit to the town of weavers of Chinchero.
                                                This morning, after breakfast we will start our tour, first, we will drive to visit the Inca complex of Ollantaytambo; it is a charming Inca town characterized by its cobblestone streets and beautiful stone houses with big interior courtyards and the unusual trapezoidal doors that still retain the traditional Inca urban planning. The streets in this town have water canals running down towards the farming lands and the river.
                                                The fortress is located on top of the mountain that overlooks the town; it has a religious area with an impressive stonework and in the lower part, there is a section of wide terraces.
                                                    Lunch at Wayra Restaurant.
                                                After lunch, we will head towards Chinchero, a town of Inca origin that is famous for the extraordinary beauty and quality of its textiles and for its fair where local people dress in traditional colorful outfits and travel down from their villages to trade their goods. Accompanied by your guide you will visit this picturesque town; here you will meet local weavers in their workshop; you will have a chance to see and share time learning the basics of traditional weaving. All the weavers of Chinchero area are proud of their textile tradition and they are working hard to keep the legacy alive, passing it to the young members of their communities. 
                                                Overnight Sacred Valley.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 5. - Short hike to Machu Picchu.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Short Inca trail to the citadel of Machu Picchu. 
                                                This morning, we will transfer you to Ollantaytambo station to board the Vistadome train to the starting point of the short Inca Trail, Km 104 of the route to Machu Picchu.
                                                On our arrival, we will get ready to start the hike; we will go through the checkpoint and cross a bridge over the Urubamba River. We are going to start visiting the archaeological complex of Chachabamba, located not far away from the control point, then we will embark on an 8 km. ascending trail, which after about four hours will take us to the archaeological complex of Wiñaywayna. This is an impressive Inca complex made up of an agricultural center with numerous terraces, a religious sector and an urban sector. On the way up, we will have magnificent views of the Urubamba River valley and the Choquesuysuy archaeological complex located on the other side of the river; we will also see a beautiful waterfall located just a few minutes away from Wiñaywayna. We will continue our hike and climb to Intipunku or The Sun Gate. This will take an hour of hiking along a trail of flat stones on the edges of cliffs in the raincloud forest. Once we reach this point, we will have a fantastic view of the lost citadel of Machu Picchu. From Intipunku we will descend to Machu Picchu and then by bus to Aguas Calientes. 
                                                For the hike, we will have a box lunch and an assistant (Porter) to help us with the food and water supply.
                                                Overnight in Aguas Calientes.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 6. - Machu Picchu Cusco. </div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Second visit to the Inca citadel.
                                                This morning, accompanied by your guide, you will visit the incredible lost citadel of Machu Picchu. You will explore this fascinating Inca site from side to side, visiting its different sectors, enjoying astonishing views of the site and the surrounding scenery.
                                                Buffet lunch at Sanctuary Lodge Hotel included.
                                                Afternoon train return to Poroy. (Subject to availability, alternative station may be Ollantaytambo). On your arrival, our representative will be waiting for you at the train station to transfer you to your hotel.
                                                Overnight in Cusco.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 7.-Cusco city highlights.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                               Tour of the city.
                                                This morning accompanied with your guide, you will explore the colonial streets and the squares of Cusco. You will immerse in the fascinating history of the Inca Capital. The first spot to visit will be the Santo Domingo church, a colonial temple that lays on top of the ancient Inca Temple of the Sun (Koricancha); then you will continue the tour heading towards the Cathedral of the city, located right in the main square – this is one of the most impressive exhibits of colonial art.
                                                Continue walking through the beautiful streets of the traditional neighborhood of San Blas, which is well known for being the house of the most representative Masters of Arts in Cusco city, San Blas is considered the cradle of traditional Cusquenian art.  Then you are going to descent towards the hotel, en route you will pass by the famous 12-angled stone, whose image has been taken in many TV commercials.
                                                After the tour, your guide will suggest you some restaurants where you can enjoy the flavor of the local cuisine.
                                                The rest of the day will be at leisure, you can opt to continue exploring the city on your own or if you prefer, you can relax in your hotel.
                                                Overnight in Cusco. 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 8. - Southern Valley. </div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Tour to explore the Inca sites of Tipon, Pikillacta and the famous chapel of Andahuaylillas.
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
                                            <div class="acc-title"><span class="acc-icon"></span>Day 9. - Cusco Puno.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Belmond Andean Explorer train ride to Puno. 
                                                This morning board the Belmond Andean Explorer luxury sleeper train to Lake Titicaca. En route, visit the Inca ruins of Raqchi. A gourmet lunch, tea and snacks are included in the dining car and lounges. Take in the sunset over La Raya, the highest point of the journey, where you will make a brief stop to admire the view and visit a small artisanal market. Arrive at Lake Titicaca at night and stay overnight on the train.
                                                Overnight stay at Lake Titicaca Station (Puno)
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 10.- Puno Uros and Taquile Islands.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Tour to explore the Islands in Lake Titicaca.
                                                Early this morning enjoy breakfast on board as you take in the sunrise over Lake Titicaca before visiting islands on the lake. Cruise to the Uros Islands, made from totora reeds. Continue on to Taquile Island. Lunch will be waiting for you at a private location on Collata Beach where local people will perform a typical dance and a presentation of artisanal works. In the afternoon, you will return to the dock in Puno for teatime before you board the train and depart for Arequipa. In the evening dinner will be served on board before stopping in Saracocha for the night. Stay overnight on the Belmond Andean Explorer.
                                                Overnight stay at Saracocha
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 11. - Puno Arequipa. </div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                This morning, we will depart to Arequipa, en route we will explore the caves of Sumbay; they were discovered in 1968 by the archeologist Máximo Neira Avendaño. The site is an archaeological complex of nine impressive caves behind the Misti volcano; it is located 88 kilometers away from Arequipa within the limits of the Salinas and Aguada Blanca National Reserve, the discovery of the Sumbay caves marked the prehistoric period of Arequipa.
                                                Nowadays, the caves are shown as imposing stone soldiers who guard the art and history of Arequipa. Its magic is placed on its rocky walls that have valuable cave paintings from the Paleolithic era. Its pictograph represents human figures, camelids, pumas and foxes, painted in a creamy white tone with an antiquity between 6,000 and 8,000 BC.
                                                The main cave has more than 500 drawings of South American camelids. In the drawings, most of these animals are not in motion, but in rest. This is because these paintings were created in the last stages of the hunters, when they already knew the domestication of these animals.
                                                An eye-catching figure in this cave is an amazing shaman dressed as a camelid. Therefore, it is believed that these caves were also a religious center for the primitives.
                                                The creamy white color used in Sumbay is a peculiarity of the ancient cave art of the place, which was obtained from the clay that remains from the eruption of the volcanoes that surround the reserve. To be able to seal the drawings on those walls for thousands of years they used animal fat. Therefore, today we can revive its beauty.
                                                In addition to the paintings, spearheads made of stone, disc knives to cut the meat, scrapers made with bones to clean animal skins and utensils to sew have also been found.
                                                Station Km. 93: Passengers going independently to Colca Canyon disembark (it is not included in the train ticket).
                                                Detour for the Colca canyon tour, at Km 93, we will disembark the train to board our van and accompanied by our guide we will drive along the border of Lagunilla Lake, hoping to catch a glimpse of its variety of wild birds and flora. The journey will continue through picturesque Andean farms, dotted with sheep, llama, and traditionally dressed workers. Stop to take a photo of the natural landscape with the surrounding Peruvian Andes acting as the perfect backdrop.
                                                On our arrival to the hotel, we will have lunch.
                                                Overnight in Colca.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 12. - Colca </div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Hikes in Colca – Optionals.
                                                This morning, we will offer you a range of activities to choose in the Colca Canyon. Perhaps explore on foot the place, opting for one of the many beautiful regional hikes that include a gentle walk to Uyo Uyo Ruins, a moderate hike through Canocota Canyon, or a steep trek to Madrigal Chimpa Fortress. Alternatively, get to know the local people, seeing what a day is like in the communities. Horseback riding is also available, if you prefer to explore the area on the world-renowned Peruvian Paso horse.
                                                In the afternoon, accompanied by your guide you will visit the recently renovated colonial church of Lari before driving further down the valley toward the famous Condor Cross to view the majestic condor in flight. The Andean condor has an average wingspan of 3m (10ft) and is one of the largest land flying birds in the world. Although it cannot be 100% guaranteed that they would show up, you will have a very high chance of observing the condor from this vantage point.
                                                Overnight in Colca.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 13. - Colca Arequipa.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Return to Arequipa.
                                                This morning, your guide will meet you at your hotel to start your journey through a wonderful scenery and traditional towns, leading you to a lookout point from where you can see snow-capped mountains. You will continue through a forest filled with interesting rock formations and the Pampa of Cañahuas. The mountains surrounding the area provide the quintessential scene of the Peruvian Andes, dotted with farms, sheep and llamas along the way. Following this, you will make the return journey to Arequipa, a journey of approximately four hours.
                                                We will have a box lunch for our way to Arequipa.
                                                Overnight in Arequipa.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 14. - Arequipa.</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Tour of the city.
                                                This morning we will explore Arequipa and its highlights, the city is located at the foot of “El Misti” volcano, it is also known as ‘The White City’ because of its construction using “Sillar”, a chalk-white volcanic stone. The fascinating colonial architecture, interesting sites, and the five nearby volcanoes have made Arequipa receive the title of UNESCO World Heritage city. This day you will have the opportunity to discover the city and its surroundings.
                                                We will start our explorations driving to the outskirts of the city to the Route of Sillar. This route is composed of quarries, where currently workers manually carve blocks of the iconic volcanic stone that constructs the big colonial style houses or casonas, churches, and some old buildings of the downtown. After visiting these quarries, we will drive back to the center of the city to visit its beautiful main square or Plaza de Armas and the Cathedral, then we will drive to the Jesuit church of La Compañia, an exceptional example of American baroque architecture. Next, we will visit the Santa Teresa convent, a former religious center that over the years was converted into a Colonial Art Museum. 
                                                We will drive to a typical restaurant where we will enjoy the local cuisine. After lunch, we will explore the Santa Catalina monastery, the most representative monument of Arequipa. This convent was founded in 1580 and it is considered as a masterpiece of Colonial architectural design. We will finish our visit to the city with the Santuarios Andinos Museum, where we will see the mummy of Juanita; a frozen girl found in Ampato Mountain in 1995, according to the archaeologists, Juanita was a young girl who was offered in sacrifice to the Inca gods in the 1400s. Over the years due to the climate conditions of Ampato area, it has been well preserved. 
                                                Overnight in Arequipa.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="acc-panel">
                                            <div class="acc-title"><span class="acc-icon"></span>Day 15.-Arequipa – Lima</div>
                                            <div class="acc-body">
                                                <p style="text-align: justify; color: black">
                                                Flight from Arequipa to Lima. 
                                                At a scheduled time, our representative will meet you at your hotel for the transfer to Arequipa airport to board the domestic flight to Lima. Upon your arrival in Lima, our representative will assist you at the airport with your connection between your domestic and international flight.
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
                            <p class="color-grey-9">location: <span class="color-white">paris, france</span></p>
                            <p class="color-grey-9">days: <span class="color-white">july 19th to july 29th</span></p>
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
                                <div class="hotel-loc">enjoy twelve days exploring a unique selection of places for those who would like to discover the flavors of the Peruvian cuisine</div>
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
                    <div class="second-title" style="margin-top: -100px">
                        <h4 class="subtitle color-blue-2 underline" style="color: #402A01;">contact</h4>
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
