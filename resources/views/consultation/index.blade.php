@extends('layout.main')

@section('body')
    <div class="alert alert-success" role="alert">
        <h2>Atendimentos</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="/consultation/new" class="btn btn-success">Novo Atendimento</a>
                    </div>
                    <br>

                    <div class="box-body no-padding">
                        <table id="tb_default" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">#</th>
                                    <th>Data</th>
                                    <th>Pet</th>
                                    <th>Dono</th>
                                    <th>Veterinário</th>
                                    <th>Total(R$)</th>
                                    <th style="width: 250px;">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($consultations as $consultation)
                                    <tr>
                                        <td>{{ $consultation->id }}</td>
                                        <td>{{ \Carbon\Carbon::parse($consultation->the_date)->format('d/m/Y') }}</td>
                                        <td>{{ $consultation->pet->name ?? '' }}</td>
                                        <td>{{ $consultation->pet->client->name ?? '' }}</td>
                                        <td>{{ $consultation->vet->name ?? '' }}</td>
                                        <td>{{ $consultation->total_cost }}</td>
                                        <td>
                                            <a href="/consultation/show/{{ $consultation->id }}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Detalhes</a>
                                            <a href="/consultation/delete/{{ $consultation->id }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to delete this record id = {{ $consultation->id }}?')"><i class="fa fa-trash"></i>Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection