@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">tickets</div>

                <div class="panel-body">
                    You are logged in!
                    <br>
                    <a href="{{ url('/ticket') }}">View Your Tickets</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
