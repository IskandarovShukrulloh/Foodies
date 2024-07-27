<?php
session_start();
unset($_SESSION["uid"]);
unset($_SESSION["username"]);?>

<style>
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<div class="container">
    <?require_once("login.php");?>
</div>

