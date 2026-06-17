@extends('layout.main')

@section('body')
    <div class="alert alert-primary" role="alert">
        <h2>New Client</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <br>

                    <div class="box-body no-padding">
                        <form action="/client" method="post" role="form">
                            @csrf

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="cell_phone">Celular</label>
                                    <input type="text" class="form-control" id="cell_phone" name="cell_phone">
                                </div>
                                <div class="form-group">
                                    <label for="address">Endereço</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection