<div class="col-xs-12 col-sm-12">
                  {!! Form::open(['route' => ['contacto-informacion.store'] , 'method' => 'POST', 'class' => 'contact-form','id' => "formEnvio"]) !!}                   
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="input-style-1 type-2 color-2">
                                <input type="text" required="" id='name' name='name' placeholder="Enter your name">
                                <h5 id="nombre" style="color: #F27612;position: absolute;"><h5>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="input-style-1 type-2 color-2">
                                <input type="text" required="" id='email' name='email' placeholder="Enter your email">
                                <h5 id="emailErrors" style="color: #F27612;position: absolute;"><h5>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="input-style-1 type-2 color-2">
                                <input type="text" required="" id='subject' name='subject' placeholder="Subject">
                                <h5 id="subjectErrors" style="color: #F27612;position: absolute;"><h5>
                            </div>
                        </div>  
                        <div class="col-xs-12 col-sm-6">
                            <div class="input-style-1 type-2 color-2">
                                <input type="text" required="" id='telefono' name='telefono' placeholder="phone">
                                <h5 id="telefonoErrors" style="color: #F27612;position: absolute;"><h5>
                            </div>
                        </div>    
                        <div class="col-xs-12">
                            <textarea class="area-style-1 color-1" required="" id="mensaje" name='mensaje' placeholder="Enter your comment"></textarea>
                                 <h5 id="mensajeErrors" style="color: #F27612;position: absolute;    margin-top: -36px;"><h5>
                               
                        </div>
                        <div class="col-xs-4" >
                            
                                    
                                    
                        </div>
                        <div class="col-xs-8" >
                            
                                    
                                      {!! NoCaptcha::renderJs() !!}
                                      {!! NoCaptcha::display() !!}

                                    <h5 id="capchaErrors" style="color: #F27612;position: absolute;"><h5>

                               
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <div id="carga" style="text-align:center;">
                       
                            </div>
                            <div class="loading" id="nuevaCarga">
                                <div class="loading-center" >
                                    <div class="loading-center-absolute">
                                        <div class="object object_four"></div>
                                        <div class="object object_three"></div>
                                        <div class="object object_two"></div>
                                        <div class="object object_one"></div>
                                    </div>
                                </div>
                              </div>
                        </div>  
                        <div class="col-xs-4 col-sm-6" style="margin-left: -72px;"> 
                            <button type="submit" class="c-button bg-blue-3 hv-blue-2-o" id="enviar" style="margin-top: 25px;" >
                                          <span>submit</span>
                                        </button>
                        </div> 
                      <div class="col-xs-12">

                                    <div class="row"><br>  
                                        <div class="col-md-12">
                                          <div class="buttons-wrap" id="mensajeRespuesta">

                                             
                                           </div>       
                                        </div>
                                    </div>
                                   
                               
                        </div>
                    </div>        
                    {!! Form::close() !!}        
            </div>
            <!--
            <div class="col-xs-12 col-sm-4">
                <div class="contact-about">
                    <h4 class="color-dark-2"><strong>about us</strong></h4>
                    <p class="color-grey-3">Done</p>                    
                </div>
                <div class="contact-info">
                    <h4 class="color-dark-2"><strong>contact info</strong></h4>
                    <div class="contact-line color-grey-3"><img src="assets/public/img/phone_icon_2_blue.png" alt="">Phone: <a class="color-dark-2" href="tel:93123456789">+93 123 456 789</a></div>                  
                    <div class="contact-line color-grey-3"><img src="assets/public/img/mail_icon_b_blue.png" alt="">Email us: <a class="color-dark-2 tt" href="mailto:letstravel@world.com">let’s_travel@world.com</a></div>                  
                    <div class="contact-line color-grey-3"><img src="assets/public/img/loc_icon_blue.png" alt="">Address: <span class="color-dark-2 tt">Aenean vulputate porttitor</span></div>                   
                </div>
                <div class="contact-socail">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
            -->