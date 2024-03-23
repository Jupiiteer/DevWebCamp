<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información del Evento</legend>
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre del Evento</label>
        <input type="text" name="nombre" id="nombre" class="formulario__input" placeholder="Nombre del Evento" value="<?php echo $evento->nombre ?? ''; ?>">
    </div>
    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripción</label>
        <textarea name="descripcion" id="descripcion" class="formulario__input" rows="8" placeholder="Descripción del Evento" value="<?php echo $evento->descripcion ?? ''; ?>"></textarea>
    </div>
    <div class="formulario__campo">
        <label for="categorias" class="formulario__label">Categoría o Tipo de Evento</label>
        <select name="categoria_id" id="categoria" class="formulario__select">
            <option value="" selected disabled>- Seleccionar -</option>
            <?php foreach ($categorias as $categoria) : ?>
                <option value="<?php echo $categoria->id; ?>" <?php echo ($evento->categoria_id === $categoria_id) ? 'selected' : '' ?>><?php echo $categoria->nombre; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Selecciona el día</label>
        <div class="formulario__radio">
            <?php foreach ($dias as $dia) : ?>
                <div class="">
                    <label for="<?php echo strtolower($dia->nombre); ?>"><?php echo $dia->nombre; ?></label>
                    <input type="radio" id="<?php echo strtolower($dia->nombre); ?>" name="dia" value="<?php echo $dia->id; ?>" <?php echo ($evento->dia_id === $dia->id) ? 'checked' : ''; ?> </div>
                <?php endforeach; ?>
                </div>
                <input type="hidden" name="dia_id" value="<?php echo $dia->dia_id; ?>">
        </div>

        <div id="horas" class="formulario__campo">
            <label for="" class="formulario__label">Seleccionar horario</label>

            <ul id="horas" class="horas">
                <?php foreach ($horas as $hora) : ?>
                    <li data-hora-id="<?php echo $hora->id; ?>" class="horas__hora horas__hora--deshabilitada"><?php echo $hora->hora; ?></li>
                <?php endforeach; ?>
            </ul>
            <input type="hidden" name="hora_id" value="">
        </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>
    <div class="formulario__campo">
        <label for="ponentes" class="formulario__label">Ponente</label>
        <input type="text" id="ponentes" class="formulario__input" placeholder="Buscar Ponente">
        <ul id="listado-ponentes" class="listado-ponentes"></ul>
        <input type="hidden" name="ponente_id" value="<?php echo $evento->ponente_id; ?>">
    </div>
    <div class="formulario__campo">
        <label for="disponibles" class="formulario__label">Lugares Disponibles</label>
        <input type="number" id="disponibles" name="disponibles" min="1" class="formulario__input" placeholder="Ej. 20" value="<?php echo $evento->disponibles ?>">
    </div>
</fieldset>