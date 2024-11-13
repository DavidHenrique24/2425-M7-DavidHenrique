<?php
function generarTablaProductos($productos){
    echo "<table class='table table-bordered'>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                </tr>
            </thead>
            <tbody>";

    foreach ($productos as $producto) {
        echo "<tr>
                <td>" . $producto['nombre'] . "</td>
                <td>" . $producto['precio'] . "</td>";

        if ($producto['disponibilidad'] == true) {
            echo "
                        <td class>Hay en stock</td>
                    ";
        } else {
            echo "
                        <td>No hay en stock</td>
                    ";
        }

        echo "</tr>";
    }

    echo "</tbody></table>";
}


function muestraInfoContacto($nombre, $telefono, $urlFoto){
    echo "
        <div class='mb-3'><strong>Nombre: </strong> $nombre</div>
        <div class='mb-3'><strong>Telefono: </strong>$telefono</div>
        <div class='mb-3'><strong>Foto de Perfil: </strong><img src='$urlFoto' alt='' style='width: 300px' class='mx-auto d-block'></div>
    ";
}



?>