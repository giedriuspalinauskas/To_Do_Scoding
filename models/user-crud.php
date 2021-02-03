<?php


//getPrisijungimas();

// grazina konkretu gygdtojo duomenis is Db
//$nr - norimo gydytojo 'id' is duomenu bazes
//return - grazina masyva(array)
function getUser($nr){
  $manoSQL = "SELECT * FROM user WHERE id = '$nr' ";
  $rezultataiMysqlObj = mysqli_query(getPrisijungimas(), $manoSQL);
  //testas
  $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObj);
  return $rezultataiArray;
}


// KURTI VARTOTOJA
function createUser($nickname, $pass, $status=1) {
  $manoSQL = "INSERT INTO user
                  VALUES (NULL, '$nickname', '$pass', '$status', NOW())
             ";
  $arPavyko = mysqli_query(getprisijungimas(),$manoSQL);
  if($arPavyko == false && DEBUG_MODE > 0){
    echo "ERROR: prisijungti nepavyko sukurti!!! <br>";
    echo mysqli_error(getPrisijungimas());
  }
}



// TRINTI VARTOTOJA
function deleteUser($nr){
  $manoSql = "DELETE FROM user
              WHERE id = '$nr'
             ";
  mysqli_query(getPrisijungimas(), $manoSql);
}


// GALIMA EDITINTI VAROTOJA
function updateUser ($id, $nickname, $pass, $status=1){
  $manoSQL = "UPDATE user
              SET
                name = '$nickname',
                password = '$pass',
                status = '$status',
              WHERE id = '$id'
             ";
  mysqli_query(getPrisijungimas(), $manoSQL);
}


// Gaudi visus galimus vartotojus
function getUsers($kiekis = 999999999){
    $ManoSql = "SELECT * FROM user limit $kiekis ";
    $vartotojuObj = mysqli_query(getPrisijungimas(), $ManoSql);
    // $gydytojuMasyvas = mysqli_fetch_assoc($gydytojaiObj);

    return $vartotojuObj;
}
