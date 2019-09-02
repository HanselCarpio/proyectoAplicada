<?php
    include_once 'public/header.php';

?>

<div>
    
    </br> 
    
</div>
<section class="login-block" id="admin">
    <div class="container">
        <div class="row">
            <div class="col login-sec">
                <h2 class="text-center">Registrar un articulo</h2>
                <form method="post"  action="?controlador=Articulo&accion=registrarArticulo" id="p" class="login-form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label id="idProduct" name="idProduct" class="text-uppercase">idProduct</label>
                        <input id="idProduct" name="idProduct" placeholder="idProduct" type="text" class="form-control" placeholder="id Product" required>
                    </div>
                    <div class="form-group">
                        <label id="nombre" name="nombre" class="text-uppercase">Nombre</label>
                        <input id="nombre" name="nombre" placeholder="Nombre" type="text" class="form-control" placeholder="su nombre de usuario" required>
                    </div>
                    
                    <div class="form-group">
                        <label id="precio" name="precio"  class="text-uppercase">Precio</label>
                        <input id="Precio" name="Precio" placeholder="Precio" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label id="Descripcion" name="Descripcion" class="text-uppercase">Descripcion</label>
                        <input type="text" id="Descripcion" name="Descripcion" placeholder="Descripcion" type="text" class="form-control" required>
                    </div>
                                                      
                    <div class="form-group">
                        <label id="Categoria" name="Categoria" class="text-uppercase">Categoria</label>
                        <input type="text" id="Categoria" name="Categoria" placeholder="Categoria" type="text" class="form-control" required>
                    </div>   
                    
                    <div class="form-group">
                        <label id="Descripcion" name="Descripcion" class="text-uppercase">Seleccionar imagen</label>
                        <input id="file" name="file" type="file" class="btn btn-secondary"  required/>
                    </div>
                  

                    <div class="form-group">
                        <input class="btn btn-info" type="submit" id="sig in" name="sig in" value="Registrar articulo"/>
                    </div>  
                    
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</body>

<?php
    include_once 'public/footer.php';
?>

</html>