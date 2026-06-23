@extends('layout.main')

@section('body')
    <div class="alert alert-primary" role="alert">
        <h2>New Pet</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <br>

                    <div class="box-body no-padding">
                        <form action="/pet" method="post" role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" oninvalid="this.setCustomValidity('Campo requerido.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <input type="file" class="form-control" id="photo" name="photo">
                                </div>
                                <div class="form-group">
                                    <label for="specie">Specie</label>
                                    <input type="text" class="form-control" id="specie" name="specie">
                                </div>
                                <div class="form-group">
                                    <label for="breed">Breed</label>
                                    <input type="text" class="form-control" id="breed" name="breed">
                                </div>
                                <div class="form-group">
                                    <label for="color">Color</label>
                                    <input type="text" class="form-control" id="color" name="color">
                                </div>
                                <div class="form-group">
                                    <label for="breed">Breed</label>
                                    <input type="text" class="form-control" id="breed" name="breed">
                                </div>
                                <div class="form-group">
                                    <label for="breed">Breed</label>
                                    <input type="text" class="form-control" id="breed" name="breed">
                                </div>
                                <div class="form-group">
                                    <label for="breed">Breed</label>
                                    <input type="text" class="form-control" id="breed" name="breed">
                                </div>
                                <div class="form-group">
                                    <label for="breed">Breed</label>
                                    <input type="text" class="form-control" id="breed" name="breed">
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