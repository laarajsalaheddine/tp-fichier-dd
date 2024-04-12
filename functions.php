<?php
// vous définisser vos fonction dans ce fichier
function read_json_file($file_path)
{
    if (!file_exists($file_path)) {
        return false;
    }
    $json_data = file_get_contents($file_path);
    $formatted_data_array = json_decode($json_data, true);

    if ($formatted_data_array === null) {
        return false;
    }

    return $formatted_data_array;
}

function traduire_elements_en_francais($element)
{
    return match ($element) {
        "first_name" => "prénom",
        "last_name" => "nom",
        "email" => "email",
        "age" => "âge",
        "phone" => "téléphone",
        "marital_status" => "état civil",
        "gender" => "genre",
        "city" => "ville",
        "street" => "rue",
        "zip" => "code postal",
        "title" => "titre",
        "company" => "entreprise",
        "industry" => "industrie",
        default => $element
    };
}
