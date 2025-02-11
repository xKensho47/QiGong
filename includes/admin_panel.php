<?php
    require_once __DIR__ . '/../config/connection.php';

    function mostrarTabla(){
        global $conexion;
        if (!isset($_SESSION['login_status'])) {
            return ''; // No hay mensaje, así que no se muestra nada
        }

        // Consultar los datos de la tabla 'class'
        $consulta_clases = "SELECT id_class, title, description, path_img, link FROM class";
        $resultado = $conexion->query($consulta_clases);

        // Generar las filas de la tabla con los datos obtenidos
        $filas = '';
        while ($fila = $resultado->fetch_assoc()) {
            $filas .= '
            <tr class="flex w-100">
                <th scope="row">' . $fila['id_class'] . '</th>
                <td>' . $fila['title'] . '</td>
                <td>' . $fila['description'] . '</td>
                <td class="d-none">' . $fila['path_img'] . '</td>
                <td>' . $fila['link'] . '</td>
                <td class="flex d-flex justify-content-between">
                    <button class="btn btn-warning btn-sm me-2 w-100" onclick="editarClase(' . $fila['id_class'] . ')">Editar</button>
                    <button class="btn btn-danger btn-sm w-100" onclick="eliminarClase(' . $fila['id_class'] . ')">Eliminar</button>
                </td>
            </tr>';
        }

        return '
        <div class="container mt-5">
            <h2 class="mb-4">Clases de QiGong</h2>
            <button class="btn btn-success mb-3" onclick="agregarClase()">Agregar Nueva Clase</button>
            <table class="table table-xl table-striped table-hover mt-3">
                <thead>
                    <tr class="flex w-100">
                        <th scope="col">#ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th class="d-none" scope="col">Ruta de imagen</th>
                        <th scope="col">Link del video</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ' . $filas . '
                </tbody>
            </table>
        </div>
        ';
    }
?>