<div class="box box-info padding-1">
    <div class="box-body">
        
       
        <div class="form-group">
            {{ Form::label('usado') }}
            {{ Form::text('usado', $uso->usado, ['class' => 'form-control' . ($errors->has('usado') ? ' is-invalid' : ''), 'placeholder' => 'Usado']) }}
            {!! $errors->first('usado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
         <div class="form-group">
            {{ Form::label('pase_id') }}
            {{ Form::text('pase_id', $uso->pase_id, ['class' => 'form-control' . ($errors->has('pase_id') ? ' is-invalid' : ''), 'placeholder' => 'Pase Id']) }}
            {!! $errors->first('pase_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usado') }}
            {{ Form::text('created_at', $uso->created_at, ['class' => 'form-control' . ($errors->has('created_at') ? ' is-invalid' : ''), 'placeholder' => 'Usado']) }}
            {!! $errors->first('created_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usado') }}
            {{ Form::text('updated_at', $uso->updated_at, ['class' => 'form-control' . ($errors->has('updated_at') ? ' is-invalid' : ''), 'placeholder' => 'Usado']) }}
            {!! $errors->first('updated_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>