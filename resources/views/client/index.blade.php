@extends('layout.main')

@section('body')
    <div class="alert alert-success" role="alert">
        <h2>Clients</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="/client/new" class="btn btn-success">New Client</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>
@endsection