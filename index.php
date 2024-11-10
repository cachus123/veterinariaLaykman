<?php
global $productos, $URL;
include ('app/config.php');
include ('layout/parte1.php');
include ('app/controllers/productos/listado_de_productos.php');
?>





      <section>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="public/images/fondo1.jpg" height="600" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <a href="<?php echo $URL; ?>/reservar.php" class="btn" style="background-color: #6f2479; color: white;">Reservar cita</a>
                  <a href="#" class="btn" style="background-color: #6f2479; color: white;">Ver productos</a>
                  <h5></h5>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="public/images/fondo2.jpeg" height="600" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="public/images/fondo3.1.jpeg" height="600" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2020/03/31/16/18/cat-4988407_1280.jpg" height="600" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </section>

      <section class="info">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-sm-12 zoomP">
              <center>
                <br><br>
                <img src="public/images/perroygato.png" width="70%" style="margin-left: 280px; margin-top: 130px;" alt="">
              </center>
            </div>
            <div class="col-md-4 col-sm-12">
              <br><br><br><br><br><br><br><br><br><br><br>
              <h1> Acerca de nuestra clinica <span style="color: #6f2479;">veterinaria Laykman</span></h1>
              <br>
              <p style="text-align: justify">La Clínica Veterinaria Laykman es una empresa que surgió con el objetivo de dar atención médica de calidad a las mascotas de la comunidad local el cual es dedicado para perros y gatos. Inició operaciones en el año 2021 con su mama quisieron hacer una veterinaria propia el cual estos años se ha comprometidos con el bienestar animal. Desde su apertura, la clínica ha ido ampliando sus servicios y ha incrementado su base de clientes gracias a su enfoque en el trato personalizado y la atención profesional.</p>
              <a href="#" class="btn" style="background-color: #6f2479; color: white;">Más sobre nosotros</a>
              <br><br><br>
            </div>
          </div>
        </div>
      </section>

    <section class="our-services" style="background-color: #fddaf7;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br><br>
                    <h1>Nuestros <b style="color: #6f2479;">productos</b></h1>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($productos as $producto) {
                    ?>
                    <div class="col-md-3 zoomP">
                        <div class="card">
                            <img src="<?=$URL."/public/images/productos/".$producto['imagen'];?>"
                                 height="220px" class="card-img-top" alt="...">
                            <div class="card-body" style="background-color:rgb(253, 218, 247) ;">
                                <h5 class="card-title"><?=$producto['nombre_producto'];?></h5>
                                <p class="card-text"><?=$producto ['descripcion'] ;?></p>
                                <p style="color: #0a0e14"><b>$ <?=$producto['precio_venta'];?></b></p>
                            </div>
                        </div>
                        <br>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>


<section class="our-services" style="background-color: #fddaf7;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br><br>
          <h1>Nuestros <b style="color: #6f2479;">servicios</b></h1>
          <br><br>

        </div>
  </div> 
    <div class="row">
          <div class="col-md-3 zoomP">
            <div class="card">
              <img src="public/images/consulta.jpg"
              height="220px" class="card-img-top" alt="...">
              <div class="card-body" style="background-color:rgb(253, 218, 247) ;">
                <h5 class="card-title">Consultas</h5>
                <p class="card-text">La consulta veterinaria es el primer paso para cuidar la salud de tu mascota. Un examen rutinario puede detectar problemas a tiempo y asegurar el bienestar general de tu perro o gato. Nuestro equipo está aquí para ofrecer atención personalizada y asesorarte en cada etapa del desarrollo de tu mascota.</p>
                <a href="#" class="btn" style="background-color: #6f2479; color: white;">Más información</a>
              </div>
            </div>
            <br>
          </div>
          <div class="col-md-3 zoomP">
            <div class="card">
              <img src="public/images/vacunas.jpg"
              height="220px" class="card-img-top" alt="...">
              <div class="card-body" style="background-color:rgb(253, 218, 247);">
                <h5 class="card-title">Vacunas</h5>
                <p class="card-text">Las vacunas son esenciales para prevenir enfermedades que podrían afectar la vida de tu mascota. Vacunar a tu perro o gato protege no solo a ellos, sino también a la comunidad de contagios de enfermedades. Es una inversión en la salud y el futuro de tu amigo de cuatro patas.</p>
                <a href="#" class="btn" style="background-color: #6f2479; color: white;">Más información</a>
              </div>
            </div>
            <br>
          </div>
          <div class="col-md-3 zoomP">
              <div class="card">
                <img src="public/images/cirugia.jpg"
                height="220px" class="card-img-top" alt="...">
                <div class="card-body" style="background-color:rgb(253, 218, 247);">
                  <h5 class="card-title">Cirugias</h5>
                  <p class="card-text">Las cirugías veterinarias van desde procedimientos de rutina hasta intervenciones más complejas. Ya sea una castración, una cirugía correctiva o cualquier otro tipo de intervención, nos aseguramos de brindar el mejor cuidado posible antes, durante y después del procedimiento, garantizando que tu mascota esté en las mejores manos.</p>
                  <a href="#" class="btn" style="background-color: #6f2479; color: white;">Más información</a>
                </div>
              </div>
              <br>
          </div>
          <div class="col-md-3 text-center zoomP">
            <img src="public/images/perrito.png" width="500px" height="550px" style="margin-top: -55px;" alt="Variedad Veterinaria">
          </div>          
    </div>
  </div>
</section>


<section class="gallery">
    <div class="container">
      <br><br>
      <h1>Gale<b style="color: #6f2479;">ria</b></h1>
      <br><br>
      <div class="row">
          <div class="col md-4 zoomP">
            <center>
              <img src="public/images/Foto1.jpeg"
              width="100%" height="350px" alt="">
              <br><br>
            </center>
          </div>
          <div class="col-md-8 zoomP">
            <center>
            <img src="public/images/Foto2.jpeg"
            width="100%" height="350px" alt="">
            <br><br>
            </center>
          </div>
      </div>
      <div class="row">
          <div class="col-md-4 zoomP">
            <center>
              <img src="public/images/Foto3.jpeg"
              width="100%" height="350px" alt="">
              <br><br>
            </center>
          </div>
          <div class="col-md-4 zoomP">
            <center>
              <img src="public/images/Foto4.jpeg"
              width="100%" height="350px" alt="">
              <br><br>
            </center>
          </div>
          <div class="col-md-4 zoomP">
            <center>
              <img src="public/images/Foto5.jpeg"
              width="100%" height="350px" alt="">
              <br><br>
            </center>
          </div>
      </div>
    </div>
    <br><br>
</section>

<section class="clientes" style="background-color: #fddaf7;">
  <div class="container">
    <br><br>
    <h1>Testimonio de <b style="color: #6f2479;">clientes</b></h1> 
    <br><br>
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-4">
                  <div class="card">
                    <img src="public/images/Testimonios/Testimonio1.jpg" height="220px" class="card-img-top" alt="Cirugía veterinaria">
                    <div class="card-body" style="background-color:rgb(253, 218, 247);">
                      <h5 class="card-title">Jesus Figueroa</h5>
                      <p class="card-text">Súper recomendables, atendieron a mi shitzu y la dejaron hermosa! Gracias!</p>
                    </div>
                  </div>
                  <br>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img src="public/images/Testimonios/Testimonio2.jpg" height="220px" class="card-img-top" alt="Consulta veterinaria">
                    <div class="card-body" style="background-color:rgb(253, 218, 247);">
                      <h5 class="card-title">Fernanda Cárdenas Casas</h5>
                      <p class="card-text">Excelente Servicio, Mi perrita quedó hermosa, el trato y amabilidad se agradecen siempre. 
                        Sin duda una de las mejores veterinarias❤️.</p>
                    </div>
                  </div>
                  <br>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img src="public/images/Testimonios/Testimonio3.jpg" height="220px" class="card-img-top" alt="Vacunación veterinaria">
                    <div class="card-body" style="background-color:rgb(253, 218, 247);">
                      <h5 class="card-title">Evita Salmeron </h5>
                      <p class="card-text">La recomiendo 100% 🙌🏽 siempre que pasan por mi perrita y la pasan a dejar regresa súper contenta 👏🏼🥰🥹 y oliendo súper rico un trato muy amable con los animalitos y siempre al pendiente de sus atenciones, vacunas, etc., siempre son muy amables🫶🏼🥰.</p>
                    </div>
                  </div>
              <br>
        </div>
      </div>
  </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                      <img src="public/images/Testimonios/Testimonio4.jpg" height="220px" class="card-img-top" alt="Cirugía veterinaria">
                      <div class="card-body" style="background-color:rgb(253, 218, 247);">
                        <h5 class="card-title">Johana Ceja Martinez</h5>
                        <p class="card-text">Exelente trato y 100% profecionales 
                          En una ocacion mi perrhijo estuvo muy grabe y la doctora en conjunto con su equipo de trabajo sacaron adelante a mi SEVEN  así es que recomendó ampliamente Clínica Veterinaria Laykman.</p>
                      </div>
                    </div>
                    <br>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <img src="public/images/Testimonios/Testimonio5.jpg" height="220px" class="card-img-top" alt="Consulta veterinaria">
                      <div class="card-body" style="background-color:rgb(253, 218, 247);">
                        <h5 class="card-title">Brenda Castillo Salazar</h5>
                        <p class="card-text">Fueron muy atentos con mi perrita♥️, muy serviciales. Está accesible para llegar a su veterinaria.
                          La doctora fue muy cuidadosa y profesional con mi perrita.</p>
                      </div>
                    </div>
                    <br>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <img src="public/images/Testimonios/Testimonio6.jpg" height="220px" class="card-img-top" alt="Vacunación veterinaria">
                      <div class="card-body" style="background-color:rgb(253, 218, 247);">
                        <h5 class="card-title">Jazmin Guzman</h5>
                        <p class="card-text">Las Recomiendo ampliamente, la doctora es muy profesional y su equipo de trabajo muy atentos y muy amorosas, canelo y tundra acuden a baño y sus bebés muy bien atendidos para vacunación y desparacitacion. Son de mi total confianza.</p>
                      </div>
                    </div>
                <br>
          </div>
        </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                      <img src="public/images/Testimonios/Testimonio7.jpg" height="220px" class="card-img-top" alt="Cirugía veterinaria">
                      <div class="card-body" style="background-color:rgb(253, 218, 247);">
                        <h5 class="card-title">Lupita Parra</h5>
                        <p class="card-text">Excelente atención, muy amables buena atención a nuestras mascotas.</p>
                      </div>
                    </div>
                    <br>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <img src="public/images/Testimonios/Testimonio8.jpg" height="220px" class="card-img-top" alt="Consulta veterinaria">
                      <div class="card-body" style="background-color:rgb(253, 218, 247);">
                        <h5 class="card-title">Andrea Rico</h5>
                        <p class="card-text">Super recomendable, muy profesionales, costos accesibles y super amables. ✨ Mi gatita es super inquita pero con la doctora se porta bien y se queda tranquila ☺️.
                        </p>
                      </div>
                    </div>
                    <br>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <img src="public/images/Testimonios/Testimonio9.jpg" height="220px" class="card-img-top" alt="Vacunación veterinaria">
                      <div class="card-body" style="background-color:rgb(253, 218, 247);">
                        <h5 class="card-title">Natalia Romero</h5>
                        <p class="card-text">Lo recomiendo al 100%, siempre dan su servicio con mucha amabilidad y profesionalismo.</p>
                      </div>
                    </div>
                <br>
          </div>
        </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </div>
</section>


<section class="mapa" style="background-color: #fddaf7;">
  <div class="container">
    <br><br><h1 style="text-align: center;">Encuentranos aqui</h1> <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5079.324437260504!2d-100.26221142783038!3d25.81595101314716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662ed166b2e32a5%3A0x69fe343c250525b2!2sCl%C3%ADnica%20Veterinaria%20Laykman!5e0!3m2!1ses-419!2smx!4v1729791883865!5m2!1ses-419!2smx" 
     width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <br><br>
</section>

<section class="contactos" style="background-image: url('../veterinariaLaykman/public/images/fondo5.1.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <br><br><h1 style="text-align: center;">Contactanos</h1> <br><br>
  <div class="row">
    <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <center><b>Escribenos aqui</b></center>
          </div>
          <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                  <label for=""><b>Nombre</b></label>
                  <input type="text" class="form-control" placeholder="Escribre tu nombre...">
                </div>
                <br>
                <div class="form-group">
                  <label for=""><b>Correo</b></label>
                  <input type="email" class="form-control" placeholder="Escribre tu correo...">
                </div>
                <br>
                <div class="form-group">
                  <label for=""><b>Mensaje</b></label>
                  <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <hr>
                  <div class="d-grid gap-2">
                  <button class="btn" type="submit" style="background-color: #6f2479; color: white;">Enviar</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col md 4"></div>
  </div>
  <br><br>
</section>

<?php
include ('layout/parte2.php');
include ('admin/layout/mensaje.php');
?>