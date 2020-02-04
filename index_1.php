<?php
    $info_hotel = array(
        'nombre'        =>  'Hotel Galería',
        'logo'          =>  'logo.png',
        'ciudad'        =>  'Macuspana',
        'estado'        =>  'Tabasco',
        'direccion'     =>  'Prueba',
        'telefono'      =>  '5543461790',
        'whatsapp'      =>  '5543461790',
        'whatsapp_msj'  =>  str_replace("/\s+/", "","Hola me gustaría obtener informes sobre sus habitaciones"),
        'correo'        =>  'albaizt@gmail.com',
        'facebook'      =>  'https://www.fb.com',
        'instagram'     =>  'https://www.instagram.com',
        'twitter'       =>  'https://www.twitter.com',
        'youtube'       =>  'https://www.youtube.com',
    );
    $galeria = array(
        array(
            "imagen"  => "gal1.jpeg",
            "nombre" => "Fachada del Hotel",
        ),
        array(
            "imagen"  => "gal2.jpeg",
            "nombre" => "Habitacion Doble",
        ),
        array(
            "imagen"  => "gal3.jpeg",
            "nombre" => "Alberca",
        ),
    );

    $video = array(
            "url"  => "https://www.youtube.com/embed/N-Yu7MDxlx4",
            "nombre" => "Video de Presentación",
    );

    $servicios = array(
        array(
            "icono"  => "Icono",
            "nombre" => "Wi-Fi",
            "texto"  => "Gratis en todo el hotel, con buena covertura y velocidad.",
        ),
        array(
            "icono"  => "Icono",
            "nombre" => "Alberca",
            "texto"  => "Techada con agua caliente abierta de 8am a 6pm.",
        ),
        array(
            "icono"  => "Icono",
            "nombre" => "Bar",
            "texto"  => "Dando servicio desde las 8pm hasta las 3am.",
        ),
        array(
            "icono"  => "Icono",
            "nombre" => "Restaurante",
            "texto"  => "Con horario desde las 7am hasta las 10pm.",
        ),
    );

    $habitaciones  = array(
        array(
            "imagen"        => "room1.jpg",
            "nombre"        => "Sencilla",
            "descripcion"   => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus ratione eum facere veritatis ea, dolores corrupti eligendi, sit porro id natus. Ad voluptatem expedita, possimus corrupti ipsam illo itaque consequatur.",
        ),
        array(
            "imagen"        => "room1.jpg",
            "nombre"        => "Doble",
            "descripcion"   => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus ratione eum facere veritatis ea, dolores corrupti eligendi, sit porro id natus. Ad voluptatem expedita, possimus corrupti ipsam illo itaque consequatur.",
        ),
        array(
            "imagen"        => "room1.jpg",
            "nombre"        => "Triple",
            "descripcion"   => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus ratione eum facere veritatis ea, dolores corrupti eligendi, sit porro id natus. Ad voluptatem expedita, possimus corrupti ipsam illo itaque consequatur.",
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

        <link rel="stylesheet" href="css/main.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-migrate-3.1.0.js"></script>
        <link rel="stylesheet" type="text/css" href="vendor/slick-1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="vendor/slick-1.8.1/slick/slick-theme.css"/>
        <script type="text/javascript" src="vendor/slick-1.8.1/slick/slick.min.js"></script>

        <title><?php echo $info_hotel['nombre']." de ".$info_hotel['ciudad'].", ".$info_hotel['estado']; ?></title>

    </head>
    <body>
        <!--Header-->
            <header>
                <img class="logo" src="sources/<?php echo $info_hotel['logo']; ?>" alt="Logo">
                <div class="nombre_hotel">
                    <h1><span><?php echo $info_hotel['nombre']; ?></span></h1>
                </div>
                <div class="tels-dsk">
                    <?php if($info_hotel["telefono"]){ ?><div>Teléfono: <?php echo $info_hotel['telefono']; ?></div><?php } ?>
                    <?php if($info_hotel["whatsapp"]){ ?><div">Whatsapp: <?php echo $info_hotel['whatsapp']; ?></div><?php } ?>
                </div>
                <div id="menu-movil-btn" class="menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </header>
        <!--//Header-->

        <!-- Menú Móvil -->
        <div id="menu-movil">
            <a href="#seccion-galeria">Galeria</a>
            <a href="#seccion-video">Video</a>
            <a href="#seccion-servicios">Servicios</a>
            <a href="#seccion-habs">Habitaciones</a>
            <a href="#seccion-contacto">Ubicación</a>
            <a href="#seccion-contacto">Contacto</a>
        </div>
        <!-- //Menú Móvil -->
        
        <!--Slider-->
            <div id="seccion-galeria" class="seccion">
                <div class="galeria-container">
                    <?php foreach ($galeria as $key_gal => $img_gal) { ?>
                        <div><img id="img-gal-<?php echo $key_gal; ?>" src="sources/<?php echo $img_gal["imagen"]; ?>" alt="<?php echo $img_gal["nombre"]; ?>"></div>
                    <?php } ?>
                </div>
            </div>
        <!--//Slider-->

        <!--Video-->
            <div id="seccion-video" class="seccion">
                <iframe width="100%" height="auto" alt="<?php echo $video['nombre']; ?>" src="<?php echo $video['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        <!--//Video-->

        <!--Servicios-->
            <div id="seccion-servicios" class="seccion">
                <h2>Servicios</h2>
                <div class="row-servicio">

                    <?php foreach ($servicios as $key_serv => $servicio) { ?>
                        <div id="servicio-<?php echo $key_serv; ?>" class="servicio">
                            <span><?php echo $servicio["icono"]; ?></span>
                            <h3 class="titulo-servicio"><?php echo $servicio["nombre"]; ?></h3 class="titulo-servicio">
                            <p class="info-servicio"><?php echo $servicio["texto"]; ?></p class="info-servicio">
                        </div>
                    <?php } ?>

                </div>
            </div>
        <!--//Servicios-->
        
        <!--Habitaciones-->
            <div id="seccion-habs" class="seccion">
                <h2>Habitaciones</h2>
                <div class="row-habs">

                    <?php foreach ($habitaciones as $key_hab => $habitacion) { ?>
                        <div id="hab-<?php echo $key_hab; ?>" class="hab">
                            <img src="sources/<?php echo $habitacion["imagen"]; ?>" alt="<?php echo $habitacion["nombre"]; ?>">
                            <div class="sombra">
                                <div class="descripción">
                                    <h3><?php echo $habitacion["nombre"]; ?></h3>
                                    <?php echo $habitacion["descripcion"]; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        <!--//Habitaciones-->

    <!--//Contacto-->
        <div id="seccion-contacto" class="seccion">
            <div>
                <h2>Ubicación</h2>
                <iframe src="<?php echo $mapa; ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            
            <div>
                <h2>Contacto</h2>
                <form action="">
                    <div class="grupo">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                    </div>
                    <button>Enviar</button>
                </form>
            </div>
        </div>
    <!--//Contacto-->

    <!--//Footer-->
        <footer id="seccion-footer">
            <div>
                <?php if($info_hotel["telefono"]){ ?><a href="tel:<?php echo $info_hotel["telefono"]; ?>">Teléfono</a><?php } ?>
                <?php if($info_hotel["whatsapp"]){ ?><a href="https://wa.me/52<?php echo $info_hotel["whatsapp"]; ?>?text=<?php echo $info_hotel["whatsapp_msj"]; ?>">Whatsapp</a><?php } ?>
            </div>
            <img class="logo" src="sources/logo.png" alt="Logo">
            <div class="redes-sociales">
                <?php if($info_hotel["facebook"]){ ?><a target="_blank" href="<?php echo $info_hotel["facebook"]; ?>">Facebook</a><?php } ?>
                <?php if($info_hotel["instagram"]){ ?><a target="_blank" href="<?php echo $info_hotel["instagram"]; ?>">Instagram</a><?php } ?>
                <?php if($info_hotel["twitter"]){ ?><a target="_blank" href="<?php echo $info_hotel["twitter"]; ?>">Twitter</a><?php } ?>
                <?php if($info_hotel["youtube"]){ ?><a target="_blank" href="<?php echo $info_hotel["youtube"]; ?>">Youtube</a><?php } ?>
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

            //Info de las Habs
                $(".sombra").click(function(){
                    $('#'+this.parentNode.id).children(".sombra").fadeOut("slow");
                    return false;
                });
                $(".sombra").mouseleave(function(){
                    $('#'+this.parentNode.id).children(".sombra").fadeOut("slow");
                    return false;
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

        });
    </script>
</html>