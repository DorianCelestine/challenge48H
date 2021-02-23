<?php


if (isset($_POST['_form'])) {
    switch ($_POST['_form']) {
        case 'formEdit':
            $data = [
                'name' => $_POST['name']
            ];
            db_update('images', $_POST['id'], $data);
            break;
        default:
        break;
    }
}