<?php

    include('config.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Jefferson Lobato</title>
	<link rel="SHORTCUT ICON" href="_images/logo.ico" type="image/x-icon" />
	<meta charset="utf-8">
	<meta name="description" content="Jefferson Lobato, dono do canal do youtube Jefferson Lobato, ama ensinar e abraçou a missão de transmitir conhecimento de programação de computadores pelo Brasil" />
	<meta name="keywords" content="Jefferson Lobato, como aprender programação, aprender a programar, curso de python, programador, desenvolvedor" />
	<meta name="author" content="Jefferson Lobato"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link href="<?php echo INCLUDE_PATH; ?>_css/style.css" rel="stylesheet"/>
    <link href="<?php echo INCLUDE_PATH; ?>banner-cookie.css" rel="stylesheet"/>


</head>

<body>

    <?php
        include('banner_cookie.html');
    ?>


    <aside>

        <img class="efeito lateral1" src="<?php echo INCLUDE_PATH; ?>_images/efeito-lateral1.png"/>

        <img class="efeito lateral2" src="<?php echo INCLUDE_PATH; ?>_images/efeito-lateral2.png"/>

        <img class="efeito lateral3" src="<?php echo INCLUDE_PATH; ?>_images/efeito-lateral3.png"/>

        <div class="perfil">
            
            <div><img src="<?php echo INCLUDE_PATH; ?>_images/perfil.png"/></div>

           <div><h3>Jefferson Lobato</h3></div>
        
        </div>

        <div class="sobre">
            <p>Nascido em 1988, formado em Análise e Desenvolvimento de Sistemas, amo ensinar e amo programação. Nas minhas redes sociais você irá encontrar dicas e aulas sobre assuntos referentes a programação. Eu te aguardo por lá.</p>
        </div>

       

    </aside>

    <section>

        <img class="efeito-responsivo" src="<?php echo INCLUDE_PATH; ?>_images/efeito-horizontal.png"/>
        

       <div class="left">
            <a href="https://www.youtube.com/channel/UCDw7lzJT-Jj2G7NQuNALMrA" target="_blank"><div><img src="<?php echo INCLUDE_PATH; ?>_images/logo-youtube.png"><h3>Inscreva-se no meu Canal</h3></div></a>
            <a href="https://www.youtube.com/playlist?list=PLLVddSbilcul-1bAKtMKoL6wOCmDIPzFJ" target="_blank"><div><img src="<?php echo INCLUDE_PATH; ?>_images/logo-python.png"><h3>Curso Completo de Python</h3></div></a>
            <a href="https://discord.gg/VE7DgrBz2P" target="_blank"><div><img src="<?php echo INCLUDE_PATH; ?>_images/logo-discord.png"><h3>Servidor do Discord</h3></div></a>
        </div>
        <div class="right">
            <a href="https://www.instagram.com/jeffelobato" target="_blank"><div><img src="<?php echo INCLUDE_PATH; ?>_images/logo-instagram.png"><h3>Perfil do Instagram</h3></div></a>
            <a href="https://www.facebook.com/jeffelobato" target="_blank"><div><img src="<?php echo INCLUDE_PATH; ?>_images/facebook.png"><h3>Página do Facebook</h3></div></a>
            <a href="<?php echo INCLUDE_PATH; ?>politica.php" target="_blank"><div><img src="<?php echo INCLUDE_PATH; ?>_images/privacidade.png"><h3>Política de privacidade</h3></div></a>
        </div>
    </section>
</body>

</html>