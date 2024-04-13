<?php
require("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des employés</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        .table-container {
            border: 1px solid #888;
            overflow-x: scroll;
            max-height: 85vh;
        }

        .table-container::-webkit-scrollbar {
            height: 10px;
        }

        .table-container::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .table-container::-webkit-scrollbar-thumb {
            background: #A8A8A8;
            border-radius: 7px;
        }

        .table-container::-webkit-scrollbar-thumb:hover {
            background: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-uppercase">Gestion des employés</h1>
    </div>
    <div id="call-to-action" class="container">
        <a href="#" class="btn btn-primary">Ajouter</a>
        <button class="btn btn-success">Modifer</button>
        <button class="btn btn-danger">Supprimer</button>
    </div>
    <div class="container table-container my-2 border-1 rounded">
        <?php
        $file_path = "data/employe.json";
        $data = read_json_file($file_path);
        $thead_columns = array_keys($data[0]);
        // echo "<pre>";
        // print_r($thead_columns);
        // echo "</pre>";
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-capitalize" scope="col"></th>
                    <th class="text-capitalize" scope="col">#</th>
                    <?php
                    foreach ($thead_columns as $columns) {
                        echo '<th class="text-capitalize" scope="col">' . traduire_elements_en_francais($columns) . "</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $index => $row) {
                    $index = $index + 1;
                    echo "<tr>
                                <th scope=\"row\"><input type=\"checkbox\" name=\"line_marker_$index\" id=\"line_marker_$index\"></th>
                                <td scope=\"row\">$index</td>                                
                                ";
                    foreach ($row as $column) {
                        echo "<td>$column</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="script.js"></script>
</body>





</html>