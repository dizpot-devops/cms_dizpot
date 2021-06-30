<?php

?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">&nbsp;</li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/dashboard/">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-dizusers" aria-expanded="false" aria-controls="ui-dizemployees">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-dizusers">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/users/">List</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-dizthemes" aria-expanded="false" aria-controls="ui-dizpasswords">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Themes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-dizthemes">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/themes/list/">List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/themes/builder/">New Theme</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-dizpages" aria-expanded="false" aria-controls="ui-dizpasswords">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-dizpages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/pages/list/">List</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-diztemplates" aria-expanded="false" aria-controls="ui-dizpasswords">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Templates</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-diztemplates">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/templates/list/">List</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-dizMedia" aria-expanded="false" aria-controls="ui-dizpasswords">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Media</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-dizMedia">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/media/list/">List</a></li>
                </ul>
            </div>
        </li>

        <?php
            if(1) {
                echo "
        <li class=\"nav-item sidebar-user-actions\">
            <div class=\"sidebar-user-menu\">
                <a href=\"/settings/company/\" class=\"nav-link\"><i class=\"mdi mdi-settings menu-icon\"></i>
                    <span class=\"menu-title\">Settings</span>
                </a>
            </div>
        </li>                
                ";
            }
        ?>

<!--        <li class="nav-item sidebar-user-actions">-->
<!--            <div class="sidebar-user-menu">-->
<!--                <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>-->
<!--                    <span class="menu-title">Take Tour</span></a>-->
<!--            </div>-->
<!--        </li>-->
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="/users/logout/" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                    <span class="menu-title">Log Out</span></a>
            </div>
        </li>
    </ul>
</nav>
