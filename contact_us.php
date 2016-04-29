<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <!--MDL-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.1.2/material.min.js"></script>

        <!--Bootstrap-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!--Style Sheets-->
        <link href="styles/mainstyle.css" rel="stylesheet" type="text/css"/>

        <!--Scripts-->
        <script src="scripts/mainscript.js" type="text/javascript"></script>

        <title>The DNA Expert</title>
    </head>
    <body>
        <!-- Always shows a header, even in smaller screens. -->
        <?php include 'header.php' ?>

        <form action="" method="POST" onsubmit="" >
            <table align="center">
                <tr>
                    <th>Contact Us</th>
                </tr>
                <tr>
                    <td>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="name" name="name">
                            <label class="mdl-textfield__label" for="name">Name...</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="email" id="name" name="email">
                            <label class="mdl-textfield__label" for="email">Email...</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="name" name="phone">
                            <label class="mdl-textfield__label" for="phone">Phone Number...</label>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
