@extends('layout.main')

@section('body')
    <div class="alert alert-success" role="alert">
        <h2>Pets</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="/pet/new" class="btn btn-success">New Pet</a>
                    </div>
                    <br>

                    <div class="box-body no-padding">
                        <table id="tb_default" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">#</th>
                                    <th style="width: 250px;">Photo</th>
                                    <th>Name</th>
                                    <th>Owner</th>
                                    <th>Specie</th>
                                    <th>Gender</th>
                                    <th>Birth Date</th>
                                    <th style="width: 250px;">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pets as $pet)
                                    <tr>
                                        <td>{{ $pet->id }}</td>
                                        <td>photo</td>
                                        <td>{{ $pet->name }}</td>
                                        <td>client</td>
                                        <td>{{ $pet->specie }}</td>
                                        <td>{{ $pet->gender }}</td>
                                        <td>Date</td>
                                        <td>
                                            <a href="/pet/edit/{{ $client->id }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                            <a href="/pet/delete/{{ $client->id }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to delete this record id = {{ $client->id }}?')"><i class="fa fa-trash"></i>Delete</a>
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