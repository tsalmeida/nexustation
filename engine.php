<?php

if (!isset($_SESSION['user_info'])) {
    $_SESSION['user_info'] = 'guest';
    $_SESSION['station_id'] = 1;
}

function process_command()
{
    $args = func_get_args();
    $station_id = return_station_id($args[0]);
    $command = $args[1];
    $parameter1 = false;
    $parameter2 = false;
    if (isset($args[2])) {
        $parameter1 = $args[2];
    }
    if (isset($args[3])) {
        $parameter2 = $args[3];
    }

    include '../connect_nexustationdb.php';

    if ($command == "add") {
        $link_id = prepare_query("INSERT INTO links (link, title_id) VALUES ('$parameter1', '$parameter2')");
        error_log($link_id);

        $query = prepare_query("INSERT INTO station_elements (station_id, link_id, type, icon_id) VALUES ($station_id, $link_id, 'link', false)");
        return $query;
    }

//    $query = prepare_query("SELECT link_id FROM titles WHERE title = '$args[0]'");
//    $results = $conn->query($query);
//    if ($results->num_rows > 0) {
//        return 'something happened';
//        while ($result = $results->fetch_assoc()) {
//
//        }
//    } else {
//        return 'connection seems to not have been successful';
//    }
}

function return_station_id($user_info) {
    return 1;
}

function prepare_query()
{
    $args = func_get_args();
    error_log($args[0]);
    return $args[0];
}

if (isset($_POST['usercmd1'])) {
    $usercmd1 = $_POST['usercmd1'];
    if (isset($_POST['usercmd2'])) {
        $usercmd2 = $_POST['usercmd2'];
        $result = process_command($_SESSION['user_info'], $usercmd1, $usercmd2);
        echo $result;
    } else {
        echo "only usercmd1 ($usercmd1) arrived.";
    }
}