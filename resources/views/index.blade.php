@extends('layout.main')

@section('body')
    <div class="alert alert-success text-center" role="alert">
        <h2>Clínica Veterinária</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="{{ url('/main-image.jpg') }}" style="max-width: 95%;" class="mx-auto d-block" alt="imagem principal">
            </div>
        </div>
    </div>
@endsection
