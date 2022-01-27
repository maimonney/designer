<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mailen Monney</title>
    <link rel="icon" href="imagen/isoMM.ico">
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anony"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="mail.php">
</head>

<body>
    <header>
        <div id="particles-js"></div>
        <div id="cont_carga">
            <div id="carga"></div>
            <div id="carga_img">
                <img src="imagen/isoMM.png" alt="logo">
            </div>
        </div>

        <nav class="barra_navegacion" id="nav">
            <ul class="nav_ul">
                <li class="nav_li"><a href="index.html">Inicio</a></li>
                <li class="nav_li"><a href="contacto.html">Contacto</a></li>
                <li class="nav_li"><a href="trabajos.html">Trabajos</a></li>
            </ul>
            <ul class="nav_ul">
                <li class="nav_li">
                    <h1>Mailen Monney</h1>
                </li>
            </ul>
            <ul class="nav_ul">
                <li class="nav_li_red"><a href="https://www.tiktok.com/@321xmaix123?lang=es" target="_blank"><i class=" fab fa-tiktok"></i></a></li>
                <li class="nav_li_red"> <a href="https://www.pinterest.es/mailenmonney/_saved/" target="_blank"><i class=" fab fa-pinterest"></i></a></li>
                <li class="nav_li_red"><a href="https://www.instagram.com/maimonney/" target="_blank"><i class=" fab fa-instagram"></i></a></li>
                <li class="nav_li_red"><a href="https://www.facebook.com/mailen.monney" target="_blank"><i class=" fab fa-facebook-f"></i></a></li>
            </ul>
        </nav>
        <div class="responsive_nav">
            <div class="nav_responsive_btn">
                <input type="checkbox" id="toggle">
                <label for="toggle" class="btn btn1"><i class="fas fa-bars"></i></label>
                <label for="toggle" class="btn2"><i class="fas fa-times"></i></label>
                <nav class="nav_responsive">
                    <ul class="nav_responsive_ul">
                       <div class="link_responsive">
                           <li class="nav_responsive_li nav_color"><a href="index.html">Inicio</a></li>
                        <li class="nav_responsive_li nav_color"><a href="contacto.html">Contacto</a></li>
                        <li class="nav_responsive_li nav_color"><a href="trabajos.html">Trabajos</a></li>
                        <li class="nav_responsive_li nav_color"><a href="https://www.tiktok.com/@321xmaix123?lang=es" target="_blank"><i class=" fab fa-tiktok"></i></a></li>
                        <li class="nav_responsive_li nav_color"> <a href="https://www.pinterest.es/mailenmonney/_saved/" target="_blank"><i class=" fab fa-pinterest"></i></a></li>
                        <li class="nav_responsive_li nav_color"><a href="https://www.instagram.com/maimonney/" target="_blank"><i class=" fab fa-instagram"></i></a></li>
                        <li class="nav_responsive_li nav_color"><a href="https://www.facebook.com/mailen.monney" target="_blank"><i class=" fab fa-facebook-f"></i></a></li>
                       </div>
                       <div class="logos_responsive">
                           <li class="nav_responsive_li logo_p_nav"><a href=""></a><img src="imagen/papalotl/papalotl.png" alt="logo papalotl"></li>
                           <img src="imagen/negroMM.png" alt="logo" class="logo_nav">
                       </div>
                    </ul>
                </nav>
            </div>
            <h1>Mailen Monney</h1>
        </div>
    </header>

    <main class="contacto">
        <section>
            <h1>Mis redes sociales</h1>
            <div class="selection">
                <ul class="ul_redes">
                    <li class="ul_li_redes"><a href="https://www.instagram.com/maimonney/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li class="ul_li_redes"><a href="https://www.pinterest.es/mailenmonney/_saved/" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                    <li class="ul_li_redes"><a href="https://www.facebook.com/mailen.monney" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="ul_li_redes"><a href="https://www.tiktok.com/@321xmaix123?lang=es" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                </ul>
            </div>
        </section>

        <section>
            <div class="flex_container">
                <form class="form" action="mailto:maimonney30@gmail.com" method="post">
                    <div class="form_selecton">
                        <input type="email" class="form_input barra_form" placeholder="Email" name="mail">
                    </div>
                    <div class="form_selecton">
                        <input type="text" class="form_input barra_form" placeholder="Asunto" name="asunto">
                    </div>
                    <div class="form_selecton">
                        <textarea class="form_input barra_form" placeholder="Escribe el mensaje" name="texto"></textarea>
                    </div>
                    <button class="bn2 bn20" name="enviar">Enviar</button>
                </form>
                <div class="form_img">
                    <div class="img_contenedor">
                        <img src="imagen/yo.JPG" alt="mi foto">
                    </div>
                </div>
            </div>
        </section>
        <a href="#nav" class="arrow"><i class="fas fa-arrow-alt-circle-up"></i></a>
    </main>

    <footer class="pie_de_pagina">
        <img src="imagen/negroMM.png" alt="logo" class="pie_img">
        <ul>
            <li class="pie_de_pagina_li"><a href="index.html">Inicio</a></li>
            <li class="pie_de_pagina_li"><a href="contacto.html">Contacto</a></li>
            <li class="pie_de_pagina_li"><a href="trabajos.html">Trabajos</a></li>
        </ul>
        <ul>
            <li class="pie_li_red"><a href="https://www.tiktok.com/@321xmaix123?lang=es" target="_blank"><i class="iconos_pie fab fa-tiktok"></i></a></li>
            <li class="pie_li_red"> <a href="https://www.pinterest.es/mailenmonney/_saved/" target="_blank"><i class="iconos_pie fab fa-pinterest"></i></a></li>
            <li class="pie_li_red"><a href="https://www.instagram.com/maimonney/" target="_blank"><i class="iconos_pie fab fa-instagram"></i></a></li>
            <li class="pie_li_red"><a href="https://www.facebook.com/mailen.monney" target="_blank"><i class="iconos_pie fab fa-facebook-f"></i></a></li>
        </ul>
        <a href="contacto.html" class="mail">maimonney30@gmail.com</a>
    </footer>
    <script src="js/particles.min.js"></script>
    <script src="js/index.js"></script>
</body></html>
