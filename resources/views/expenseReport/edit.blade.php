@extends('layouts.base')

@section('content')
    <h2>Edit Report: {{ $report->id }}</h2>
    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{ $report->id }}" method="POST" autocomplete="off">
                @csrf
                @method('put')
                <div class="form-group mb-2">
                    <label for="">Title:</label>
                    <input type="text" required class="form-control" id="title" name="title" placeholder="title of report" value="{{ $report->title }}">
                </div>
                <button type="submit" class="btn btn-success btn-sm">
                    Submit
                </button>
                <a class="btn btn-secondary btn-sm" href="/expense_reports" role="button">Back</a>
            </form>
        </div>
    </div>
@endsection