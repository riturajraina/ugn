@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="alert alert-success">
                    <?php echo base64_decode($error);?>
                </div>
            </div>
        </div>
    </div>
@endsection