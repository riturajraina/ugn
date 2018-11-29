@extends('layouts.app')

@section('content')
@include('errors.createsurvey')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">DashBoard</div>
                <div class="panel-body">
                    <h1>Welcome to UGN Admin Panel</h1>
                    <?php
                        //echo '<br>Session : <pre>' . print_r($_SESSION, true) . '</pre>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
