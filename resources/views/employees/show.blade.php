@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <!--The card HEADER-->
                <div class="card-header">
                    <h1>{{$employee->name}}</h1>

                </div>
                <!-- Card BODY -->
                <div class="card-body">
                    <p id="text" data-type data-pk data-url data-title></p>
                    <a href="/employee" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Go back to all">Go back</a>
                    <br>
                    <br>

                    <h5>Works at:</h5>
                    <a href="/company/{{$employee->company->id}}" id="status" data-type="text" data-pk="1" data-url="" data-title="Enter Status">{{$employee->company->title}}</a>
                    <br>
                    <br>

                    <h5>Role:</h5>
                    <a href="#" id="address" data-type="text" data-pk="1" data-url="" data-title="Enter Address">{{$employee->role}}</a>
                    <br>
                    <br>
                    <br>
                </div>

            </div>
        </div>
    </div>

    {{--<script>
        $(document).ready(function() {
            $('#username').editable(); //Attemt to make X-editable work
        });
    </script>--}}


@endsection