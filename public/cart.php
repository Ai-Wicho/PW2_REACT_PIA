<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('assets/codeSnippets/header.php'); ?>
    <title>My Cart</title>

</head>

<script>


            $(document).ready(function() 
            {
             
                /*if(isLogged == false)
                {
                    Swal.fire
                    ({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'You need to log in to proceed with the purchase',
                    footer: '<a href="register.php">Register now!</a>'
                    }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    /*
                    if (result.isConfirmed) {
                        window.location.href = "logIn.php";
                    }
                    else
                    {
                        window.location.href = "logIn.php";
                    }
                    })
                }
                */
                
            });


</script>

<body>

    <?php include('assets/codeSnippets/navbar.php'); ?>




    


    <div class="container" data-aos="fade-up" data-aos-duration="500">
        <div data-reflow-type="shopping-cart" data-reflow-success-url="/success.php" data-reflow-cancel-url="/cancel.php" style="margin-top: 66px;"></div>
    </div>






    <?php include('assets/codeSnippets/footer.php'); ?>

    <?php include('assets/codeSnippets/footerInclude.php'); ?>



</body>

</html>