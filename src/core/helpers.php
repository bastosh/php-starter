<?php
function view($name, $data = [])
{
    extract($data);
    return require "../src/app/views/{$name}.view.php";
}