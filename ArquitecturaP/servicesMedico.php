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
      $sql = $dbConn->prepare("SELECT * FROM medico where id_medico=:codigo");
      $sql->bindValue(':codigo', $_GET['id_ref']);
      $sql->execute();


      header("HTTP/1.1 200 OK");
      echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
      exit();
	}
    else {
      //Mostrar lista de refacciones con su proveedor
      $sql = $dbConn->prepare("SELECT medico.Nombre_medico, medico.Especialidad, medico.Telefono_medico,paciente.Nombre,paciente.edad
FROM medico, paciente 
WHERE medico.Id_paciente= paciente.Id_paciente;");
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
	$sql = "INSERT INTO medico(id_medico, Nombre_medico, Especialidad, Telefono_medico, Id_paciente) VALUES (:idref, :nombreref, :Esperef,:Telref,:Id_pac);"; 
    $statement = $dbConn->prepare($sql);
    $statement->bindValue(':idref', $_POST['id_ref']);
    $statement->bindValue(':nombreref',$_POST['nombre_ref']);
    $statement->bindValue(':Esperef', $_POST['Esperef']);
	$statement->bindValue(':Telref', $_POST['Telref']);
  $statement->bindValue(':Id_pac' ,$_POST['Id_pac']);
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
  $sql = "UPDATE medico SET id_medico=:idref, Nombre_medico=:nombreref, Especialidad=:Esperef, Telefono_medico=:Telref,Id_paciente=:Id_pac WHERE id_medico=:idref;";
  $statement = $dbConn->prepare($sql);
  $statement->bindValue(':idref', $_GET['id_ref']);
  $statement->bindValue(':nombreref', $_GET['nombre_ref']);
  $statement->bindValue(':Esperef', $_GET['Esperef']);
  $statement->bindValue(':Telref', $_GET['Telref']);
  $statement->bindValue(':Id_pac' ,$_GET['Id_pac']);
  $statement->execute();
  header("HTTP/1.1 200 OK");
  exit();
  
}

//Eliminar refacciones - parametro en postman id_ref
if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
  $idRefac = $_GET['id_ref'];
  $statement = $dbConn->prepare("DELETE FROM medico WHERE id_medico=:idref;");
  $statement->bindValue(':idref', $idRefac);
  $statement->execute();
	header("HTTP/1.1 200 OK - Registro eliminado");
	exit();
}

//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");

//Prueba: http://localhost/apiRestProveeRef/services.php
?>