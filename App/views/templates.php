<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 3 Recursos HTML y SCSS</title>
    <?php echo vite_tags('src/js/templates.js'); ?>
</head>
<body>
    <!-- NAV -->
    <?php include $appRoot . '/includes/nav.php' ?>


    <!-- HERO01 -->
    <header>        
        <h1>Proyecto 3</h1>
        <div>            
            <img src="https://dummyimage.com/500x300" alt="">
        </div>
        <a href="" class="boton">CTA</a>    
    </header>

    <main>
        

        <!-- Sección 01 -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>Sección 01</h2>
            </div>
            <article>
                <!-- hijo 1 -->
                <div>
                    <h3>Encabezado h3</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae vitae amet rem earum maiores similique provident dolorem sunt odit sequi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="https://dummyimage.com/40x40" alt="">
                            <h4>Encabezado h4</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iusto ipsam quam porro, rem non nulla distinctio eligendi id possimus.</p>
                            <a href="" class="moduloBoton01">
                                <span>Módulo Botón 01</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="https://dummyimage.com/40x40" alt="">
                            <h4>Encabezado h4</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iusto ipsam quam porro, rem non nulla distinctio eligendi id possimus.</p>
                            <a href="" class="moduloBoton01">
                                <span>Módulo Botón 01</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="https://dummyimage.com/1000x1500" alt="">
                </div>
            </article>
        </section>


        <!-- Sección sect02 -->
        <section class="sect02"> 
            <div class="h2Especial">
                <span></span>
                <h2>Sección 02</h2>
            </div>
            <div class="sect02-content">
                <ul>
                    <li>
                        <a href="tel:+34943123123" title="Llámanos al 943 123 123" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/call.svg" alt="Llámanos al 943 123 123" title="Llámanos al 943 123 123" width="20" height="20"> 
                            <span>943 123 123</span>
                        </a>
                    </li>

                    <li>
                        <a href="https://api.whatsapp.com/send/?phone=34628749350" title="Escríbenos al whatsapp 600 123 123" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-whatsapp.svg" alt="Escríbenos al whatsapp 600 123 123" title="Escríbenos al whatsapp 600 123 123" width="20" height="20"> 
                            <span>600 123 123</span>
                        </a>
                    </li>       

                    <li>
                        <a href="mailto:aranaz@gmail.com" title="Mándanos un correo a la siguiente dirección correo@correo.com" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="Mándanos un correo a la siguiente dirección correo@correo.com" title="Mándanos un correo a la siguiente dirección correo@correo.com" width="20" height="20"> 
                            <span>correo@correo.com</span>
                        </a>
                    </li>

                    <li>
                        <a href="https://maps.app.goo.gl/EB3bPiGW1yfoJg3p9" title="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/location.svg" alt="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" title="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" width="20" height="20"> 
                            <span>Paseo Portuetxe 23b<br>413 Donostia</span>
                        </a>
                    </li>

                    
                </ul>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10923.690028247327!2d-2.0104242426659686!3d43.296692429058076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b013f0513629%3A0x57e4ff3311f619d9!2s%C3%81rea%20Escuela%20de%20Dise%C3%B1o%20y%20Nuevas%20Tecnolog%C3%ADas!5e1!3m2!1ses!2ses!4v1749486263845!5m2!1ses!2ses" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section>
            <!-- H2 especial -->
            <div class="h2Especial">
                <span></span>
                <h2>Encabezado h2 de la primera sección</h2>
            </div>

            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Artículo 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

            <!-- Artículo 02 -->
            <article class="art02">

                <div class="textos">
                    <h3>Artículo 02</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae repudiandae obcaecati magni odio eius maxime iste expedita? Cum vel ad nihil laborum. Nobis unde aperiam rerum pariatur dignissimos, quam consequatur.</p>
                    <!-- <a href="" class="boton">Más info</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>

                <div class="imagenes">
                    <img src="https://dummyimage.com/900x900" alt="" title="">
                    <img src="https://dummyimage.com/900x900" alt="" title="">
                    <img src="https://dummyimage.com/900x900" alt="" title="">
                </div>

            </article>

            <!-- Artículo 02-bis -->
            <article class="art02-bis">
                <div class="textos">
                    <h3>Artículo 02-bis</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia pariatur voluptatum molestias consequatur neque, aliquid harum iusto deleniti porro nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit praesentium impedit dolorum veritatis accusamus, adipisci mollitia eaque molestiae officiis at.</p>
                    <a href="./productos-panaderia.php" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Lorem ipsum dolor sit amet" title="Lorem ipsum">
                    </a>
                </div>

                <div class="imagenes">
                    <a href="<?=$_ENV['RUTA']?>/es/productos" title="Lorem ipsum dolor sit amet">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="Lorem ipsum dolor sit amet" title="Lorem ipsum dolor sit amet">
                        <h4>Lorem ipsum</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos" title="Lorem ipsum dolor sit amet">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="Lorem ipsum dolor sit amet" title="Lorem ipsum dolor sit amet">
                        <h4>Lorem ipsum</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos" title="Lorem ipsum dolor sit amet">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="Lorem ipsum dolor sit amet" title="Lorem ipsum dolor sit amet">
                        <h4>Lorem ipsum</h4>
                    </a>
                </div>
            </article>

            <!-- Artículo 03 -->
            <article class="art03">
                
                <h3>Artículo 03</h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro impedit deleniti cupiditate laudantium facere explicabo quo doloremque amet, molestias molestiae cum beatae, dolorum temporibus similique itaque dolore. Assumenda, possimus laborum.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae dolor a asperiores recusandae necessitatibus. Consequatur, molestiae ducimus? Eum, assumenda labore.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

            </article>

            <!-- artículo 4 -->
            <article class="art04">
                <h3>Artículo 04</h3>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h4>Encabezado h4</h4>
                        <img src="https://dummyimage.com/90x90" alt="" title="">                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore libero exercitationem omnis quod placeat cumque nobis aspernatur illo! Accusamus, labore.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Encabezado h4</h4>
                        <img src="https://dummyimage.com/90x90" alt="" title="">                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore libero exercitationem omnis quod placeat cumque nobis aspernatur illo! Accusamus, labore.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Encabezado h4</h4>
                        <img src="https://dummyimage.com/90x90" alt="" title="">                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore libero exercitationem omnis quod placeat cumque nobis aspernatur illo! Accusamus, labore.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Encabezado h4</h4>
                        <img src="https://dummyimage.com/90x90" alt="" title="">                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore libero exercitationem omnis quod placeat cumque nobis aspernatur illo! Accusamus, labore.</p>
                        <span class="ralla"></span>
                    </div>
                </div>
            </article>

            <!-- artículo 05 -->
            <article class="art05">
                <h3>Artículo 05</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis porro libero doloribus necessitatibus explicabo nostrum, itaque excepturi reprehenderit magni alias.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et qui laboriosam voluptas, maxime possimus ab dolor aliquam nobis repellendus voluptatem vero sed explicabo totam quaerat dolores veritatis fuga quibusdam cumque.</p>
                <a href="" class="boton">CTA</a>
            </article>

            <!-- artículpo 06 -->
            <article class="art06">
                <div>
                    <h3>Artículo 06</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolorem soluta molestiae autem ipsam deleniti adipisci. Eius adipisci quo, quae officia quod rerum sequi, aliquid autem perspiciatis deleniti, laudantium nihil.</p>
                    <a href="#" title="" class="boton">CTA</a>
                </div>     
            </article>

            <!-- artículo 07 -->
            <article class="art07">
                <h3>Artículo 07</h3>

                <img
                srcset="
                https://dummyimage.com/900x900 900w,
                https://dummyimage.com/1800x1100 1800w,
                https://dummyimage.com/2560x1200 2560w
                "
                sizes="
                (width <= 900px) 800px,
                (width <= 1500px) 1200px,
                2560px
                "
                src="https://dummyimage.com/900x900"
                width="900"
                alt="" 
                title="">

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum voluptatum natus ea veritatis harum qui eaque atque exercitationem laudantium? Inventore illum explicabo vero error laborum beatae atque eligendi fugit possimus repudiandae, dolor cupiditate itaque tempore! Et maxime, laboriosam consectetur, similique sunt corporis eum eveniet officia rerum ducimus molestias dolorum libero.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas pariatur necessitatibus optio inventore esse ipsum ad eveniet sequi iusto distinctio enim assumenda nostrum explicabo facere quo numquam, quod eius hic.</p>

                <a href="" class="boton">CTA</a>

            </article>
          

            <!-- artForm -->
            <article class="artForm">
                <h3>Artículo Formulario</h3>

                <!-- Al abrir este otro archivo, genero otro scope, se reseta y limpia la memoria en el servidor -->
                <form action="<?=base_path()?>/app/artForm" method="post">

                    <?php
                    if( isset($_GET['campo']) ){
                        // si entro es que viene un error marcado en la url con query string
                        $campo = $_GET['campo'];
                        $error = $_GET['error'];
                        $nombre = $_GET['nombre'];
                        $tel = $_GET['tel'];
                        $email = $_GET['email'];
                        $mensaje = $_GET['mensaje'];
                        // echo "<p class='error'>Hay un error en el campo $campo de tipo $error</p>";
                    }
                    ?>

                    <span class="error"><?php if(isset($campo) && $campo == "nombre"){echo sprintf("Hay un error en el campo %s de tipo %s", $campo, $error);} ?></span>
                    <label for="nombre">Nombre *</label>
                    <!-- <input type="text" name="nombre" id="nombre" placeholder="* Escribe tu nombre" minlength="3" maxlength="40" required > -->
                    <input type="text" class='<?php if(isset($campo) && $campo == "nombre"){ echo "inputError";} ?>' name="nombre" id="nombre" placeholder="* Escribe tu nombre" value="<?php if(isset($nombre)){echo $nombre;}?>">

                    <span class="error"><?php if( isset($campo) && $campo == "telefono"){echo sprintf("Hay un error en el campo %s de tipo %s", $campo, $error);} ?></span>
                    <label for="tel">Teléfono</label>
                    <input type="tel" class='<?php if(isset($campo) && $campo == "telefono"){ echo "inputError";} ?>' name="tel" id="tel" placeholder="Aquí tu teléfono" value="<?php if(isset($tel)){echo $tel;}?>">


                    <span class="error"><?php if( isset($campo) && $campo == "email"){echo sprintf("Hay un error en el campo %s de tipo %s", $campo, $error);} ?></span>
                    <label for="email">Email *</label>
                    <input type="email" class='<?php if(isset($campo) && $campo == "email"){ echo "inputError";} ?>' name="email" id="email" placeholder="* Correo electrónico" value="<?php if(isset($email)){echo $email;}?>">


                    <span class="error"><?php if( isset($campo) && $campo == "mensaje"){echo sprintf("Hay un error en el campo %s de tipo %s", $campo, $error);} ?></span>
                    <label for="mensaje">Comentarios</label>
                    <textarea name="mensaje" class='<?php if(isset($campo) && $campo == "mensaje"){ echo "inputError";} ?>' id="mensaje" placeholder="Escribe aquí tu mensaje"><?php if(isset($mensaje)){echo $mensaje;}?></textarea>

                    <span class="error"><?php if( isset($campo) && $campo == "terminos"){echo "Para poder enviar una consulta, debes aceptar los términos";} ?></span>
                    <div>
                        <input type="checkbox" name="terminos" id="aceptarTerminos">
                        <label for="aceptarTerminos">Aceptar <a href="<?=$_ENV['RUTA']?>/es/terminos-legales">términos y condiciones de privacidad</a></label>
                    </div>

                    <!-- CAPTCHA -->
                    <span class="error"><?php if(isset($campo) && $campo == "captcha"){echo "No has resuelto correctamente el Captcha";} ?></span>
                    <div>
                        <label for="respUser">Resuelve:</label>

                        <!-- campos que rellenamos desde js con números random -->
                        <span id="num1">XX</span>
                        <span>+</span>
                        <span id="num2">XX</span>

                        <!-- campo que debe rellenar el usuario con la solución -->
                        <input type="text" name="respUser" id="respUser">

                        <!-- campo oculto con la respuesta correcta asignada desde js -->
                        <input type="hidden" name="respSystem" id="respSystem" value="XXXX">
                    </div>

                    <!-- input oculto donde el value es el valor de $lang, ergo el idioma -->
                    <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">
                    <!-- otro input oculto -->
                    <input type="text" name="inputUrl" value="<?= $url?>" style="display:none;">


                    <input type="submit" value="ENVIAR" class="boton">

                    <p>* Campos obligatorios</p>

                </form>

            </article>

            <!-- artForm01 -->
            <article class="artForm01" id="artForm01">

                <?php
                // comprobar si hay variables get en la URL
                // si hay variables las voy a recoger aquí
                // si recojo variables, las usaré en el formulario para mostrar mensajes, por ejemplo de error, por ejemplo losvalorfes que el user había puesto antes en el formulario
                // Recoger el error si existe error, y mostrar el mensaje con el error
                // Depende del error, lo mostraremos encima del input donde está el error
                // Como recogemos los value de los input que el user mandó al backend, volvemos a rellenar los values de los input con esos valores, para que se respete el UX

                if(isset($_GET['error'])){
                    $error = $_GET['error'];
                    $campo = $_GET['campo'];
                    $nombre = $_GET['nombre'];
                    $telefono = $_GET['tel'];
                    $email = $_GET['email'];
                    $mensaje = $_GET['mensaje'];
                }

                ?>

                <h3>Artículo Formulario 01</h3>
                <div>
                    <div class="contenedor-form">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="">
                    <?php
                    if(!isset($_GET['envio'])){              
                    ?>
                    <form action="<?=base_path()?>/app/artForm01" method="post" id="idForm">

                        <?php
                        if(isset($error)){   
                        ?>
                        <p class="error">Hay un error en el campo <?=$campo?> de tipo <?= $error?></p>
                        <?php
                        }
                        ?>

                        <!-- nombre -->
                        <label for="nombre">Nombre *</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Escribe aquí tu nombre *" value="<?php if(isset($error)){echo $nombre;}?>">

                        <!-- teléfono -->
                        <label for="telefono">Teléfono *</label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Escribe aquí tu teléfono *" value="<?php if(isset($error)){echo $telefono;}?>">

                        <!-- Correo -->
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" placeholder="Escribe aquí tu correo electrónico" value="<?php if(isset($error)){echo $email;}?>">

                        <!-- Mensaje -->
                        <label for="mensaje">Escribe tu mensaje</label>
                        <textarea name="mensaje" id="mensaje" placeholder="Escribe aquí tu mensaje"><?php if(isset($error)){echo $mensaje;}?></textarea>

                        <!-- términos -->
                        <div class="horizontal">
                        <label for="terminos">Aceptar términos y condiciones de privacidad</label>
                        <input type="checkbox" name="terminos" id="terminos">
                        </div>
                        

                        <!-- captcha -->
                        <label for="respuesta">Resuelve</label>
                        <div class="horizontal">
                        <span id="num1Form01">3</span>
                        <span id="operadorForm01">+</span>
                        <span id="num2Form01">7</span>
                        <input type="text" name="respUser" id="respuestaForm01" placeholder="Respuesta" autocomplete="off">
                        <input type="hidden" name="respSystem" id="respSystemForm01" value="">
                        </div>                    

                        <input type="hidden" name="url" value="<?= $url ?>">
                        <input type="hidden" name="lang" value="<?= $lang ?>">

                        <input type="submit" class="boton" value="Enviar">
                    </form>
                    <?php
                    }else{
                        $nombre=$_GET['nombre'];
                    ?>
                    <h3>Gracias, hemos recibido tu consulta <?= $nombre ?></h3>
                    <?php
                    }
                    ?>

                    </div>
                    <div class="contenedor-info">
                    <ul>
                        <li>
                        <a href="tel:+34943123123" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/tel.svg" alt="" title="">
                            <span>943 123 123</span>
                        </a>
                        </li>
                        <li>
                        <a href="mailto:aranaz@webda.eus" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="" title="">
                            <span>aranaz@webda.eus</span>
                        </a>
                        </li>
                        <li>
                        <a href="https://wa.me/628749350" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/wa.svg" alt="" title="">
                            <span>628 749 350</span>
                        </a>
                        </li>
                        <li>
                        <a href="https://maps.app.goo.gl/Kh7rZM3WF1chSZSj7" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/map.svg" alt="" title="">
                            <span>C/ Juan Fermín, Juan F. Gilisagasti Kalea, 4, 1º, 20018 Donostia / San Sebastián, Gipuzkoa</span>
                        </a>
                        </li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1886.901188915529!2d-2.0047191655624914!3d43.29790730427824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b013f0513629%3A0x57e4ff3311f619d9!2s%C3%81rea%20Escuela%20de%20Dise%C3%B1o%20y%20Nuevas%20Tecnolog%C3%ADas!5e1!3m2!1ses!2ses!4v1768584957042!5m2!1ses!2ses" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </article>

            <!-- artForm02 ajax -->
            <article class="artForm02">          

                <h3>Artículo Formulario 02</h3>
                <div>
                    <div class="contenedor-form">
                    
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="">
                                    

                    <!-- MODAL QUE SALE CUANDO SE ENVÍA EL FORM CON ÉXITO -->
                    <div id="modal_envio">
                        <!-- nuestro modal con html y css -->
                        <h3 id="h3_modal_envio">Lorem ipsum dolor sit amet.</h3>
                        <p id="p_modal_envio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quia porro obcaecati accusamus laborum fuga totam assumenda fugiat sint pariatur!</p>
                        <div class="boton" id="boton_modal_envio">Escribir otra consulta</div>
                    </div>

                    <form id="idForAjax">
                        
                        <p class="error" id="errorForm02"></p>

                        <!-- nombre -->
                        <label for="nombreAjax">Nombre *</label>
                        <input type="text" id="nombreAjax" name="nombre" placeholder="Escribe aquí tu nombre *">

                        <!-- teléfono -->
                        <label for="telefonoAjax">Teléfono *</label>
                        <input type="tel" id="telefonoAjax" name="telefono" placeholder="Escribe aquí tu teléfono *">

                        <!-- Correo -->
                        <label for="emailAjax">Correo Electrónico</label>
                        <input type="email" id="emailAjax" name="email" placeholder="Escribe aquí tu correo electrónico">

                        <!-- Mensaje -->
                        <label for="mensajeAjax">Escribe tu mensaje</label>
                        <textarea name="mensaje" id="mensajeAjax" placeholder="Escribe aquí tu mensaje"></textarea>

                        <!-- términos -->
                        <div class="horizontal">
                        <label for="terminosAjax">Aceptar términos y condiciones de privacidad</label>
                        <input type="checkbox" name="terminos" id="terminosAjax">
                        </div>
                        

                        <!-- captcha -->
                        <label for="respuesta">Resuelve</label>
                        <div class="horizontal">
                        <span id="num1ajax"></span>
                        <span id="operadorajax"></span>
                        <span id="num2ajax"></span>
                        <input type="text" name="respUser" id="respuestaajax" placeholder="Respuesta" autocomplete="off">
                        <input type="hidden" name="respSystem" id="respSystemajax" value="">
                        </div>

                        <input type="hidden" name="url" value="<?= $url ?>">
                        <input type="hidden" name="lang" value="<?= $lang ?>">

                        <input type="submit" class="boton" value="Enviar" id="botonEnviarAjax">
                    </form>
                    
                    <div class="moduloLoader01" id="moduloLoader01">
                        <!-- <svg version="1.1" id="L2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <circle fill="none" stroke="#000000" stroke-width="4" stroke-miterlimit="10" cx="50" cy="50" r="48"/>
                        <line fill="none" stroke-linecap="round" stroke="#000000" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="85" y2="50.5">
                            <animateTransform 
                                attributeName="transform" 
                                dur="2s"
                                type="rotate"
                                from="0 50 50"
                                to="360 50 50"
                                repeatCount="indefinite" />
                        </line>
                        <line fill="none" stroke-linecap="round" stroke="#000000" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="49.5" y2="74">
                            <animateTransform 
                                attributeName="transform" 
                                dur="15s"
                                type="rotate"
                                from="0 50 50"
                                to="360 50 50"
                                repeatCount="indefinite" />
                        </line>
                        </svg> -->
                        <svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <path fill="#000000" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
                            c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
                                <animateTransform 
                                attributeName="transform" 
                                attributeType="XML" 
                                type="rotate"
                                dur="2s" 
                                from="0 50 50"
                                to="360 50 50" 
                                repeatCount="indefinite" />
                            </path>
                        <path fill="#000000" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                            c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
                                <animateTransform 
                                attributeName="transform" 
                                attributeType="XML" 
                                type="rotate"
                                dur="1s" 
                                from="0 50 50"
                                to="-360 50 50" 
                                repeatCount="indefinite" />
                            </path>
                        <path fill="#000000" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                            L82,35.7z">
                                <animateTransform 
                                attributeName="transform" 
                                attributeType="XML" 
                                type="rotate"
                                dur="2s" 
                                from="0 50 50"
                                to="360 50 50" 
                                repeatCount="indefinite" />
                            </path>
                        </svg>
                    </div>

                    </div>
                    <div class="contenedor-info">
                    <ul>
                        <li>
                        <a href="tel:+34943123123" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/tel.svg" alt="" title="">
                            <span>943 123 123</span>
                        </a>
                        </li>
                        <li>
                        <a href="mailto:aranaz@webda.eus" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="" title="">
                            <span>aranaz@webda.eus</span>
                        </a>
                        </li>
                        <li>
                        <a href="https://wa.me/628749350" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/wa.svg" alt="" title="">
                            <span>628 749 350</span>
                        </a>
                        </li>
                        <li>
                        <a href="https://maps.app.goo.gl/Kh7rZM3WF1chSZSj7" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/map.svg" alt="" title="">
                            <span>C/ Juan Fermín, Juan F. Gilisagasti Kalea, 4, 1º, 20018 Donostia / San Sebastián, Gipuzkoa</span>
                        </a>
                        </li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1886.901188915529!2d-2.0047191655624914!3d43.29790730427824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b013f0513629%3A0x57e4ff3311f619d9!2s%C3%81rea%20Escuela%20de%20Dise%C3%B1o%20y%20Nuevas%20Tecnolog%C3%ADas!5e1!3m2!1ses!2ses!4v1768584957042!5m2!1ses!2ses" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </article>


        </section>
               
    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>


