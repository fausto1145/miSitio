<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="css/estilo.css">
    <script type="text/javascript" src="js/script.js"></script>
    <title>Portafolio personal</title>
</head>
<body>
    <div class="toggle" onclick="toggleMenu();"></div>

    <section class="banner" id="home">
        <div class="imgSidebar">
            <img src="img/principal.jpg">
        </div>
        <div class="contentBx">
            <h5 class="logoText">Mi portafolio</h5>
            <div>
                <h4><span>Hola</span>, yo soy</h4>
                <h2>Faustino Mamani Caisena</h2>
                <h4>soy desarrollador de paginas web</h4>
                <p>Estamos en obras!... disculpen las molestias.Este documento está siendo editado, posiblemente contenga carencias y defectos.
                ¿Quieres participar en la elaboración de este documento? Para más información sobre como ayudar o como empezar a hacerlo, consulta </p>
                <a href="#" class="btn">Acerca de</a>
            </div>
        </div>
    </section>
    <div class="sidebar">
        <ul class="menu">
            <li><a href="#">INICIO</a></li>
            <li><a href="#">ACERCA DE</a></li>
            <li><a href="#">SERVICIOS</a></li>
            <li><a href="#">PROYECTOS</a></li>
            <li><a href="#">CONTACTO</a></li>
            <li><a href="#">ddddd</a></li>

        </ul>
    </div>
    <script>
    function toggleMenu(){
        const toggleMenu = document.querySelector('.toggle');
        toggleMenu.classList.toggle('active');
    }
    </script>
</body>
</html>