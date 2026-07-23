@extends('layout.main')

@section('body')
    <div class="alert alert-success" role="alert">
        <h2>Reports</h2>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body no-padding">
                        <h4 class="text-primary">Select Report</h4>
                        <form action="/report/show" method="post" role="form">
                            @csrf
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection