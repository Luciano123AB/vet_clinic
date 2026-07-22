@extends('layout.main')

@section('body')
    <div class="alert alert-warning" role="alert">
        <h2>Atendiment Details</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="/consultations" class="btn btn-success">Atendiments</a>
                    </div>
                    <br>

                    <div class="box-body no-padding">
                        <h4 class="text-primary">Atendiment</h4>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="table-primary">
                                    <th style="width: 50px;">#</th>
                                    <th>Date</th>
                                    <th>Total Value(R$)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->cell_phone }}</td>
                                    <td>{{ $client->address }}</td>
                                    <td>{{ $client->state }}</td>
                                    <td>
                                        <a href="/client/edit/{{ $client->id }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                        <a href="/client/delete/{{ $client->id }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to delete this record id = {{ $client->id }}?')"><i class="fa fa-trash"></i>Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection