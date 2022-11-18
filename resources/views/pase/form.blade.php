<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre de la Categoria') }}
            {{ Form::text('creado', $pase->creado, ['class' => 'form-control' . ($errors->has('creado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Categoría']) }}
            {!! $errors->first('creado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <?php
        $mysqli = new mysqli('localhost', 'root', '12345', 'laravel');

        ?>

        <html>

        <head>


        <meta charset="utf-8" />

        </head>

        <body>     
            <div align="left">                       

            
            
        <p>Seleccione la subcategoría:

        <select>

        <option value="0">Selecciona:</option>

        <?php

        $query = $mysqli -> query ("SELECT * FROM tipos");

        while ($valores = mysqli_fetch_array($query)) {

        echo '<option value="'.$valores['id'].'">'.$valores['nombre'].'</option>';

        }
        ?>

        </select>

        
        <p>Seleccione el nombre del lugar de entretenimiento:

        <select>

        <option value="0">Selecciona:</option>

        <?php

        $query = $mysqli -> query ("SELECT * FROM personas");

        while ($valores = mysqli_fetch_array($query)) {

        echo '<option value="'.$valores['id'].'">'.$valores['nombre'].'</option>';

        }
        ?>

        </select>
        </p>

        </div>
        </body>

        
        
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>