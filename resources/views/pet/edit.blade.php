@extends('layout.main')

@section('body')
    <script>
        function close_modal() {
            $('#modalClientPet').modal('hide');
        }

        function add_client_to_pet(element) {
            document.getElementById('id_client').value = document.getElementById('grid_client_pet').rows[element.parentNode.parentNode.rowIndex].cells[0].innerHTML;
            document.getElementById('client_pet').value = document.getElementById('grid_client_pet').rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML;

            close_modal();
        }
    </script>

    {{-- Modal Client --}}
    <div class="modal fade" id="modalClientPet" tabindex="-1" aria-labelledby="modalClientPetLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalClientPetLabel">Clients</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table id="grid_client_pet" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px;">#</th>
                                <th>Name</th>
                                <th style="width: 140px;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-primary" data-bs-toggle="tooltip" data-placement="top" onclick="add_client_to_pet(this)">
                                            <i class="fa fa-plus"></i> Selecionar
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-primary" role="alert">
        <h2>Edit Pet</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <br>

                    <div class="box-body no-padding">
                        <form action="/pet/{{ $thePet->id }}" method="post" role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" oninvalid="this.setCustomValidity('Campo requerido.')" onchange="try{setCustomValidity('')}catch(e){}" value="{{ $thePet->name }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="id_client" name="id_client" value="{{ $thePet->id_client ?? '' }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="client_pet">Cliente:</label>
                                    <input type="text" class="form-control" id="client_pet" name="client_pet" value="{{ $thePet->client->name ?? '' }}" onkeydown="return false" required>
                                </div>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalClientPet">
                                    Selecionar Cliente
                                </button>
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
                                    <input type="number" class="form-control" id="height" name="height" step="0.001" placeholder="0.000" value="{{ $thePet->height }}">
                                </div>
                                <div class="form-group">
                                    <label for="weight">Peso</label>
                                    <input type="number" class="form-control" id="weight" name="weight" step="0.001" placeholder="0.000" value="{{ $thePet->weight }}">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gênero</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="M" @if($thePet->gender == 'M') {{ 'selected' }} @endif>M</option>
                                        <option value="F" @if($thePet->gender == 'F') {{ 'selected' }} @endif>F</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="birth_date">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $thePet->birth_date }}" required>
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
                                    <textarea class="form-control" id="observations" name="observations" rows="4">{{ $thePet->observations }}</textarea>
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