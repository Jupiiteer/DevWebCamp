<h1 class="dashboard__heading"><?php echo $titulo; ?></h1>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/ponentes">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>

<div class="dashboard__formulario">
    <?php include_once __DIR__ . './../../templates/alertas.php'; ?>
    <form enctype="multipart/form-data" method="post" class="formulario">
        <?php include_once __DIR__ . '/formulario.php'; ?>
        <input type="submit" value="Actualizar Ponente" class="formulario__submit formulario__submit--registrar">
    </form>
</div>