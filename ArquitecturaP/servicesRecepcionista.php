<?php
/*
  Dr. JoL
 */
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
      $sql = $dbConn->prepare("SELECT * FROM recepcionista where id_recep=:codigo");
      $sql->bindValue(':codigo', $_GET['id_ref']);
      $sql->execute();


      header("HTTP/1.1 200 OK");
      echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
      exit();
	}
    else {
      //Mostrar lista de refacciones con su proveedor
      $sql = $dbConn->prepare("SELECT recepcionista.Nombre, recepcionista.Telefono_recep, paciente.Nombre, paciente.Id_paciente FROM recepcionista, paciente 
WHERE recepcionista.id_recep= paciente.id_recep;");
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
	$sql = "INSERT INTO recepcionista(id_recep, Nombre, Telefono_recep) VALUES (:idref, :nombreref, :Telref);"; 
    $statement = $dbConn->prepare($sql);
    $statement->bindValue(':idref', $_POST['id_ref']);
    $statement->bindValue(':nombreref',$_POST['nombre_ref']);
	$statement->bindValue(':Telref', $_POST['Telref']);
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
  $sql = "UPDATE recepcionista SET id_recep=:idref, Nombre=:nombreref, Telefono_recep=:Telref WHERE id_recep=:idref;";
  $statement = $dbConn->prepare($sql);
  $statement->bindValue(':idref', $_GET['id_ref']);
  $statement->bindValue(':nombreref', $_GET['nombre_ref']);
  $statement->bindValue(':Telref', $_GET['Telref']);
  $statement->execute();
  header("HTTP/1.1 200 OK");
  exit();
  
}

//Eliminar refacciones - parametro en postman id_ref
if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
  $idRefac = $_GET['id_ref'];
  $statement = $dbConn->prepare("DELETE FROM recepcionista WHERE id_recep=:idref;");
  $statement->bindValue(':idref', $idRefac);
  $statement->execute();
	header("HTTP/1.1 200 OK - Registro eliminado");
	exit();
}

//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");

//Prueba: http://localhost/apiRestProveeRef/services.php
?>