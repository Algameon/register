@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--The card HEADER -->
                <div class="card-header">
                    <h1>Employees</h1>
                </div>
                <!-- Card BODY-->
                <div class="card-body">
                    @include('inc.messages')<!--If view was returned with a message-->
                    <a class="btn btn-sm btn-info" href="/employee/create">Create new Employee</a>
                    <br>
                    <br>
                    @if(count($employees)>0) <!-- Incase there is no employees-->
                        <table id="table_id" class="display">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Works @</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td><a href="/employee/{{$employee->id}}">{{$employee->name}}</a></td>
                                    <td><a href="/company/{{$employee->company->id}}"> {{$employee->company->title}}</a> </td>
                                    <td>{{$employee->role}}</td>

                                </tr>


                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No employees found :(</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection