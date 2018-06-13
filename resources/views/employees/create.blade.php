@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--The card HEADER -->
                <div class="card-header">
                    <h1>Create new Employee</h1>
                </div>
                <!-- Card BODY-->
                <div class="card-body">
                    @include('inc.messages')
                    {!! Form::open(['action' => 'EmployeesController@store','method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('name','Name:')}}
                        {{Form::text('name','',['class'=> 'form-control','placeholder'=>'Name*'])}}
                    </div>
                    <!-- Radio Buttons-->
                    <div class="form-group">

                        {{Form::label('role','Role:')}}<br>
                        <p style="display: inline">None: </p>
                        {{Form::radio('role','')}}
                        <br>

                        <p style="display: inline">Contact: </p>
                        {{Form::radio('role','Contact')}}
                        <br>

                        <p style="display: inline">Buyer: </p>
                        {{Form::radio('role','Buyer')}}
                        <br>

                        <p style="display: inline">Orderer: </p>
                        {{Form::radio('role','Orderer')}}

                    </div>
                    <div class="form-group">
                        {{Form::label('company_id','Work:')}}
                        {{Form::select('company_id', $compString , null, ['placeholder' => 'Pick a work...'])}}<!--['L' => 'Large', 'S' => 'Small']-->
                    </div>
                    {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

   {{-- $test = "[";
    foreach ($companies as $company){
    $test.="'" . $company->id . "' => '" . $company->title . "',";
    }
    $test=rtrim($test,',');
    $test.="]";--}}
@endsection