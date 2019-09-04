<?php
include_once 'public/header.php';
?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<div id="bienvenido" class="container">  
    <div class="col-md-12">
        <h1>Aqui se muestran los articulos</h1>
        <div class="form-group">

            <label id="etiqueta" name="edad" class="text-uppercase">Articulos:</label>
            <table id="tabla" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">ID
                        </th>
                        <th class="th-sm">Nombre articulo
                        </th>
                        <th class="th-sm">Precio
                        </th>
                        <th class="th-sm">Descripcion
                        </th>
                        <th class="th-sm">Categoria
                        </th>
                        <th class="th-sm">Imagen
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $n = 1;
                    foreach ($vars['registro'] as $item) {
                        if ($item[0] == $n) {
                            $n++;
                            echo '<tr id="tupla" onclick="agregarArticuloCombo(';
                            echo '\'' . $item[0] . '\',';
                            echo '\'' . $item[1] . '\',';
                            echo '\'' . $item[2] . '\',';
                            echo '\'' . $item[3] . '\',';
                            echo '\'' . $item[4] . '\',';
                            echo '\'' . $item[5] . '\' )">';
                            ?>    

                        <td id="fila"><?php echo $item[0] ?></td>
                        <td id="fila"><?php echo $item[1] ?></td>
                        <td id="fila"><?php echo $item[2] ?></td>
                        <td id="fila"><?php echo $item[3] ?></td>
                        <td id="fila"><?php echo $item[4] ?></td>
                        <td id="fila"><img class="img-responsive" src="public/img/<?php echo $item[5] ?>" width="20%" height="20%"</td>

                        </tr>
                        <?php
                    }
                }
                ?> 

                </tbody>

            </table>
        </div>


    </div>
    <?php
    include_once 'public/footer.php';
    ?>