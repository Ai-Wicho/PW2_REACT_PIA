<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('assets/codeSnippets/header.php'); ?>
    <title>LIGHTS</title>

</head>

<body style="background: rgb(52,52,52);">

    <?php include('assets/codeSnippets/navbar.php'); ?>


    <!-- PRODUCT CATEGORY SECTION -->
    <h2 class="display-4 text-center" style="margin-bottom: 50px;letter-spacing: 39px;color: rgb(255,255,255);margin-top: -145px;padding-top: 174px;padding-bottom: 71px;background: linear-gradient(var(--bs-orange),rgb(52,52,52)), var(--bs-pink);">COMPETENCIAS</h2>
    <div class="text-center"></div>


    <!-- PRODUCT LIST SECTION -->
    <div 
    data-reflow-type="product-list" 
    data-reflow-perpage="5" 
    data-reflow-order="date_asc" 
    data-reflow-product-link="/product.html?product={id}" 
    data-reflow-category="302876168" 
    data-aos="fade-up" 
    data-aos-duration="450" 
    style="margin-top: 90px;margin-right: 10px;margin-left: 10px;padding-bottom: 40px; color: rgb(255,255,255)!important;">
    </div>



        <!-- BUTTON NAVIGATION SECTION -->
    <div class="text-center" data-aos="fade-up" data-aos-duration="450" data-aos-delay="650">

        <div class="btn-group" role="group">

            <a class="btn btn-outline-primary border rounded-0" role="button" data-bss-hover-animate="pulse" style="margin-right: 62px;background: linear-gradient(var(--bs-pink),  white), #eacc61; color: rgb(0,0,0);" href="artistas.php">ARTISTAS</a>

            <a class="btn btn-outline-primary border rounded-0" role="button" data-bss-hover-animate="pulse" style="margin-right: 62px;background: linear-gradient(var(--bs-blue),  white), var(--bs-blue); color: rgb(0,0,0);" href="arte.php">ARTE</a>

            <a class="btn btn-outline-primary border rounded-0" role="button" data-bss-hover-animate="pulse" style="margin-right: 62px;background: linear-gradient(var(--bs-green),  white), #e89900; color: rgb(0,0,0);" href="decour.php">EXTRAS</a>


        </div>

    </div>




    <?php include('assets/codeSnippets/footer.php'); ?>

    <?php include('assets/codeSnippets/footerInclude.php'); ?>

</body>

</html>