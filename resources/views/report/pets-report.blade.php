@extends('layout.main')

@section('body')
    <div class="alert alert-success" role="alert">
        <h2>Relatório de Pets</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body no-padding">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">#</th>
                                    <th style="width: 250px;">Foto</th>
                                    <th>Nome</th>
                                    <th>Dono</th>
                                    <th>Espécie</th>
                                    <th>Sexo</th>
                                    <th>Data de Nascimento</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pets as $pet)
                                    <tr>
                                        <td>{{ $pet->id }}</td>
                                        <td><img src="{{ asset('storage/' . $pet->photo_path) }}" alt="photo" style="max-width: 70%;"></td>
                                        <td>{{ $pet->name }}</td>
                                        <td>{{ $pet->client->name }}</td>
                                        <td>{{ $pet->specie }}</td>
                                        <td>{{ $pet->gender }}</td>
                                        <td>{{ \Carbon\Carbon::parse($pet->birth_date)->format('d/m/Y') }}</td>
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