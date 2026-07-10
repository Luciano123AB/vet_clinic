@extends('layout.main')

@section('body')
    <div class="alert alert-success" role="alert">
        <h2>Consultations</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="/consultation/new" class="btn btn-success">New Consultation</a>
                    </div>
                    <br>

                    <div class="box-body no-padding">
                        <table id="tb_default" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">#</th>
                                    <th>Date</th>
                                    <th>Pet</th>
                                    <th>Client</th>
                                    <th>Vet</th>
                                    <th>Total(R$)</th>
                                    <th style="width: 250px;">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($consultations as $consultation)
                                    <tr>
                                        <td>id</td>
                                        <td>date</td>
                                        <td>pet</td>
                                        <td>client</td>
                                        <td>vet</td>
                                        <td>total</td>
                                        <td>
                                            <a href="/consultation/edit/{{ $consultation->id }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>Edit</a>
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