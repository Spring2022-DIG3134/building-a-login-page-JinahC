<?php
    /*
        Use validation to test the username and password values.
        Show a message if the username is "DIG" and the password is "3134".
        Show a different message if the username and/or password is incorrect.
    */

    if (isset($_COOKIE["loggedin"]))
    {
        echo("You are logged in using cookies.");
    }
    else
    {
        if (isset($_POST["username"]) && isset($_POST["password"]))
        {
            if ($_POST["username"] === "DIG" && $_POST["password"] === "3134")
            {
                echo("Correct username and password were inputted!");
                setcookie("loggedin", "yes");
            }
            else 
                echo("Username and/or password is incorrect :(");
        }
        else   
            echo("Enter values in each field please.");
    }
?>