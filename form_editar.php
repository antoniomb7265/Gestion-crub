<?php 
    require_once("lib/funcionesTabla.php");
    $tabla = generarTabla();
    $cabecera = array_keys($tabla[0]);
    $desplegable = generarDesplegable();

    $key = $_GET['indice'];
    $registro = $tabla[$key];
    
    $Descripcion = $registro['Descripcion'];
    $Modelo = $registro['Modelo'];
    $Categoria = $registro['Categoria'];
    $Unidades = $registro['Unidades'];
    $Precio = $registro['Precio'];
?>
<!doctype html>
<?php
    require_once("./template/partials/link.php");
?>
<div class="container">
    <body>
        <?php
            require_once("./template/partials/head.php");
            require_once("./template/menu.php");
        ?>
        <section> 
            <article>
                <legend>Editar articulo</legend>
                <?php require_once("./template/partials/form_editar.php"); ?>
            </article>
        </section>
        </div>
        <?php 
            require_once("./template/partials/footer.php");
        ?>
    </body>
</html>