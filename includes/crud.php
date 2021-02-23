<?php

// Connexion à la bdd
$bdd = new PDO('mysql:host=localhost;dbname=passionfroid-img','root','');
$bdd->exec("SET NAMES UTF8");
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


function db_get($table, $id=null, $column = 'id'){
    global $bdd;
    $results = [];
    $q = "SELECT * FROM $table";
    if (!is_null($id)){
        $q .= " WHERE $column = '$id'";
    }
    foreach($bdd->query($q) as $row) {
        $results[] = $row;
    }

    return $results;
}

function db_insert($table, $data) {
    global $bdd;
    $response = ['success' => false];

    $keys = array_keys($data);
    $colonnes = [];
    $placeholder = [];

    for ($i=0; $i < count($keys); $i++) { 
        if(!preg_match('/^_/', $keys[$i]) && $keys[$i] != 'MAX_FILE_SIZE'){
            $colonnes[] = $keys[$i];
            $placeholder[] = "?";
        }
        else{
            unset($data[$keys[$i]]);
        }
    }
    $colonnes = implode(',', $colonnes);
    $placeholder = implode(',', $placeholder);
    $q = "INSERT INTO $table ($colonnes) VALUES ($placeholder)";
    $p = $bdd->prepare($q);
    $p->execute(array_values($data));

    $erreur = $p->errorInfo();
    if(!empty($erreur[2])){
        $response['erreur'] = $erreur[2];
    }
    else{
        $response = [
            'success' => true,
            'insertId' => $bdd->lastInsertId()
        ];
        
    }
    return $response;
}

function db_update($table, $id, $data) {
    global $bdd;
    $response = ['success' => false];


    $keys = array_keys($data);
    $colonnes_valeurs = [];
    $placeholder = [];

    for ($i=0; $i < count($keys); $i++) { 
        if(!preg_match('/^_/', $keys[$i]) && $keys[$i] != 'MAX_FILE_SIZE'){
            $colonnes_valeurs[] = $keys[$i]. "= ?";
        }
        else{
            unset($data[$keys[$i]]);
        }
    }
    $colonnes_valeurs = implode(',', $colonnes_valeurs);
    $q = "UPDATE $table SET $colonnes_valeurs WHERE id = $id";
    $p = $bdd->prepare($q);
    $p->execute(array_values($data));

    $erreur = $p->errorInfo();
    if(!empty($erreur[2])){
        $response['erreur'] = $erreur[2];
    }

    else{
    $response = ['success' => true, 'message' => 'Mise à jour réussie.'];
    }
    return $response;
}

function db_delete($table, $id) {
    global $bdd;
    $response = ['sucess' => false];
    
    if(count(db_get($table, $id)) == 0){
        $response['erreur'] = "Valeur introuvable";
        return $response;
    }
    $q = "DELETE FROM $table WHERE id = $id";
    $resultat = $bdd->exec($q);

    $erreur = $bdd->errorInfo();
    if(!empty($erreur[2])){
        $response['erreur'] = $erreur[2];
    }

    else{
    $response = ['sucess' => true, 'erreur' => "C'est bon."]; 
    }

    return $response;
}

function parse($template_name, $data) {
    $template = file_get_contents($template_name);
    $template = preg_replace_callback(
        '/(\{\{([$a-zA-Z0-9_]+)\}\})/',
        function ($matches) use ($data) {

            if(preg_match('/^\$([a-zA-Z_]+)/', $matches[2], $matches2)){
                return constant($matches2[1]);
            }
            return $data[$matches[2]];
        },
        $template
    );
    return $template;
}