<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('assets/codeSnippets/header.php'); ?>
    <?php include('assets/dbConnection/db.php'); ?>
    <title>My profile</title>

<!---->


</head>

<script>

        $(document).ready(function() 
        {

            if(isLogged == false)
                {
                    Swal.fire
                    ({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'You need to log in to proceed with the page',
                    footer: '<a href="register.php">Register now!</a>'
                    }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "login.php";
                    }
                    else
                    {
                        window.location.href = "login.php";
                    }
                    })
                }

            <?php 

            $cookie_name = "user";

            $stmt = $mysqli->query("SELECT * FROM USERS WHERE EMAIL = '{$_COOKIE[$cookie_name]}';");
            
            $user = mysqli_fetch_array($stmt);
            
            ?>





        });


function logOut()
{

    $.ajax({
                url:   'logOut.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () 
                {

                },
                success:  function (response) 
                { 


                    window.location.href = "index.php";

                },
                error: function(jqXHR, textStatus, errorThrown){
                window.alert(jqXHR);

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your registration has been completed',
                    showConfirmButton: false,
                    timer: 5000
                    })

                    setTimeout(function() {
                    
                    //window.location.href = "thanksRegister.php";

                }, 5000);


                //window.alert(errorThrown);



                }



        });

}

</script>

<body style="background: rgba(255,255,255,0);">


    <?php include('assets/codeSnippets/navbar.php'); ?>



    
    <div class="container profile profile-view" data-aos="fade-up" id="profile" style="margin-top: 48px;">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info alert-dismissible absolue center" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>Profile save with success</span></div>
            </div>
        </div>
        <form>
            <div class="row profile-row" style="background: rgba(255,255,255,0.37);">
                <div class="col-md-4 relative">
                    <div class="avatar" style="margin-top: 21px;">
                        <div class="avatar-bg center"></div>
                    </div><input class="form-control form-control" type="file" name="avatar-file" style="margin-top: 24px;">
                </div>
                <div class="col-md-8">

                    <h1> <?php echo $user['USERNAME'] ?> </h1>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Firstname </label><input class="form-control" type="text" name="firstname" value=<?php echo $user['FULL_NAME'] ?> disabled></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Lastname </label><input class="form-control" type="text" name="lastname" value=<?php echo $user['LAST_NAME'] ?> disabled></div>
                        </div>
                    </div>
                    <div class="form-group mb-3"><label class="form-label">Email </label><input class="form-control" type="email" autocomplete="off" required="" name="email" disabled value=<?php echo $user['EMAIL'] ?>></div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Password </label><input class="form-control" type="password" name="password" autocomplete="off" required="" value=<?php echo $user['USER_PASSWORD'] ?> disabled ></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 content-right" style="margin-bottom: 19px;">
                        <button class="btn btn-danger" type="button" onclick="logOut()">LOG OUT </button>
                    
                    </div>

                    <div > 


                    </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
    <h1> CURRENT CART </h1>
    <div class="container" data-aos="fade-up" data-aos-duration="500">
        <div data-reflow-type="shopping-cart" data-reflow-success-url="/success.php" data-reflow-cancel-url="/cancel.php" style="margin-top: 66px;"></div>
    </div>
    </div>



    <?php include('assets/codeSnippets/footer.php'); ?>
    <?php include('assets/codeSnippets/footerInclude.php'); ?>

</body>

</html>