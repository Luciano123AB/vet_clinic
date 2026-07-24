@extends('layout.main')

@section('body')
    <div class="alert alert-primary" role="alert">
        <h2>Novo Procedimento</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <br>

                    <div class="box-body no-padding">
                        <form action="/procedure" method="post" role="form">
                            @csrf

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" oninvalid="this.setCustomValidity('Campo requerido.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Preço</label>
                                    <input type="number" class="form-control" id="price" name="price" step="0.01" value="0.00" placeholder="0.00" required>
                                </div>
                            </div>
                            <br>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-success">Savar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection