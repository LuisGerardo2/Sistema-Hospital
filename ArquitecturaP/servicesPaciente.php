<?php
include "config.php";
include "utils.php";
$dbConn =  connect($db);

/*
  listar todos los o solo uno usando GET - En cliente postman usar codigo como param
 */
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if (isset($_GET['id_ref']))
    {
      //Mostrar un  utilizando GET
      $sql = $dbConn->prepare("SELECT * FROM paciente where id_paciente=:codigo");
      $sql->bindValue(':codigo', $_GET['id_ref']);
      $sql->execute();
      header("HTTP/1.1 200 OK");
      echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
      exit();
	}
    else {
      //Mostrar lista de refacciones con su proveedor
      $sql = $dbConn->prepare("SELECT paciente.Nombre, paciente.Edad, recepcionista.Id_recep, 
recepcionista.Nombre,recepcionista.Telefono_recep
FROM paciente, recepcionista 
WHERE paciente.Id_recep= recepcionista.Id_recep;");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll()  );
      
      exit();
	}
}

//Insertar refacciones - En cliente Postman utilizar Body para el envío de valores
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$sql = "INSERT INTO paciente(Id_paciente, Nombre, Sexo, Edad,Tel_paciente, Direcc_paciente, Id_recep) VALUES (:idref, :nombreref, :sexoref,:Edadref,:Telref, :direcref,:Idrecrep);"; 
    $statement = $dbConn->prepare($sql);
    $statement->bindValue(':idref', $_POST['id_ref']);
    $statement->bindValue(':nombreref', $_POST['nombre_ref']);
    $statement->bindValue(':sexoref', $_POST['sexoref']);
	$statement->bindValue(':Telref', $_POST['Telref']);
	$statement->bindValue(':direcref' ,$_POST['direcref']);
  $statement->bindValue(':Idrecrep' ,$_POST['Idrecrep']);
  $statement->bindValue(':Edadref' ,$_POST['Edadref']);
  $statement->execute();
    $postId= $dbConn -> lastInsertId();
    if($postId){
      header("HTTP/1.1 200 OK");
      echo json_encode($postId);
      exit();
    }
}

//Actualizar refacciones - Utilizar cliente Postman en param
if ($_SERVER['REQUEST_METHOD'] == 'PUT')
{
	//UPDATE refacciones SET color = 'naranja' WHERE idRefaccion = 3;
  $sql = "UPDATE paciente SET Id_paciente=:idref, Nombre=:nombreref, Sexo=:sexoref, Edad=:Edadref,Tel_paciente=:Telref, Direcc_paciente=:direcref, Id_recep=:Idrecrep WHERE Id_paciente=:idref;";
  $statement = $dbConn->prepare($sql);
  $statement->bindValue(':idref', $_GET['id_ref']);
  $statement->bindValue(':nombreref', $_GET['nombre_ref']);
  $statement->bindValue(':sexoref', $_GET['sexoref']);
  $statement->bindValue(':Telref', $_GET['Telref']);
  $statement->bindValue(':direcref' ,$_GET['direcref']);
  $statement->bindValue(':Idrecrep' ,$_GET['Idrecrep']);
  $statement->bindValue(':Edadref' ,$_GET['Edadref']);
  $statement->execute();
  header("HTTP/1.1 200 OK");
  exit();
  
}

//Eliminar refacciones - parametro en postman id_ref
if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
  $idRefac = $_GET['id_ref'];
  $statement = $dbConn->prepare("DELETE FROM paciente WHERE id_paciente=:idref;");
  $statement->bindValue(':idref', $idRefac);
  $statement->execute();
	header("HTTP/1.1 200 OK - Registro eliminado");
	exit();
}

//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");

//Prueba: http://localhost/apiRestProveeRef/services.php
?>