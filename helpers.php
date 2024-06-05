<?php

function view($destination)
{
    include 'home.php';
}

function route($name)
{
    return CONFIG['server_name'].$name;
}
