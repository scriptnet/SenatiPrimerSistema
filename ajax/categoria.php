<?php
    require_once "../modelo/categoria.php";

    $categoria = new Categoria();
    
    $idcategoria = isset($_POST["idtblcategoria"])?limpiarcadena($_POST["idtblcategoria"]):"";
    $nombre    = isset($_POST["nombre"])?limpiarcadena($_POST["nombre"]):"";
    $descripcion    = isset($_POST["descripcion"])?limpiarcadena($_POST["descripcion"]):"";
      
    switch ($_GET["op"]){
        case 'guardaryeditar':
            if (empty($categoria)) {
                //si me mandan categoria
                $respuesta = $categoria->insertar($nombre, $descripcion, $condicion);
                echo $respuesta ? "Categoria se insertó":"La categoría no se insertó";
            } else {
                $respuesta = $categoria->editar($categoria,$nombre, $descripcion, $condicion);
                echo $respuesta ? "Categoria se insertó":"La categoría no se Actualizó";
            }
            
        break;

        case 'desactivar':
                $respuesta = $categoria->desactivar($categoria);
                echo $respuesta ? "Categoria se desactivó":"No se desactivó";
        break;

        case 'activar':
                $respuesta = $categoria->activar($categoria);
                echo $respuesta ? "Categoria se Activó":"No se Desactivó";
        break;

        case 'mostrar':
                $respuesta = $categoria->mostrar($categoria);
                echo json_encode($respuesta);
        break;

        case 'listar':
                $respuesta = $categoria->listar();

               
                //declarar
                $data[] = array();
                while ($registro = $respuesta->fetch_object()) {
                    $data[] = array(
                        "0" => $registro -> idtblcategoria,
                        "1" => $registro -> nombre,
                        "2" => $registro -> descripcion,
                        "3" => $registro -> condicion
                    );
                }

                $resultados = array(
                    "eEcho" => 1, //informacion para el data table
                    "iTotalRecords" => COUNT($data), //ENVIAMOS EL TOTAL DE REGISTROS 
                    "iTotalDisplayRecords" => COUNT($data),
                    "aData" => $data 
                );

               echo json_encode($resultados);
        break;
    }
?>
