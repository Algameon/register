@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    <h1>Create new Company</h1>

                </div>

                <div class="card-body">
                    @include('inc.messages')
                    {!! Form::open(['action' => 'EmployeesController@store','method' => 'POST']) !!}
                            <div class="form-group">
                                {{Form::label('title','Title:')}}
                                {{Form::text('title','',['class'=> 'form-control','placeholder'=>'Title'])}}
                            </div>
                        <div class="form-group">
                            {{Form::label('status','Status:')}}<br>
                            <p style="display: inline">Active: </p>
                            {{Form::radio('status','Active','true')}}
                            <p style="display: inline">Not Active: </p>
                            {{Form::radio('status','Not Active')}}
                        </div>
                        <div class="form-group">
                            {{Form::label('address','address:')}}
                            {{Form::text('address','',['class'=> 'form-control','placeholder'=>'address'])}}
                        </div>

                        <div class="form-group"> <!--TODO make less rows? -->
                            {{Form::label('notes','Notes:')}}
                            {{Form::textarea('notes','',['class'=> 'form-control','placeholder'=>'Notes'])}}
                        </div>
                        {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@endsection