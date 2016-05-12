@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Reserve 3 space for navigation column -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ url('/coordinator') }}" class="list-group-item">Home</a>
                <a href="{{ url('/coordinator/managestudyplanner') }}" class="list-group-item">Manage Study Planner</a>
                <a href="{{ url('/coordinator/manageunitlisting') }}" class="list-group-item active">Manage Unit Listings</a>
                <a href="{{ url('/coordinator/manageunits') }}" class="list-group-item">Manage Units</a>
                <a href="{{ url('/coordinator/resolveenrolmentissues') }}" class="list-group-item">Resolve Enrolment Issues</a>
            </div>
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Manage Unit Listings</h1>
                    <!-- Year Dropdown -->
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="button" id="dropdown-year" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Year
                            <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-year">
                                <li><a href="#">Year 1</a></li>
                                <li><a href="#">Year 2</a></li>
                                <li><a href="#">Year 3</a></li>
                            </ul>
                        </div>

                        <!-- Semester Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" id="dropdown-semester" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Semester
                            <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-semester">
                                <li><a href="#">Semester 1</a></li>
                                <li><a href="#">Semester 2</a></li>
                            </ul>
                        </div>

                        <!-- Course Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" id="dropdown-course" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Course
                            <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-course">
                                <li><a href="#">Course 1</a></li>
                                <li><a href="#">Course 2</a></li>
                                <li><a href="#">Course 3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <!-- Sample Content 1 -->
                    <h2>
                        <small>Year 1 Sem 1</small>
                        <span class="pull-right"><a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></span>
                    </h2>
                    <table class="table">
                        <thead>
                            <th>Unit Code</th>
                            <th colspan="2">Unit Title</th>
                        </thead>
                        {{-- Fetch data for study planner --}}
                        @foreach ($units as $unit)
                        <tr>
                            <td>{{ $unit->unitCode }}</td>
                            <td>{{ $unit->unitName }}</td>
                            <td><a class="pull-right" href="#" role="button"><span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span></a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
