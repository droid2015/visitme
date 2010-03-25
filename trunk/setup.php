<?php
/*
Copyright 2010 GoPandas
This file is part of VisitME.

VisitME is free software: you can redistribute it and/or modify it
under the terms of the GNU General Public License as published by the
Free Software Foundation, either version 3 of the License, or (at your
option) any later version.

VisitME is distributed in the hope that it will be useful, but WITHOUT
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License
for more details.

You should have received a copy of the GNU General Public License
along with VisitME. If not, see http://www.gnu.org/licenses/.
*/
    require_once('includes/config.php');
    require_once('includes/dbsetup.php');

    $prompt_input = true;
    // Create Smarty object
    $smarty = new Smarty();
    $smarty->assign('host_url', $host_url);
    
    $user_name = $_POST['user'];
    $password = $_POST['pwd'];

    if(($user_name == $db_user) && ($password == $db_pass))
    {
        $prompt_input = false;
        echo "<br /><br />Populating ".$db_db." database... ";
        $dbsetup_obj = new DB_SETUP($db_db, $db_user, $db_pass);
        echo "<strong>Success!</strong><br />";
    }

    $smarty->assign('prompt_input', $prompt_input);
    $smarty->display('setup.tpl');
?>
