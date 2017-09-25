@extends('templates.app')

@section('content')
    @include('errors._check')

    {{Form::open(array('route'=>'admin.users.store',  'name'=>'form', 'data-toggle'=>'validator'))}}
    <div class="container">
        <div class="form-horizontal">
            <h1>Adoção de Animal</h1>

            <div class="form-group">
                <label for="name" class="col-md-4 control-label">Tipo de animal</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        {{Form::select('species_pet', ['dog'=>'Cachorro', 'cat'=>'Gato', 'other'=>'Outros'],null, ['class' => 'form-control'])}}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-md-4 control-label">Nome do animal</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        {{Form::text('name_pet','', array('placeholder' => 'Nome do animal','class' => 'form-control', 'required'))}}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-md-4 control-label">Idade do animal</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        {{Form::number('age_pet','', array('class' => 'form-control'))}}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-md-4 control-label">Tamanho do animal</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        {{Form::select('proportion_pet', ['nda'=>'Não informar', 'small'=>'Pequeno', 'medium'=>'Médio', 'big'=>'Grande'],null, ['class' => 'form-control'])}}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-md-4 control-label">Sexo do animal</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        {{Form::select('breed_pet', ['nda'=>'Não informar', 'male'=>'Macho', 'female'=>'Fêmea'],null, ['class' => 'form-control'])}}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-md-4 control-label">Fotos do animal</label>

                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>

                        <div class="dropzone" action="#" id="addImages">

                            {{csrf_field()}}
                            <input type="hidden" name="gallery_id" value="">
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-3 col-md-offset-3 pull-right">

                    {{Form::submit('Salvar', ['class'=>'btn btn-primary'])}}
                    {{Form::close()}}
                </div>
            </div>
        </div>


    </div>

@stop