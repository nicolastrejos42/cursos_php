<?php

function get_country_name_switch($country)
{
    $name = "";

    switch ($country) {
        case 'MX':
            $name = 'Mexico';
            break;

        case 'CO':
            $name = 'Colombia';
            break;

        case 'VE':
            $name = 'Venezuela';
            break;

        default:
            $name = "Lo siento, no conozco ese país.";
            break;
    }
    return $name;
}


function get_country_name_match($country)
{
    return match($country){
        "MX" => "México",
        "COL" => "Colombia",
        "VE" => "Venezuela",
        default => "Lo siento, no conozco ese país."
    };
}

echo get_country_name_match("MX");