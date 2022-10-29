<?php


$cookie_name = "user";
$cookie_name_type = "type";


if(isset($_COOKIE["user"]))
{
    if($_COOKIE[$cookie_name] == '')
    {
        ?>
        <script>
                $('#reportero').hide();
                $('#admin').hide();
                $('#profile').hide();
                $('#loginNavbar').show();
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
                $('#profile').show();
                $('#loginNavbar').hide();
                isLogged = true;
                $('#admin').hide();
                $('#reportero').hide();
        </script>
        <?php

        if($_COOKIE[$cookie_name_type] == '2')
        {
            ?>
            <script>
                    $('#reportero').show();
                    $('#admin').hide();
            </script>
            <?php
        }
        if($_COOKIE[$cookie_name_type] == '3')
        {
            ?>
            <script>
                    $('#admin').show();
                    $('#reportero').hide();
            </script>
            <?php
        }   
    }
}
?>