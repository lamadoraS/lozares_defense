<?php

include 'employee.php';

header ("Content-Type: application/json; charset=utf-8");

if ($_SERVER["REQUEST_METHOD"] != 'POST') {
    echo json_encode( [
        'code' => 500,
        'messages' => 'only post method is allowed',
    ]
    );
    exit();

}
