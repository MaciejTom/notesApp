<?php 

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', '1');
function dump($data)
{
    echo '<div style="display: inline-block; border: black solid 1px; background: #f2f2f2; padding: 5px 15px"><pre>';
    print_r($data);

    echo "</pre></div>";

};