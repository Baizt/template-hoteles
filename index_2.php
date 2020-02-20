<?php
    $info_hotel = array(
        'nombre'            =>  'Hotel Galería',
        'logo'              =>  'logo.png',
        'ciudad'            =>  'Macuspana',
        'estado'            =>  'Tabasco',
        'direccion'         =>  'Prol. de Moctezuma No. 590 Col. Hernán Cortés, Macuspana TAB.',
        'telefono'          =>  '53408820',
        'telefono_txt'      =>  '53 40 88 20',
        'whatsapp'          =>  '5540689416',
        'whatsapp_txt'      =>  '55 40 68 94 16',
        'whatsapp_msj'      =>  str_replace("/\s+/", "","Hola me gustaría obtener informes sobre sus habitaciones"),
        'correo'            =>  'albaizt@gmail.com',
        'redes_sociales'    =>  [
                                'facebook' => [
                                        "icono" => "facebook",
                                        "nombre"=> "Facebook",
                                        "url"   =>'https://www.facebook.com',
                                ],
                                'instagram'=> [
                                        "icono" => "instagram",
                                        "nombre"=> "Instagram",
                                        "url"   => 'https://www.instagram.com',
                                ],
                                'twitter'  => [
                                        "icono" => "twitter",
                                        "nombre"=> "Twitter",
                                        "url"   => 'https://www.twitter.com',
                                ],
                                'youtube'  => [
                                        "icono" => "youtube",
                                        "nombre"=> "Youtube",
                                        "url"   =>'https://www.youtube.com',
                                ],
                            ]
    );

    $img_ini = array(
        "imagen"  => "img-ini.jpg",
        "nombre" => "Fachada del Hotel",
    );

    $video = array(
        "url"  => "https://www.youtube.com/embed/N-Yu7MDxlx4",
        "nombre" => "Video de Presentación",
    );

    $servicios = array(
        array(
            "icono"  => "aireacondicionado",
            "nombre" => "Aire Acondicionado",
            "texto"  => "Gratis en todo el hotel, con buena covertura y velocidad.",
        ),
		array(
			"icono"  => "alberca",
			"nombre" => "Alberca",
			"texto"  => "Techada con agua caliente abierta de 8am a 6pm.",
		),
		array(
			"icono"  => "estacionamiento",
			"nombre" => "Estacionamiento",
			"texto"  => "Gratis, con seguridad las 24 hrs.",
		),
        array(
            "icono"  => "internet",
            "nombre" => "Wi-Fi",
            "texto"  => "Gratis en todo el hotel, con buena covertura y velocidad.",
        ),
        array(
            "icono"  => "bar",
            "nombre" => "Bar",
            "texto"  => "Dando servicio desde las 8pm hasta las 3am.",
        ),
        array(
            "icono"  => "cafeteria",
            "nombre" => "Cafeteria",
            "texto"  => "Cuenta con deliciosas bebidas y botanas, abierta de 9 a 9.",
        ),
        array(
            "icono"  => "jardin",
            "nombre" => "Jardín",
            "texto"  => "Ideal para los pequeños del hogar, con juegos y areas para correr.",
        ),
        array(
            "icono"  => "restaurante",
            "nombre" => "Restaurante",
            "texto"  => "Con horario desde las 7am hasta las 10pm.",
        ),
        array(
            "icono"  => "tv",
            "nombre" => "T.V.",
            "texto"  => "Tiene servicio de cable con más de 100 canales.",
        ),
        array(
            "icono"  => "tours",
            "nombre" => "Tours",
            "texto"  => "Cuentanos tus intereses y te planearemos la mejor ruta para explorar el área.",
        ),
    );

    $habitaciones  = array(
        array(
            "imagenes"      => [
                "room1.jpg",
                "room2.jpg",
            ],
            "nombre"        => "Pet Friendly - Vista al jardín",
            "descripcion"   => "Una habitacion con una cama individual, cuenta con un baño sencillo, con capacidad para el huesped y una persona extra.",
        ),
        array(
            "imagenes"      => [
                "room2.jpg",
                "room1.jpg",
            ],
            "nombre"        => "Estandar con balcon privado",
            "descripcion"   => "Ideal para parejas, cuenta con una cama doble, un baño con tina y una terraza para pasar un momento agradable.",
        ),
        array(
            "imagenes"      => [
                "room1.jpg",
                "room2.jpg",
            ],
            "nombre"        => "Triple - Frente al Mar",
            "descripcion"   => "Cuenta con dos camas dobles con capacidad hasta para 5 personas: 3 huespedes y 2 personas extras, tiene un baño y una terraza",
        ),
    );

    $mapa = "https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d5476.90409821555!2d-99.13274247200724!3d19.433730004993603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x85d1fecd4864aaff%3A0x6bbfb5044e16e6d8!2sCentro%20Hist%C3%B3rico%20de%20la%20Cdad.%20de%20M%C3%A9xico%2C%20Centro%2C%2006000%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!3m2!1d19.4326018!2d-99.1332049!5e0!3m2!1ses!2smx!4v1580357588904!5m2!1ses!2smx";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="icon" href="sources/favico.png" type="image/gif" sizes="16x16">

        <link rel="stylesheet" href="css/main_2.css">
        <link rel="stylesheet" href="css/icomoon/style.css">
        <link rel="stylesheet" type="text/css" href="vendor/slick-1.8.1/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="vendor/slick-1.8.1/slick/slick-theme.css"/>
		
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-migrate-3.1.0.js"></script>
		<script type="text/javascript" src="vendor/slick-1.8.1/slick/slick.min.js"></script>
		<script type="text/javascript">var motor_widget=(function(){ var jswb=document.createElement("script"); jswb.type="text/javascript"; jswb.async=true; jswb.id='mtr_wdg_script'; jswb.dataset.btn_mvl_btm="150px"; jswb.dataset.btn_dsk_top="140px"; jswb.dataset.fnt_color="#fff"; jswb.dataset.color_btn="#009688"; jswb.dataset.nom='galeria'; jswb.dataset.logo=''; jswb.dataset.lang='es'; jswb.dataset.id_hotel=26579; jswb.src="https://www.zonaturistica.com/js/hoteles/widgetButton.js"; document.getElementsByTagName("head")[0].appendChild(jswb); var fnr=function(fn){ var mr=motor_widget; if(mr.readyList){ mr.ready(fn); } else { mr.rl=mr.rl || []; mr.rl.push(fn); } }; fnr.ready=fnr; return fnr; })();</script>

        <title><?php echo $info_hotel['nombre']." de ".$info_hotel['ciudad'].", ".$info_hotel['estado']; ?></title>
    </head>
    <body>
            <!--Header-->
                <header>
                    <div>
                        <img class="logo" src="sources/<?php echo $info_hotel['logo']; ?>" alt="Logo">
                    </div>
                    <div class="nombre_hotel">
                        <h1><span><?php echo $info_hotel['nombre']; ?></span></h1>
                    </div>
                    <div class="tels-dsk">
                        <?php if($info_hotel["telefono_txt"]){ ?>
                            <div>
                                <span class="icon-telefono"></span> <?php echo $info_hotel['telefono_txt']; ?>
                            </div>
                        <?php }

                        if($info_hotel["whatsapp_txt"]){ ?>
                            <div>
                                <img src="sources/whatsapp.png" alt="Whatsapp"> <?php echo $info_hotel['whatsapp_txt']; ?>
                            </div>
                        <?php } ?>
                    </div>
                </header>
            <!--//Header-->

            <!-- Menú Móvil -->
                <div id="menu-movil">
                    <a href="#seccion-galeria" class="opcion-menu" data-seccion="galeria" id="galeria-link">
                        <div class="container">
                            <div class="text">
                                Galeria
                            </div>
                            <hr>
                        </div>
                    </a>

                    <a href="#seccion-video" class="opcion-menu" data-seccion="video" id="video-link">
                        <div class="container">
                            <div class="text">
                                Video
                            </div>
                            <hr>
                        </div>
                    </a>

                    <a href="#seccion-servicios" class="opcion-menu" data-seccion="servicios" id="servicios-link">
                        <div class="container">
                            <div class="text">
                                Servicios
                            </div>
                            <hr>
                        </div>
                    </a>

                    <a href="#seccion-habs" class="opcion-menu" data-seccion="habs" id="habs-link">
                        <div class="container">
                            <div class="text">
                                Habitaciones
                            </div>
                            <hr>
                        </div>
                    </a>

                    <a href="#seccion-contacto" class="opcion-menu" data-seccion="contacto" id="ubicacion-link">
                        <div class="container">
                            <div class="text">
                                Ubicación
                            </div>
                            <hr>
                        </div>
                    </a>

                    <a href="#seccion-contacto" class="opcion-menu" data-seccion="contacto" id="contacto-link">
                        <div class="container">
                            <div class="text">
                                Contacto
                            </div>
                            <hr>
                        </div>
                    </a>
                </div>
            <!-- //Menú Móvil -->
        
        <!--Slider-->
            <div id="seccion-galeria" class="seccion">
                <div class="imagen-inicio">
                    <img id="img-gal-ini" src="sources/<?php echo $img_ini["imagen"]; ?>" alt="<?php echo $img_ini["nombre"]; ?>">
                </div>
            </div>
        <!--//Slider-->

        <!--Descripción-->
            <div id="seccion-descripcion" class="seccion">
                <p>El hotel es un edificio pequeño y colonial. Disfruta de la limpieza, amabilidad y comodidad. Atención personalizada.</p>
                <p>Contamos con 2 salas de juntas con capacidad máxima para 30 personas y con 1 salón para eventos con capacidad máxima para 70 personas.</p>
            </div>
        <!--//Descripción-->

        <!--Servicios-->
            <div id="seccion-servicios" class="seccion">
                <h2><span>Servicios</span></h2>
                <div class="row-servicio">

                    <?php foreach ($servicios as $key_serv => $servicio) { ?>
                        <div id="servicio-<?php echo $key_serv; ?>" class="servicio">
                            <span class="icon-servicio-<?php echo $servicio["icono"]; ?>"></span>
                            <div class="servicio-container">
                                <h3 class="titulo-servicio"><?php echo $servicio["nombre"]; ?>:</h3>
                                <span class="info-servicio"><?php echo $servicio["texto"]; ?></span>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        <!--//Servicios-->
        
        <!--Habitaciones-->
            <div id="seccion-habs" class="seccion">
                <h2><span>Habitaciones</span></h2>
                <div class="row-habs">

                    <?php foreach ($habitaciones as $key_hab => $habitacion) { ?>
                        <div id="hab-<?php echo $key_hab; ?>" class="hab">
                            <div class="galeria-hab galeria">
                                <?php foreach ($habitacion["imagenes"] as $imagen) { ?>
                                    <div><img src="sources/<?php echo $imagen; ?>" alt="<?php echo $habitacion["nombre"]; ?>"></div>
                                <?php } ?>
                            </div>
                            <div class="descripcion">
                                <h3><?php echo $habitacion["nombre"]; ?></h3>
                                <?php echo $habitacion["descripcion"]; ?>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        <!--//Habitaciones-->

    <!--//Contacto-->
        <div id="seccion-contacto" class="seccion">
            <div>
                <h2><span>Ubicación</span></h2>
                <iframe src="<?php echo $mapa; ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            
            <div>
                <h2><span>Contacto</span></h2>
                <form>
                    <div class="grupo">
                        <label for="nombre">Nombre</label>
						<input type="text" name="nombre" id="nombre">
						
                        <label for="telefono">Teléfono</label>
						<input type="number" name="telefono" id="telefono">
						
                        <label for="email">Email</label>
						<input type="email" name="email" id="email">
						
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                    </div>
                    <div class="grupo-2">
                        <div id="espacio"></div>
                        <div id="campos-rojos">* Favor de validar los campos en color rojo.</div>
                        <div id="envio_fallido">Hubo un problema con el envío por favor intente más tarde.</div>
                        <div id="envio_hecho">Hemos recibido su mensaje, en breve nos pondremos en contacto con usted.</div>
                        <button id="enviar_contacto">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
	<!--//Contacto-->
	
	<!--Botón Arriba-->
		<div id="to_top">
			<div class="arrow-container">
				<span class="icon-ver-arriba"></span>
			</div>
		</div>
	<!--//Botón Arriba-->

    <!--//Footer-->
        <footer id="seccion-footer">
            <div class="contacto">

                <?php if($info_hotel["telefono"]){ ?>
                    <a href="tel:<?php echo $info_hotel["telefono"]; ?>" title="Teléfono">
                        <span class="icon-telefono"></span>
                    </a>
                <?php }

                if($info_hotel["whatsapp"]){ ?>
                    <a href="https://wa.me/52<?php echo $info_hotel["whatsapp"]; ?>?text=<?php echo $info_hotel["whatsapp_msj"]; ?>" title="Whatsapp">
                        <img src="sources/whatsapp.png" alt="Whatsapp" width="23px">
                    </a>
                <?php } ?>

            </div>
            
            <div class="redes-sociales">

                <?php foreach ($info_hotel["redes_sociales"] as $red_social) {
                    if($red_social){ ?>
                        <a target="_blank" href="<?php echo $red_social["url"]; ?>" alt="<?php echo $red_social["nombre"]; ?>" title="<?php echo $red_social["nombre"]; ?>">
                            <span class="icon-<?php echo $red_social["icono"]; ?>"></span>
                        </a>
                    <?php }
                } ?>
                
            </div>
        </footer>
    <!--//Footer-->
    </body>
    <script>
        function moveGaleria(imgs_gal, dir){
            dir = dir || 'next';
            imgs_gal = imgs_gal || [];

            let tmp_img = $('#'+imgs_gal[imgs_gal.length-1].id);
            let tmp_left = parseInt(tmp_img.css('left'), 10);
            let tmp_width = parseInt(tmp_img.width(), 10);
            let tmp_new_left = dir == 'next' ? tmp_left - tmp_width : tmp_left + tmp_width;
            let set_ultima = false;
            let set_primera = tmp_new_left < 0;

            for(let i = 0 ; i < imgs_gal.length ; i++){
                let img = $('#'+imgs_gal[i].id);
                let left = parseInt(img.css('left'), 10);
                let width = parseInt(img.width(), 10);
                let new_left = dir == 'next' ? left - width : left + width;

                if((i == 0 && new_left > 0) || set_ultima){
                    new_left = 0-(imgs_gal.length-(i+1)) * width;
                    set_ultima = true;
                    
                }else if(set_primera){
                    new_left = i * width;
                    set_ultima = false;
                }

                img.animate({left:new_left+"px"})
                //img.css('left', new_left+'px');
            }
        }

        $(document).ready(function(){
            let height = $(window).width() < 600 ? 186.2 : 250;

            // Galería
            $('.galeria-container').slick({
                    arrows:true,
                    autoplay:true,
                    infinite:true,
                    centerMode:true,
                    mobileFirst:true,
                    pauseOnFocus:true,
                    variableWidth:true,
                    //adaptiveHeight:true,
                });
            //-Galería

            //Menú Móvil
            $('#menu-movil-btn').click(function(){
                if($('#menu-movil').height() > 0){
                    let links = $('#menu-movil').children('a');
                    height = links.outerHeight() * links.length;

                    $('#menu-movil').animate({
                        height: '0px'
                    }, 1000, function(){
                        $('#menu-movil').hide();
                    });

                }else{
                    $('#menu-movil').show("fast", function() {
                        $('#menu-movil').animate({
                            height: height+'px'
                        }, 1000);
                    });
                }
            });
            //-Menú Móvil

			//Opciones Menú
				$(".opcion-menu").click(function(e){
					e.preventDefault();
					let id = this.id;
					let seccion = $("#"+id).data("seccion");
					let altura = $("#seccion-"+seccion).offset().top;
					$("html, body").animate({
						scrollTop: altura
					}, 600);
				});
			//-Opciones Menú

            //Info de las Habs
               $('.galeria-hab').slick({
                    arrows:true,
                    autoplay:true,
                    infinite:true,
                    centerMode:true,
                    mobileFirst:true,
                    pauseOnFocus:true,
                    variableWidth:true,
                    //adaptiveHeight:true,
                });
                $(".hab").click(function(){
                    $('#'+this.id).children(".sombra").fadeIn("slow");
                    return false;
                });
                $(".hab").mouseenter(function(){
                    $('#'+this.id).children(".sombra").fadeIn("slow");
                    return false;
                });
            //-Info de las Habs

            //Formulario de Contacto
                $("#enviar_contacto").click(function(e){
                    e.preventDefault();
                    let enviar = true;

                    $("#espacio").show();
                    $("#campos-rojos").hide();
                    $(".campo-vacio").removeClass("campo-vacio")

                    if($("#nombre").val() == "" || typeof $("#nombre").val() == "undefined"){
                        $("#nombre").addClass("campo-vacio");
                        enviar = false;
                    }
                    if($("#email").val() == "" || typeof $("#email").val() == "undefined"){
                        $("#email").addClass("campo-vacio");
                        enviar = false;
                    }
                    if($("#telefono").val() == "" || typeof $("#telefono").val() == "undefined"){
                        $("#telefono").addClass("campo-vacio");
                        enviar = false;
                    }
                    if($("#mensaje").val() == "" || typeof $("#mensaje").val() == "undefined"){
                        $("#mensaje").addClass("campo-vacio");
                        enviar = false;
                    }

                    let datos = {
                        'nombre':	$("#nombre").val(),
                        'email':	$("#email").val(),
                        'telefono':	$("#telefono").val(),
                        'mensaje':	$("#mensaje").val(),
                    };

                    if(enviar){
                        $.ajax({
                            url: "dev/contacto.php",
                            data:datos,
                        }).done(function() {
                            $("#nombre").val("");
                            $("#email").val("");
                            $("#telefono").val("");
                            $("#mensaje").val("");

                        	$("#espacio").hide();
                        	$("#campos-rojos").hide();
                            $("#envio_fallido").hide();
                            $("#envio_hecho").show();

							setTimeout(() => {
                            	$("#envio_hecho").fadeOut('slow', function(){
									$("#espacio").show();
								});
							}, 4000);
                        })
                        .fail(function() {
                       		$("#espacio").hide();
                        	$("#campos-rojos").hide();
                            $("#envio_hecho").hide();
                            $("#envio_fallido").show();
                        })
                        .always(function() {
                            //alert( "complete" );
                        });
                    } else {
                        $("#espacio").hide();
                        $("#campos-rojos").show();
                    }
                });
            //-Formulario de Contacto

			//Botón Arriba
				$("#to_top").click(function(e){
					$("html, body").animate({
						scrollTop: 0
					}, 600);
				});

				$(window).scroll(function(){
					let scroll = document.documentElement.scrollTop;
					if(scroll > 450 && scroll < 2700){
						$("#to_top").fadeIn();
					} else {
						$("#to_top").fadeOut();
					}
				});
			//-Botón Arriba
        });
    </script>
</html>