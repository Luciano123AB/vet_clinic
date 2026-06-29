@extends('layout.main')

@section('body')
    <div class="alert alert-warning" role="alert">
        <h2>Edit Procedure</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <br>

                    <div class="box-body no-padding">
                        <form action="/procedure/{{ $theProcedure->id }}" method="post" role="form">
                            @csrf

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" oninvalid="this.setCustomValidity('Campo requerido.')" onchange="try{setCustomValidity('')}catch(e){}" value="{{ $theProcedure->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Preço</label>
                                    <input type="number" class="form-control" id="price" name="price" step="0.01" placeholder="0.00" value="{{ $theProcedure->price }}" required>
                                </div>
                            </div>
                            <br>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection