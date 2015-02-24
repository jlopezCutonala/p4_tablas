<!DOCTYPE html>
<html>
    <head>
        <title>Tablas</title>
    </head>
    <body>
        <h1>Alumnos</h1>
        <img src="https://www.google.es/images/srpr/logo11w.png" />
        <?php
            $alumnos = array(
                'juan perez',
                'jose Hernandez',
                'Maria Fonseca',
                1,
                4.5
            );
            $alumnos[5] = 'Nuevo';
            $alumnos[]= 'Otro 1';
            $alumnos[] = 'Otro 2';
            echo '<h2>';
            echo $alumnos[7];
            echo '</h2>';
            $alumnos = array(
                /*0*/array(
                    'id' => '1',
                    'codigo' => '34354454',
                    'nombre' => 'Juan Perez'
                ),
                /*1*/array(
                    'id' => '2',
                    'codigo' => '343344343',
                    'nombre' => 'Jose Hernandez'
                ),
                /*2*/array(
                    'id' => '3',
                    'codigo' => '7766776',
                    'nombre' => 'Maria Fonseca'
                ),
                /*3*/array(
                    'id' => '4',
                    'codigo' => '121211',
                    'nombre' => 'Margarita Herrera'
                ),
                array(
                    'id' => '5',
                    'codigo' => '3993546',
                    'nombre' => 'Jonathan'
                ),
                array(
                    'id' => '6',
                    'codigo' => '1111',
                    'nombre' => 'Ana Valencia'
                )
            );
            echo '<label>'.$alumnos[2]['nombre'].'</label>';
            echo '<br><br>';
        ?>
        <br>
        <br>
        <table>
            <tr>
                <th>ID</th>
                <th>C&oacute;digo</th>
                <th>Nombre</th>
            </tr>
            <?php foreach ($alumnos as $alumno) { ?>
                <tr>
                    <td><?php echo $alumno['id']; ?></td>
                    <td><?php echo $alumno['codigo']; ?></td>
                    <td><?php echo $alumno['nombre']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>

