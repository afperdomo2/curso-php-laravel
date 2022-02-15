@extends('layouts.base')

@section('content')
    <h2>Report: {{ $report->title }}</h2>
    <div class="row">
        <div class="col">
            <p>Detalles</p>
            <a class="btn btn-secondary btn-sm" href="/expense_reports" role="button">Back</a>
        </div>
    </div>
@endsection