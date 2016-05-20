@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Reserve 3 space for navigation column -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ url('/student') }}" class="list-group-item">Home</a>
                <a href="{{ url('/student/manageunits/create') }}" class="list-group-item">Manage Units</a>
                <a href="{{ url('/student/viewstudyplanner') }}" class="list-group-item">View Study Planner</a>
                <a href="{{ url('/student/viewunitlistings') }}" class="list-group-item">View Unit Listings</a>
                <a href="{{ url('/student/internalcoursetransfer/create') }}" class="list-group-item active">Internal Course Transfer</a>
                <a href="{{ url('/student/contactcoordinator') }}" class="list-group-item">Contact Coordinator</a>
            </div>
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Internal Course Transfer</h1>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" name="cForm" method="POST" action="{{ url('/student/internalcoursetransfer') }}" onsubmit="return validateForm()">

                        <h3>Proposed Program</h3>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="prname">Program Title:</label>
                            <div class="col-sm-10">
                                <input type="text" name="sPPn" class="form-control" id="prname" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="prcode">Program code:</label>
                            <div class="col-sm-2">
                                <input type="text" name="sPPc" class="form-control" id="prcode" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pryear">Program Year:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="pryear" placeholder="...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Reasons for Requesting Transfer </label>
                            <div class="col-sm-10">
                                <textarea class="form-control custom-control" name="sReason" rows="3" style="resize:none"></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="Submit" class="btn btn-default">
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- end .panel -->
        </div>
    </div>
</div>
@stop

@section('extra_js')
<script>
function validateForm() {

    var a = document.forms["cForm"]["sName"].value;
    var b = document.forms["cForm"]["sID"].value;
    var c = document.forms["cForm"]["sDoB"].value;
    var d = document.forms["cForm"]["sEm"].value;
    var e = document.forms["cForm"]["sMB"].value;
    var f = document.forms["cForm"]["sPr"].value;
    var g = document.forms["cForm"]["sPc"].value;
    var h = document.forms["cForm"]["sPPn"].value;
    var i = document.forms["cForm"]["sPPc"].value;
    var j = document.forms["cForm"]["sReason"].value;


    if (a == null || a == "") {
        alert("Name must be filled out");
        return false;
    }
    if (b == null || b == "") {
        alert("Please enter your student Id");
        return false;
    }
    if (c == null || c == "") {
        alert("Please enter your Date Of Birth");
        return false;
    }
    if (d == null || d == "") {
        alert("Please enter your student email address");
        return false;
    }
    if (e == null || e == "") {
        alert("Please enter your Mobile Number");
        return false;
    }
    if (f == null || f == "") {
        alert("Enter your Current Program Name");
        return false;
    }
    if (g == null || g == "") {
        alert("Enter your Program Code");
        return false;
    }
    if (h == null || h == "") {
        alert("Enter new Program Name");
        return false;
    }
    if (i == null || i == "") {
        alert("Enter your Program Code");
        return false;
    }
    if (j == null || j == "") {
        alert("Please enter a reason");
        return false;
    }
}
</script>
@stop
