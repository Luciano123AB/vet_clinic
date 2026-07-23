@extends('layout.main')

@section('body')
    <div class="alert alert-success" role="alert">
        <h2>Pets Report</h2>
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
                                    <th style="width: 250px;">Photo</th>
                                    <th>Name</th>
                                    <th>Owner</th>
                                    <th>Specie</th>
                                    <th>Gender</th>
                                    <th>Birth Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->id }}</td>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td>{{ $client->cell_phone }}</td>
                                        <td>{{ $client->address }}</td>
                                        <td>{{ $client->state }}</td>
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