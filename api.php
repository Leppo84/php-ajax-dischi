<?php

    include __DIR__ . '/db.php';
    header('content-type: application/json');
    echo json_encode($all_disks);

?>