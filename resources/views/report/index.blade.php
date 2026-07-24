@extends('layout.main')

@section('body')
    <div class="alert alert-success" role="alert">
        <h2>Relatórios</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body no-padding">
                        <h4 class="text-primary">Selecione o Relatório</h4>
                        <form action="/report/show" method="post" role="form">
                            @csrf

                            <div class="box-body">
                                <div class="radio">
                                    <label class="fs-4">
                                        <input type="radio" id="report_clients" name="report_type" value="clients" checked>
                                        Clientes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="fs-4">
                                        <input type="radio" id="report_pets" name="report_type" value="pets">
                                        Pets
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="fs-4">
                                        <input type="radio" id="report_procedures" name="report_type" value="procedures">
                                        Procedimentos
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="fs-4">
                                        <input type="radio" id="report_vets" name="report_type" value="vets">
                                        Veterinários
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="fs-4">
                                        <input type="radio" id="report_consultations" name="report_type" value="consultations">
                                        Atendimentos
                                    </label>
                                </div>
                            </div>
                            <br>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-warning">Exibir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection