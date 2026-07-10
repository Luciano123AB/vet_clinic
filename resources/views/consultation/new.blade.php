@extends('layout.main')

@section('body')
    <script>
        //Veterinários
        function close_modal_vets() {
            $('#modalVets').modal('hide');
        }

        function add_vet(element) {
            document.getElementById('id_vet').value = document.getElementById('grid_vet').rows[element.parentNode.parentNode.rowIndex].cells[0].innerHTML;
            document.getElementById('vet_name').value = document.getElementById('grid_vet').rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML;

            close_modal_vets();
        }
    </script>

    {{-- Modal Veterinário --}}
    <div class="modal fade" id="modalVets" tabindex="-1" aria-labelledby="modalVetsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalVetsLabel">Veterinários</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table id="grid_vet" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px;">#</th>
                                <th>Name</th>
                                <th style="width: 140px;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vets as $vet)
                                <tr>
                                    <td>{{ $vet->id }}</td>
                                    <td>{{ $vet->name }}</td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-primary" data-bs-toggle="tooltip" data-placement="top" onclick="add_vet(this)">
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
    {{-- FIM - Modal Veterinário --}}
    {{-- Modal Pet --}}
    <div class="modal fade" id="modalPets" tabindex="-1" aria-labelledby="modalPetsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalVetsLabel">Pets</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table id="grid_pet" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px;">#</th>
                                <th>Name</th>
                                <th>Owner</th>
                                <th>Specie</th>
                                <th>Gender</th>
                                <th style="width: 140px;">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pets as $pet)
                                <tr>
                                    <td>{{ $pet->id }}</td>
                                    <td>{{ $pet->name }}</td>
                                    <td>{{ $pet->client->name }}</td>
                                    <td>{{ $pet->specie }}</td>
                                    <td>{{ $pet->gender }}</td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-primary" data-bs-toggle="tooltip" data-placement="top" onclick="add_pet(this)">
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
    {{-- FIM - Modal Pet --}}

    <div class="alert alert-primary" role="alert">
        <h2>New Consultation</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <br>

                    <div class="box-body no-padding">
                        <form action="/consultation" method="post" role="form" onsubmit="return check_fields()">
                            @csrf

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="consultation_date">Data</label>
                                    <input type="date" class="form-control" id="consultation_date" name="consultation_date" oninvalid="this.setCustomValidity('Campo requerido.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                </div>

                                <h3 class="text-success">Veterinário:</h3>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalVets">
                                    Selecione o Veterinário
                                </button>

                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="id_vet" name="id_vet" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="vet_name">Name:</label>
                                    <input type="text" class="form-control" id="vet_name" name="vet_name" required readonly>
                                </div>

                                <h3 class="text-danger">Pet:</h3>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPets">
                                    Selecione o Pet
                                </button>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="cell_phone">Celular</label>
                                    <input type="text" class="form-control" id="cell_phone" name="cell_phone">
                                </div>
                                <div class="form-group">
                                    <label for="address">Endereço</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="form-group">
                                    <label>Estado (states of Brazil):</label>
                                    <select class="form-control" id="state" name="state">
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                    </select>
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