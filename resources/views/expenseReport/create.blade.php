@extends('layouts.base')

@section('content')
    <h1>Create Report</h1>
    <div class="row">
        <div class="col">
            <form action="/expense_reports" method="POST" autocomplete="off">
                @csrf
                <div class="form-group mb-2">
                    <label for="">Title:</label>
                    <input type="text" required class="form-control" id="title" name="title" placeholder="title of report">
                </div>
                <button type="submit" class="btn btn-success btn-sm">
                    Create
                </button>
                <a class="btn btn-secondary btn-sm" href="/expense_reports" role="button">Back</a>
            </form>
        </div>
    </div>
@endsection
