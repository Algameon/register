@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Companies registerd</h1>
                </div>

                <div class="card-body">
                    @include('inc.messages')
                    <a class="btn btn-sm btn-info" href="/company/create">Create new</a>
                    <br>
                    <br>
                    @if(count($companies)>0)
                        <table id="table_id" class="display">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Address</th>
                                <th>Notes</th>
                                <th>Workers</th>
                            </tr>
                            </thead>
                            <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td><a href="/company/{{$company->id}}">{{$company->title}}</a></td>
                                <td>{{$company->status}}</td>
                                <td>{{$company->address}}</td>
                                <td>{{$company->notes}}</td>
                                <td>
                                    @foreach($company->employee as $employee)
                                        <a href="/employee/{{$employee->id}}" style="display: inline">{{$employee->name}}</a>,
                                    @endforeach
                                </td>

                            </tr>


                        @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No companies found :(</p>
                    @endif
                </div>
            </div>
        </div>
    </div>


@endsection