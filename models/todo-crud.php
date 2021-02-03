<?php

// getPrisijungimas();
// KURTI teksta
function createTodo($name, $description, $status) {
  $manoSQL = "INSERT INTO todo
                  VALUES (NULL, '$name', '$description', '$status', NOW())
             ";
  $arPavyko = mysqli_query(getprisijungimas(),$manoSQL);
  if($arPavyko == false && DEBUG_MODE > 0){
    echo "ERROR: prisijungti nepavyko sukurti!!! <br>";
    echo mysqli_error(getPrisijungimas());
  }
}



// TRINTI VARTOTOJA
function deleteTodo($nr){
  $manoSql = "DELETE FROM todo
              WHERE id = '$nr'
             ";
  mysqli_query(getPrisijungimas(), $manoSql);
}


// GALIMA EDITINTI teksta
function updateTodo ($id, $name, $description, $status){
  $manoSQL = "UPDATE todo
              SET
                name = '$name',
                description = '$description',
                status = '$status'
              WHERE ID = '$id'
             ";
  mysqli_query(getPrisijungimas(), $manoSQL);
}


// Gaudi visus galimus tekstus
function getTodo($nr){
  $manoSQL = "SELECT * FROM todo WHERE id = '$nr' ";
  $rezultataiMysqlObj = mysqli_query(getPrisijungimas(), $manoSQL);
  $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObj);
  return $rezultataiArray;
}

function getTodos($kiekis = 999999999){
    $ManoSql = "SELECT * FROM todo limit $kiekis ";
    $tekstaiObj = mysqli_query(getPrisijungimas(), $ManoSql);
    return $tekstaiObj;
}
