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
                        <td id="fila"><img class="img-responsive" src="public/img/<?php echo $item[5] ?>" width="50%" height="50%"</td>
<!--                        <td id="fila">
                            <a  href="?controlador=Venta&accion=comprar&id=<?php echo $item[0] ?>&nombre=<?php echo $item[1] ?>&precio=<?php echo $item[2] ?>&persona=<?php echo $item[2] ?>" class="btn btn-block btn-lg btn-success" id="btienda">
                                <span class="texto_grande">Comprar de inmediato </span></a>

                            <a  href="?controlador=Venta&accion=comprar&id=<?php echo $item[0] ?>&nombre=<?php echo $item[1] ?>&precio=<?php echo $item[2] ?>&persona=<?php echo $item[2] ?>" class="btn btn-block btn-lg btn-success" id="btienda">
                                <span class="texto_grande">Agregar al carrito </span></a>
                        </td>   -->



                        </tr>
                        <?php
                    }
                }
                ?> 

                </tbody>

            </table>
        </div>


    </div>
<!--    <div class="col-md-6">
        <h1>Aqui se muestran los combos</h1>
        <div class="form-group">
            <label id="etiqueta" name="edad" class="text-uppercase">Articulos:</label>
            <table id="tabla" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Nombre Combo
                        </th>
                        <th class="th-sm">Precio
                        </th>
                        <th class="th-sm">Calificacion
                        </th>
                        <th class="th-sm">
                        </th>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php/*
                    $n = 1;
                    foreach ($vars['registro'] as $item) {

                        echo '<tr id="tupla" onclick="agregarArticuloCombo(';
                        echo '\'' . $item[7] . '\',';
                        echo '\'' . $item[8] . '\',';
                        echo '\'' . $item[9] . '\' )">';

                        if ($item[6] == $n) {
                            $n++;
                            ?>    

                        <td id="fila"><?php echo $item[7] ?></td>
                        <td id="fila"><?php echo $item[8] ?></td>
                        <td id="fila"><?php echo $item[9] ?></td> 
                        <td id="fila">
                            <a  href="?controlador=Venta&accion=comprar&id=<?php echo $item[6] ?>&nombre=<?php echo $item[7] ?>&precio=<?php echo $item[8] ?>&persona=<?php echo $item[2] ?>" class="btn btn-block btn-lg btn-success" id="btienda">
                                <span class="texto_grande">Comprar de inmediato </span></a>
                        </td>

                        </tr>
                        <?php
                  //  }
                //}/*
                ?> 

                </tbody>

            </table>
        </div>
    </div>-->
</div>
</body>











<!--<div class="jumbotron text-center">
        <h1> Las mejores laptops del país </h1>
        <h3>Acá te podes llevar una grata sorpresa por la variedad de laptops que hay en nuestras ventas</h3>

    </div>

    <div id="contenido" class="container">
        <div class="row">

            <div class="col-sm-8 background-grey container-fluid">

                <h2>productos</h2>
                <div id="bienvenido" class="container-fluid">

                    <div id="campo1" class="col-sm-4">
                        <div class="thumbnail text-center">
                            <img src="public/img/mc/big_new_cr.png" alt="Mc" width="150" height="100">
                            <p id="bigMc"><strong> Big Mc ¢3000 </strong></p>
                        </div>
                        <div class="thumbnail text-center">
                            <img src="public/img/mc/mc-flurry-oreo_new_cr.png" alt="Mc" width="150" height="100">
                            <p id="mcFlurry"><strong> Mc Flurry ¢1300 </strong></p>
                        </div>
                    </div>
    
                    <div id="campo2" class="col-sm-4">
                        <div class="thumbnail text-center">
                            <img src="public/img/mc/mc-wrap-classic.png" alt="Mc" width="150" height="100">
                            <p id="mcWrap"><strong> Mc Wrap ¢2000 </strong></p>
                        </div>
                        <div class="thumbnail text-center">
                            <img src="public/img/mc/papas.png" alt="Mc" width="150" height="100">
                            <p id="mcPapas"><strong> Papas ¢700 </strong></p>
                        </div>
                    </div>
    
                    <div id="campo3" class="col-sm-4">
                        <div class="thumbnail text-center">
                            <img src="public/img/mc/COCA_1.png" alt="Mc" width="150" height="100">
                            <p id="refresco"><strong> Refresco ¢700 </strong></p>
                        </div>
                        <div class="thumbnail text-center">
                            <img src="public/img/mc/pollo-mc-crispy_new_cr.png" alt="Mc" width="150" height="100">
                            <p id="mcPolla"><strong> Pollo McCrispy ¢1000 </strong></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container fluid background-grey">
            <div class="row">
                <div class="col-sm-4">

                </div>
            </div>
        </div>              
    </div>-->
<?php
include_once 'public/footer.php';
?>