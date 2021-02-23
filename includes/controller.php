<?php


if (isset($_POST['_form'])) {
    switch ($_POST['_form']) {
        case 'formEdit':
            if ($_POST['id'] == 0){ // Nouvelle image 
                $insert = db_insert('images', $_POST);
                
                debug($insert);
            }
            else{ // Modification image
                $update = db_update('images', $_POST['id'], $_POST);
                //debug($update);
            }
            break;
        default:
        break;
    }
}