<?php

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        if( $name == 'Davlatyor' && $email == 'davlatyor@mail.com'){
            $return = [
                'method' => "POST",
                'success' => true,
                'message' => "You are logged in!"
            ];
        } else {
            $return = [
                'method' => "POST",
                'success' => false,
                'message' => "You are not logged in!"
            ];
        }

        header('Content-type: application/json');
        echo json_encode($return);
    }

    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];

        if( $name == 'Davlatyor' && $email == 'davlatyor@mail.com'){
            $return = [
                'method' => "GET",
                'success' => true,
                'message' => "You are logged in!"
            ];
        } else {
            $return = [
                'method' => "GET",
                'success' => false,
                'message' => "You are not logged in!"
            ];
        }

        header('Content-type: application/json');
        echo json_encode($return);
    }

    header('Content-type: application/json');
    echo json_encode([
        'success' => false,
        'message' => "Invalid request!"
    ]);
