<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Personal</legend>
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="formulario__input" placeholder="Nombre Ponente" value="<?php echo $ponente->nombre ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="formulario__input" placeholder="Apellido Ponente" value="<?php echo $ponente->apellido ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="ciudad" class="formulario__label">Ciudad</label>
        <input type="text" name="ciudad" id="ciudad" class="formulario__input" placeholder="Ciudad Ponente" value="<?php echo $ponente->ciudad ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="pais" class="formulario__label">País</label>
        <input type="text" name="pais" id="pais" class="formulario__input" placeholder="País Ponente" value="<?php echo $ponente->pais ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">Imagen</label>
        <input type="file" name="Imagen" id="Imagen" class="formulario__input formulario__input--file">
    </div>

    <?php if (isset($ponente->imagen_actual)) { ?>
        <p class="formulario__texto">Imagen Actual:</p>
        <div class="formulario__imagen">
            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" type="image/png">
                <img src="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" alt="Imagen ponente">
            </picture>
        </div>
    <?php } ?>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

    <div class="formulario__campo">
        <label for="tags-input" class="formulario__label">Áreas de Experiencia ( Separadas por coma )</label>
        <input type="text" id="tags-input" class="formulario__input" placeholder="Ej. Node.js, PHP, Laravel, UX / UI">
        <div id="tags" class="formulario__listado"></div>
        <input type="hidden" name="tags" value="<?php echo $ponente->tags ?? ''; ?>">
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Redes Sociales</legend>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-facebook"></i>
            </div>
            <input type="text" name="redes[facebook]" class="formulario__input--sociales" placeholder="Facebook" value="<?php echo $redes->facebook ?? ''; ?>">
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-x"></i>
            </div>
            <input type="text" name="redes[twitter]" class="formulario__input--sociales" placeholder="X" value="<?php echo $redes->twitter ?? ''; ?>">
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-youtube"></i>
            </div>
            <input type="text" name="redes[youtube]" class="formulario__input--sociales" placeholder="Youtube" value="<?php echo $redes->youtube ?? ''; ?>">
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <input type="text" name="redes[instagram]" class="formulario__input--sociales" placeholder="Instagram" value="<?php echo $redes->instagram ?? ''; ?>">
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-tiktok"></i>
            </div>
            <input type="text" name="redes[tiktok]" class="formulario__input--sociales" placeholder="TikTok" value="<?php echo $redes->tiktok ?? ''; ?>">
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-github"></i>
            </div>
            <input type="text" name="redes[github]" class="formulario__input--sociales" placeholder="GitHub" value="<?php echo $redes->github ?? ''; ?>">
        </div>
    </div>
</fieldset>