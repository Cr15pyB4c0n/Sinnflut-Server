@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registration not possible</div>
                <div class="panel-body">
                    <h4>The Sinnflut-Server does only allow one user to be registered this way.</h4>
                    <p>If you did already register, please <a href="{{ url('/login') }}">login</a>. Otherwise you will have to reinstall or access the database.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
