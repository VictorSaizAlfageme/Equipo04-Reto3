<?php
//abrir conexión
function connect(){
    $dbname = "heroku_723961524c37580";
    $host = "eu-cdbr-west-03.cleardb.net";
    $user = "b05c08e784f187";
    $pass = "5ce38962";

    try{
        $db = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
        //echo "conexión correcta a la base de datos";
        return $db;
    }
    catch(PDOException $e){
        echo $e->getMessage();
        return null;
    }
}

//cerrar conexión
function close($db){
    $db = null;
}

/*
//consultar datos de usuario: devuelve array asociativo con todos los datos de un usuario indicado
function selectUsuario($db,$usuario,$pass){
    //preparamos la sentencia
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE usuario = '$usuario'");
    //indicamos fetch mode
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //la ejecutamos
    $stmt->execute();
    //leemos el resultado de la consulta con fetch y se guarda como array asociativo
    //como sabemos que solo nos debe devolver una fila, no lo ponemos dentro de una repetitiva
    $row= $stmt->fetch();
    if (!empty($row)){
        if (password_verify($pass,$row["contraseña"])){
            return $row;
        }else{
            return false;
        }
    }
    return false;
}

function buscarUsuario($db,$id){
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE id = '$id'");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $row= $stmt->fetch();
    if (!empty($row))
    {
        return $row;
    }else{
        return "";
    }
}

function buscarUsuarioOBJ($db,$id){
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE id = '$id'");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    $row= $stmt->fetch();
    if (!empty($row))
    {
        return $row;
    }else{
        return "";
    }
}

function selectNombreDeUsuario($db,$id){
    $stmt = $db->prepare("SELECT usuario FROM usuarios WHERE id = '$id'");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $row= $stmt->fetch();
    if (!empty($row))
    {
        return $row;
    }else{
        return "";
    }
}
//obtener todas las preguntas: devuelve objetos pregunta con todas las columnas
function selectPreguntas($db,$columnaOrdenar,$parametroOrdenar,$where){
    //preparamos la sentencia
    $stmt = $db->prepare("SELECT * FROM preguntas $where ORDER BY $columnaOrdenar $parametroOrdenar");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    $preguntas=[];
    //cada fila se guarda como objeto
    while($row=$stmt->fetch()){
        array_push($preguntas,$row);
    }
    return $preguntas;
}

function selectRespuestas($db,$id){
    $stmt = $db->prepare("SELECT * FROM respuestas WHERE id_pregunta = '$id' ORDER BY fecha asc");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    $respuestas=[];
    //cada fila se guarda como objeto
    while($row=$stmt->fetch()){
        array_push($respuestas,$row);
    }
    return $respuestas;
}

//obtener nombres de temas
function temasAll($db){
    $temas = array();
    $stmt= $db->query('SELECT * from temas');
    $res = $stmt->fetchAll(PDO::FETCH_OBJ);
    if (!empty($res))
    {
        foreach ($res as $row)
        {
            array_push($temas,$row->nombre);
        }
    }
    return $temas;
}
//obtener imagen de usuario concreto: devuelve imagen del usuario indicado
function selectImagen($db,$data){
    $stmt = $db->prepare("SELECT imagen FROM usuarios WHERE id = :autor");
    $stmt->execute($data);
    //leemos con fetchObject, como estamos seleccionando por id se supone solo debe devolver una fila
    $row=$stmt->fetchObject();
    if(!$row)
        echo "error con selectImagen";
    return $row->imagen;
}
//obtener número de respuestas de una pregunta
function selectNumRespuestas($db,$data){
    $stmt = $db->prepare("SELECT id FROM respuestas WHERE id_pregunta = :pregunta");
    $stmt->execute($data);
    $respuestas = [];
    while($row=$stmt->fetch()){
        array_push($respuestas,$row);
    }
    return count($respuestas);
}

function selectCountPreguntasPersona($db,$idPersona){
    $stmt = $db->prepare("SELECT id FROM preguntas WHERE id_autor = '$idPersona'");
    $stmt->execute();
    $preguntas = [];
    while($row=$stmt->fetch()){
        array_push($preguntas,$row);
    }
    return count($preguntas);
}

function selectCountRespuestasPersona($db,$idPersona){
    $stmt = $db->prepare("SELECT id FROM respuestas WHERE id_autor = '$idPersona'");
    $stmt->execute();
    $respuestas = [];
    while($row=$stmt->fetch()){
        array_push($respuestas,$row);
    }
    return count($respuestas);
}

function selectCountRespuestasPregunta($db,$id){
    $stmt = $db->prepare("SELECT id FROM respuestas WHERE id_pregunta = '$id'");
    $stmt->execute();
    $respuestas = [];
    while($row=$stmt->fetch()){
        array_push($respuestas,$row);
    }
    return count($respuestas);
}

function preguntasFavoritasPersona($db,$idUsuario){
    $stmt= $db->query("SELECT id_pregunta from favoritas WHERE id_usuario = '$idUsuario'");
    $res = $stmt->fetchAll(PDO::FETCH_OBJ);
    $preguntas = [];
    if (!empty($res))
    {
        foreach ($res as $row)
        {
            array_push($preguntas,$row);
        }
    }
    return $preguntas;
}

function seleccionarPreguntasEspecificas($db,$ids){
    $preguntas = [];
    if (count($ids) != 0){
        $contador = 0;
        $where = "";
        foreach ($ids as $id){
            $idPregunta = $id->id_pregunta;
            $contador ++;
            $where = $where."id = '$idPregunta'";
            if ($contador != count($ids)){
                $where = $where." OR ";
            }
        }
        $stmt= $db->query("SELECT * from preguntas WHERE $where ORDER BY fecha desc");
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        if (!empty($res))
        {
            foreach ($res as $row)
            {
                array_push($preguntas,$row);
            }
        }
    }
    return $preguntas;
}

function selectPreguntaPorID($db,$id)
{
    $stmt = $db->prepare("SELECT * FROM preguntas WHERE id = '$id'");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    $row = $stmt->fetch();
    if (!empty($row)) {
        return $row;
    } else {
        return "";
    }
}

function selectNumeroDeLikes($db,$id){
    $stmt = $db->prepare("SELECT * FROM likes WHERE id_respuesta = '$id'");
    $stmt->execute();
    $likes = [];
    while($row=$stmt->fetch()){
        array_push($likes,$row);
    }
    return count($likes);
}

function selectLikePersona($db,$idPersona,$idRespuesta){
    $stmt = $db->prepare("SELECT * FROM likes WHERE id_usuario = '$idPersona' AND id_respuesta = '$idRespuesta'");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    $row= $stmt->fetch();
    if (!empty($row))
    {
        return true;
    }else{
        return false;
    }
}

function selectCountRespuestasPreguntaOrderBy($db,$preguntas){
    $respuestas=[];
    if (count($preguntas) != 0){
        foreach ($preguntas as $pregunta){
            $id = $pregunta->id;
            $stmt = $db->prepare("SELECT id FROM respuestas WHERE id_pregunta = '$id'");
            $stmt->execute();
            $res = [];
            while($row=$stmt->fetch()){
                array_push($res,$row);
            }
            $fila = [$id,count($res)];
            array_push($respuestas,$fila);
        }
    }
    return $respuestas;
}

function selectAutoresCadenaCaracteres($db,$texto,$columna){
    $stmt = $db->prepare("SELECT id FROM usuarios WHERE $columna LIKE '%$texto%'");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    $autores = [];
    while($row=$stmt->fetch()){
        array_push($autores,$row);
    }
    return $autores;
}
