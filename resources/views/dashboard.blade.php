@extends('layouts.admin')
@section('content')
    @role('administrator')
    <p>Welcome, Administrator!</p>
    @else
    <p>Welcome</p>
    @endrole
@stop