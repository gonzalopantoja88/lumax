<?php include('./layout/header.php'); ?>

<!-- Inner Section Start -->
<section class="inner-area parallax-bg" data-background="images/bg/px-1.jpg" data-type="parallax" data-speed="3">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-12">
                    <h4 class="pt-40 pb-40">Contáctanos</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inner Section End -->

<section class="contact-details pb-70">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                    <h3 class="title">Envíanos <span>tus datos</span></h3>
                    <form id="ajax-contact" method="post" action="http://heatmaponline.com/html/intruder/php/contact.php">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="f_name" id="f_name" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="l_name" id="l_name" class="form-control" placeholder="Apellido" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Tú email" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" placeholder="Asunto" id="subject" required>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="contact-textarea">
                                    <textarea class="form-control" rows="6" placeholder="Escribir mensaje" id="message" name="message" required></textarea>
                                    <button class="btn btn-theme mt-4" type="submit" value="Submit Form">Enviar</button>
                                </div>
                            </div>
                            <div id="form-messages"></div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                    <h3 class="title">Ponerse <span>en contacto</span></h3>
                    <div class="service-item style-1 border-1px">
                        <div class="service-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="content">
                            <h5><a href="#">Dirección</a></h5>
                            <p>Avenida de las Américas calle 86<br>Finca Santa Ana - Pereira, Risaralda.</p>
                        </div>
                    </div>
                    <div class="service-item style-1 border-1px">
                        <div class="">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="content">
                            <h5><a href="#">Email</a></h5>
                            <p><a href="#">info@lumax.com</a> <br> <a href="#">info@lumax.com</a> </p>
                        </div>
                    </div>
                    <div class="service-item style-1 border-1px">
                        <div class="">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="content">
                            <h5><a href="#">Nro. de contacto</a></h5>
                            <p>301 324 5114 &nbsp;<span class="fab fa-whatsapp fz-16" style="color: #00a884;"></span><br>301 324 5114 &nbsp;<span class="fab fa-whatsapp fz-16" style="color: #00a884;"></span></p>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-0">
    <div class="map">        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6238.73397818436!2d-75.75610157486926!3d4.800594514040995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e387d2779f2089d%3A0x9aa8064b0bdd740e!2sAceros%20y%20Metales%20Lumax%20S.A.S!5e0!3m2!1ses-419!2sco!4v1651595587559!5m2!1ses-419!2sco" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
</section>

<?php include('./layout/footer.php'); ?>