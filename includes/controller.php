<?php
$tags = db_get('tags');


if (isset($_POST['_form'])) {
    switch ($_POST['_form']) {
        case 'formEdit':
            if ($_POST['id'] == 0){ // Nouvelle image 
                $data = $_POST;
                $data['img_url'] = 'img/' . upload();
                $insert = db_insert('images', $data);
            }
            else{ // Modification image
                $update = db_update('images', $_POST['id'], $_POST);
            }
            break;
        default:    
        break;
    }
}