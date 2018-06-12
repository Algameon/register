@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--The card HEADER-->
                <div class="card-header">
                    <h1>{{$company->title}}</h1>

                </div>
                <!-- Card BODY-->
                <div class="card-body">
                    @include('inc.messages')
                    <a href="/company" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Go back to all">Go back</a>
                    <br>
                    <br>

                    <h5>Status:</h5>
                    <a href="#" id="status" data-type="text" data-pk="1" data-url="/company/{{$company->id}}" data-title="Enter Status">{{$company->status}}</a>
                    <br>
                    <br>

                    <h5>Address:</h5>
                    <a href="#" id="address" data-type="text" data-pk="1" data-url="/company/{{$company->id}}" data-title="Enter Address">{{$company->address}}</a>
                    <br>
                    <br>
                    <h5>Notes:</h5>
                    <a href="#" id="notes" data-type="text" data-pk="1" data-url="/company/{{$company->id}}" data-title="Enter Notes">{{$company->notes}}</a>
                    <br>
                </div>

            </div>
        </div>
    </div>
    {{--<script>
        $(document).ready(function() {
            $('#username').editable(); //Not implemented yet...
        });
    </script>--}}


@endsection