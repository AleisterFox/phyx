<!DOCTYPE html>
<html lang="es" xml:lang="es" style="overflow-x: visible">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Molcajete" />
    <meta name="description" content="Pediatra especializada en infectología, brindando atención integral y especializada para el diagnóstico y tratamiento de enfermedades infecciosas en niños. Comprometida con la salud y bienestar de los más pequeños, ofreciendo cuidado médico de alta calidad." />

    <meta name="Keywords" content="Pediatra infectóloga, infectología pediátrica, enfermedades infecciosas en niños, atención pediátrica, salud infantil, cuidado médico infantil, especialista en infecciones pediátricas, diagnóstico de infecciones en niños, tratamiento de infecciones pediátricas, pediatría especializada." />

    <meta name="robots" content="all" />
    <meta property="og:title" content="PHYX | MOVEMENT PERFORMANCE CENTER" />
    <meta property="og:description" content="Pediatra especializada en infectología, brindando atención integral y especializada para el diagnóstico y tratamiento de enfermedades infecciosas en niños. Comprometida con la salud y bienestar de los más pequeños, ofreciendo cuidado médico de alta calidad." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="../img/icono.png" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <meta property="og:site_name" content="PHYX | MOVEMENT PERFORMANCE CENTER" />
    <meta name="msapplication-TileColor" content="rgb(16, 48, 55)" />
    <meta name="theme-color" content="rgb(16, 48, 55)" />
    <link rel="canonical" href="https://audiologiaintegral.com.mx">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "CommunityHealth",
            "name": "Dra.Sayda Hinojosa",
            "image": "https://audiologiaintegral.com.mx/img/logo.png",
            "@id": "",
            "url": "https://audiologiaintegral.com.mx/",
            "telephone": "7531394249",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Mariano Matamoros 158",
                "addressLocality": "Lázaro Cárdenas",
                "postalCode": "60950",
                "addressCountry": "MX"
            },
            "sameAs": [
                "https://www.facebook.com/apoyosauditivosintegrales",
                "https://www.instagram.com/audiologiaintegrallzc"
            ]
        }
    </script>

    <?php include 'elements/estilos.php' ?>

    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css" />
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css" />
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <title>PHYX | MOVEMENT PERFORMANCE CENTER</title>
</head>

<body>
    <div class="whatsapp">
        <a href="https://wa.link/d53e1z" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>

    <?php include 'elements/loader.php' ?>

    <?php include 'elements/header.php' ?>

    <main>
        <section id="portada-servicio">
            <div class="container">
                <div class="texto">
                    <h3>Servicio</h3>
                    <h1>Magnetoterapia</h1>
                </div>
                <div class="bg">
                    <figure>
                        <img src="img/servicio1.png" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <section id="servicio-descripcion">
            <div class="container">
                <div class="left">
                    <p>Modalidad terapéutica basada en ondas electromagnéticas empleada para la regeneración de tejidos (hueso, tendón, ligamento y músculo). Edades en las que se puede utilizar.</p>
                    <br><br>
                    <p>
                        Tiempo de seguimiento: 1 mes <br>
                        Tiempo de aplicación: 30min <br>
                        Centro en donde se encuentra: Ecatepec
                    </p>
                    <h3>Indicaciones:</h3>
                    <ul>
                        <li>Fracturas</li>
                        <li>Esguinces</li>
                        <li>Osteoporosis</li>
                        <li>Lesión de ligamentos</li>
                        <li>Desgarros musculares</li>
                    </ul>
                </div>
                <div class="right">
                    <figure>
                        <img src="img/redcord.jpg" alt="">
                    </figure>
                </div>
            </div>
        </section>

        <section id="galeria">
            <div class="glide" id="servicio-slider">
                <div data-glide-el="controls" id="controls">
                    <button data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
                    <button data-glide-dir=">"><i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <figure>
                                <img src="img/servicio-basico.jpg" alt="">
                            </figure>
                        </li>

                    </ul>
                </div>

            </div>
        </section>

        <section id="banner" class="two">
            <div class="container">
                <div class="bg">
                    <figure>
                        <img src="img/banner2.jpg" alt="">
                    </figure>
                </div>
                <h2>¿COMENZAMOS?</h2>
                <a href="" class="button">Contacto</a>
            </div>
        </section>
    </main>

    <?php include 'elements/footer.php' ?>

    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/loader.js"></script>
    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

    <script>
        var servicioSlider = new Glide("#servicio-slider", {
            type: "carousel",
            perView: 3,
            breakpoints: {
                1080: {
                    perView: 2
                },
                800: {
                    perView: 1
                }
            },
            autoplay: 3000,
            animationDuration: 1000,
            animationTimingFunction: "ease",
        });


        servicioSlider.mount();
    </script>

</body>

</html>