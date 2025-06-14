@extends('layouts.admin')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Development Notes</h1>
    <!-- Notes List -->
    <div id="notes-list">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">HTMX Dynamic Attributes Manipulation</h5>
                <p class="card-text">
                    You need to make sure to call <code>htmx.process(document.body);</code> to force HTMX to process new content.
                </p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Check if htmx ajax call</h5>
                <p class="card-text">
                    <code>$request->isXhr();</code> Checks if ajax or htmx request.<br>
                    <code>$request->isHtmx();</code> Checks if htmx request.<br>
                </p>
            </div>
        </div>
        
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Htmx confirmation</h5>
                <p class="card-text">
                    Add <code>hx-confirm</code> to the target.<br>
                </p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Prevent SweetAlert2</h5>
                <p class="card-text">
                    Add <code>hx-no-swal</code> to the target.<br>
                </p>
            </div>
        </div>
    </div>
</div>
@stop