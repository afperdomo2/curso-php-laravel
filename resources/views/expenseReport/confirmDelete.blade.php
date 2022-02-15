@extends('layouts.base')

@section('content')
    <h2>Delete Report: {{ $report->id }} ?</h2>
    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{ $report->id }}" method="POST" autocomplete="off">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-success btn-sm">Confirm</button>
                <a class="btn btn-secondary btn-sm" href="/expense_reports" role="button">Cancel</a>
            </form>
        </div>
    </div>
@endsection