<?php

    // Connect to the phpMyAdmin Database
    $host = "localhost";
    $userName = "root";
    $database = "test_db";
    $password = "F00tb@ll1120";

    $mysqli = new mysqli($host, $userName, $password, $database);


    $sql = "SELECT id, first_name, last_name, pride_points, is_active FROM test_csv_table";
    $result = $mysqli->query($sql);

    

    $mysqli->close();

    // echo $mysqli->host_info . "\n";

    function pre_br($array) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    ?>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
    </style>

<?php

    // $cmsList = ['Craft', 'Statamic', 'Wordpress', 'CodeIgniter'];

    // echo "<pre>";
    // print_r($cmsList);
    // echo "</pre>";

    // if(count($cmsList) > 3) {
    //     echo "This is TRUE";
    // } else {
    //     echo "Array is more than 3";
    // }

    // echo "<br>";

    // // $cmsList[] = 'PureCMS';

    // array_push($cmsList, "OneCMS", "PureCMS", "Laravel");

    // echo "<pre>";
    // print_r($cmsList);
    // echo "</pre>";

    // if(count($cmsList) == 3) {
    //     echo "This is TRUE";
    // } else {
    //     echo "Array is more than 3";
    // }

    // echo "<br>";

    $cmsList = array();

    $cmsList = [
        'PHP' => [
            'creator' => 'Rob Russell',
            'website' => 'http://www.php.com',
            'versions' => [
                ['version' => '4.0', 'releaseDate' => 'January 30, 1999'],
                ['version' => '5.5', 'releaseDate' => 'October 10, 2001'],
                ['version' => '7.5', 'releaseDate' => 'August 5, 2001']
            ]
        ],
        'Laravel' => [
            'creator' => 'Tyler Otwell',
            'website' => 'http://www.laravel.com',
            'versions' => [
                ['version' => '5.0', 'releaseDate' => 'February 13, 1995'],
                ['version' => '7.5', 'releaseDate' => 'May 10, 2014'],
                ['version' => '8.0', 'releaseDate' => 'July 1, 2005']
            ]
        ],
        'Python' => [
            'creator' => 'Thomas Peele',
            'website' => 'http://www.pythoncode.com',
            'versions' => [
                ['version' => '2.0', 'releaseDate' => 'March 3, 1995'],
                ['version' => '6.5', 'releaseDate' => 'June 10, 2010'],
                ['version' => '8.5', 'releaseDate' => 'April 16, 2001']
            ]
        ]
    ];

?>


<!-- <div class="container">

    <h1>Data from CMS List Array</h1>

    <table width="100%" class="table">
        <thead>
            <tr>
            <th>Language</th>
            <th>Creater</th>
            <th>Website</th>
            <th>Version/Release Date</th>
            </tr>
        </thead>

        <tbody>

            <?php
                foreach ($cmsList as $key => $value) {
                    echo "<tr>";
                    echo "<td class='tcell'>$key</td>";

                    foreach ($value as $sub_key => $sub_val) {
                        echo "<td class='tcell'>";
                            if (is_array($sub_val)) {
                                for ($i=0; $i < count($sub_val) ; $i++) { 
                                    foreach ($sub_val[$i] as $k => $v) {
                                        echo  $v;
                                    }
                                    echo "<br>";
                                }
                            } else {
                                echo $sub_val;
                            }
                        echo "</td>";
                    }
                    echo "</tr>";
                }
            ?>

        </tbody>
    </table>
</div> -->
