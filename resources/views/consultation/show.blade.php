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
                                    <td>{{ $theConsultation->id }}</td>
                                    <td>{{ \Carbon\Carbon::parse($theConsultation->the_date)->format('d/m/Y') }}</td>
                                    <td>{{ $theConsultation->total_cost }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <h4 class="text-primary">Pet</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection