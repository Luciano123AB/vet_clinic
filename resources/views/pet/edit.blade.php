@extends('layout.main')

@section('body')
    <div class="alert alert-primary" role="alert">
        <h2>Edit Pet</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <br>

                    <div class="box-body no-padding">
                        <form action="/pet/edit/{{ $thePet->id }}" method="post" role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" oninvalid="this.setCustomValidity('Campo requerido.')" onchange="try{setCustomValidity('')}catch(e){}" value="{{ $thePet->name }}" required>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="no_photo" name="no_photo">
                                    <label for="no_photo" class="no_photo">Sem Foto</label>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Foto</label>
                                    <input type="file" class="form-control" id="photo" name="photo">
                                </div>
                                <div class="form-group">
                                    <label for="specie">Espécie</label>
                                    <input type="text" class="form-control" id="specie" name="specie" value="{{ $thePet->specie }}">
                                </div>
                                <div class="form-group">
                                    <label for="breed">Raça</label>
                                    <input type="text" class="form-control" id="breed" name="breed" value="{{ $thePet->breed }}">
                                </div>
                                <div class="form-group">
                                    <label for="color">Cor</label>
                                    <input type="text" class="form-control" id="color" name="color" value="{{ $thePet->color }}">
                                </div>
                                <div class="form-group">
                                    <label for="height">Altura</label>
                                    <input type="number" class="form-control" id="height" name="height" step="0.001" value="0.000" placeholder="0.000" value="{{ $thePet->height }}">
                                </div>
                                <div class="form-group">
                                    <label for="weight">Peso</label>
                                    <input type="number" class="form-control" id="weight" name="weight" step="0.001" value="0.000" placeholder="0.000">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gênero</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="birth_date">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="father">Pai</label>
                                    <input type="text" class="form-control" id="father" name="father" value="{{ $thePet->father }}">
                                </div>
                                <div class="form-group">
                                    <label for="mother">Mãe</label>
                                    <input type="text" class="form-control" id="mother" name="mother" value="{{ $thePet->mother }}">
                                </div>
                                <div class="form-group">
                                    <label>Observações</label>
                                    <textarea class="form-control" id="observations" name="observations" rows="4" value="{{ $thePet->observations }}"></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection