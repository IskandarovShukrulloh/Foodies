<?php
if (isset($_GET["page"]) && !empty(trim($_GET["page"]))) {
    require_once("../config.php");

    $page = $_GET["page"];

    if ($page == "1") {
    require_once ('pages/employers/add.php');
    }
    
    else if ($page == "2") {
        require_once ('pages/employers/insert.php');
    }

    else if ($page == "3") {
        require_once ('pages/employers/list.php');
    }

    else if ($page == "4") {
        require_once ('pages/employers/edit.php');
    }

    else if ($page == "5") {
        require_once ('pages/employers/update.php');
    }

    else if ($page == "6") {
        require_once ('pages/employers/delete.php');
    }

    else if ($page == "7") {
        require_once ('logout.php');
    }

    else if ($page == "8") {
        require_once ('pages/admins/add.php');
    }

    else if ($page == "9") {
        require_once ('pages/admins/insert.php');
    }


}

?>