<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('assets/codeSnippets/header.php'); ?>
    <title>Our store!</title>

</head>

<body style="background: rgb(52,52,52);">

    <?php include('assets/codeSnippets/navbar.php'); ?>


    <section data-aos="fade-up" data-aos-duration="350" id="carousel">
        <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
            <div class="carousel-inner">
                <div class="carousel-item" >
                    <div class="bg-light border rounded border-light pulse animated hero-photography carousel-hero jumbotron py-5 px-4" style="background: url(&quot;assets/img/shellz-art-tomwillfixit-25.jpg&quot;)center / cover repeat;">
                        <h1 class="hero-title">UN SERVICIO HECHO DE LOS MEJORES PARA LOS MEJORES.</h1>
                        <p class="hero-subtitle" style="color: rgb(255,255,255);background: rgba(0,0,0,0.54);">En Canvas Combat buscamos darte constantes actualizaciones para que tengas la mejor experiencia.</p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="aboutUs.php" style="background-color: rgb(0,145,6)!important;">VER MAS</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-light border rounded border-light pulse animated hero-technology carousel-hero jumbotron py-5 px-4" style="background: url(&quot;assets/img/pexels-photo-213029.jpg&quot;) center / cover repeat;">
                        <h1 class="hero-title">UNA NUEVA ERA DE COMPETENCIA</h1>
                        <p class="hero-subtitle" >La mejor manera para ser mejor esta aqui, aprende, crece y conoce.</p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="register.php" style="background-color: rgb(0,145,6)!important;">REGISTRARSE</a></p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="bg-light border rounded border-light pulse animated hero-nature carousel-hero jumbotron py-5 px-4" style="background: url(&quot;assets/img/contact.jpg&quot;) center / cover;">
                        <h1 class="hero-title">SOPORTE 24/7</h1>
                        <p class="hero-subtitle" style="color: #ffffff;background: rgba(0,0,0,0.54);">Para cualquier duda contactanos al:&nbsp;<br><strong>+1 555 123456</strong><br></p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="#footer" style="background-color: rgb(0,145,6)!important;">Ver Mas</a></p>
                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2" class="active"></li>
            </ol>
        </div>
    </section>
    <h2 class="display-4 text-center" data-aos="fade-up" data-aos-duration="350" style="margin-bottom: 105px;margin-top: 76px; color: rgb(255,255,255);">CATEGORIAS</h2>
    <div class="container shadow-lg" data-aos="fade-up" data-aos-duration="350" data-aos-delay="500" style="background: linear-gradient(var(--bs-white) 10%, rgb(255,62,224) 50%), #ffffff;border-style: ridge;margin-top: 68px;">
        <h2 class="display-4 text-center" data-aos="fade-up" data-aos-duration="350" style="margin-bottom: 105px;margin-top: 76px;">ARTISTAS</h2>
        <div data-reflow-type="product-list" data-reflow-layout="cards" data-reflow-perpage="4" data-reflow-order="date_asc" data-reflow-product-link="/product.html?product={id}" data-reflow-category="17546960" data-reflow-show="image,name,excerpt,price"></div>
        <div style="text-align: right;"><a class="btn btn-primary" role="button" style="margin-bottom: 15px; background-color: rgb(0,145,6)!important;" href="artistas.php">VER MAS +</a></div>
    </div>
    <div class="container shadow-lg" data-aos="fade-up" data-aos-duration="350" data-aos-delay="500" id="fences" style="border-style: ridge;margin-top: 68px;background: linear-gradient(var(--bs-white) 10%, var(--bs-cyan) 50%), #ffffff;">
        <h2 class="display-4 text-center" data-aos="fade-up" data-aos-duration="350" style="margin-bottom: 105px;margin-top: 76px;">ARTE</h2>
        <div data-reflow-type="product-list" data-reflow-layout="cards" data-reflow-perpage="4" data-reflow-order="date_asc" data-reflow-product-link="/product.html?product={id}" data-reflow-category="288694459" data-reflow-show="image,name,excerpt,price"></div>
        <div style="text-align: right;"><a class="btn btn-primary" role="button" style="margin-bottom: 15px; background-color: rgb(0,145,6)!important;" href="arte.php">VER MAS +</a></div>
    </div>
    <div class="container shadow-lg" data-aos="fade-up" data-aos-duration="350" data-aos-delay="500" style="border-style: ridge;margin-top: 68px;background: linear-gradient(var(--bs-white) 10%, var(--bs-yellow) 50%)">
        <h2 class="display-4 text-center" data-aos="fade-up" data-aos-duration="350" style="margin-bottom: 105px;margin-top: 76px;">COMPETENCIAS</h2>
        <div data-reflow-type="product-list" data-reflow-layout="cards" data-reflow-perpage="4" data-reflow-order="date_asc" data-reflow-product-link="/product.html?product={id}" data-reflow-category="302876168" data-reflow-show="image,name,excerpt,price"></div>
        <div style="text-align: right;"><a class="btn btn-primary" role="button" style="margin-bottom: 15px; background-color: rgb(0,145,6)!important;" href="lights.php">VER MAS +</a></div>
    </div>
    <div class="container shadow-lg" data-aos="fade-up" data-aos-duration="350" data-aos-delay="500" style="border-style: ridge;margin-top: 68px;box-shadow: 0px 0px;background: linear-gradient(var(--bs-white) 10%, rgb(105,255,111) 50%), var(--bs-green);">
        <h2 class="display-4 text-center" data-aos="fade-up" data-aos-duration="350" style="margin-bottom: 105px;margin-top: 76px;">EXTRAS</h2>
        <div data-reflow-type="product-list" data-reflow-layout="cards" data-reflow-perpage="4" data-reflow-order="date_asc" data-reflow-product-link="/product.html?product={id}" data-reflow-category="392457629" data-reflow-show="image,name,excerpt,price" style="text-align: left;"></div>
        <div style="text-align: right;"><a class="btn btn-primary" role="button" style="margin-bottom: 15px; background-color: rgb(0,145,6)!important;" href="decour.php">VER MAS +</a></div>
    </div>


    <?php include('assets/codeSnippets/footer.php'); ?>


    <?php include('assets/codeSnippets/footerInclude.php'); ?>

</body>

</html>