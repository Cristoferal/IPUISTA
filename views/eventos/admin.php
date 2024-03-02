<main class="contenedor seccion">
        <h1>Administrador Iglesia Pentecostal Unida Internacional de Santa Ana</h1>

        <?php 
            if ($resultado) {
                $mensaje = mostrarNotificacion(intval($resultado));
                if ($mensaje) { ?>
                    <p class='alerta exito'><?php echo s($mensaje) ?> </p>
                <?php } 
            } 
        ?>

        <a href="/eventos/crear" class="boton boton-verde">Nuevo evento</a>  <!--se le agrega propiedades/ -->
        <a href="/presentadores/crear" class="boton boton-amarillo">Nuevo presentador</a>
        
        <h2>Eventos</h2>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <!-- <th>Precio</th> -->
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!--. Mostrar los resultados -->
                <?php foreach($propiedades as $propiedad): ?>
                <tr>
                    <td><?php echo $propiedad->id; ?> </td>
                    <td><?php echo $propiedad->titulo; ?> </td>
                    <td> <img src="/imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-tabla"> </td>
                    <!-- <td>$ <?php echo $propiedad->precio; ?> </td> -->
                    <td>
                        <form method="POST" class="w-100" action="/eventos/eliminar">
                            <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
                            <input type="hidden" name="tipo" value="propiedad">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="/eventos/actualizar?id=<?php echo$propiedad->id; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Presentadores</h2>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!--. Mostrar los resultados -->
                <?php foreach($vendedores as $vendedor): ?>
                <tr>
                    <td><?php echo $vendedor->id; ?> </td>
                    <td><?php echo $vendedor->nombre . " " . $vendedor->apellido; ?></td>
                    <td><?php echo $vendedor->telefono; ?> </td>
                    <td>
                        <form method="POST" class="w-100" action="/presentadores/eliminar">
                            <input type="hidden" name="id" value="<?php echo $vendedor->id; ?>">
                            <input type="hidden" name="tipo" value="vendedor">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="presentadores/actualizar?id=<?php echo $vendedor->id; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</main>