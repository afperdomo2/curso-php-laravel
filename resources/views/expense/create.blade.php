@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h2>New Expense</h2>
            <form action="/expense_reports/{{ $report->id }}/expenses" method="POST" autocomplete="off">
                @csrf
                <div class="form-group mb-2">
                    <label for="">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="description of expense" value="{{ old('description') }}">
                </div>
                <div class="form-group mb-2">
                    <label for="">Amount:</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="amount of expense" value="{{ old('amount') }}">
                </div>
                <button type="submit" class="btn btn-success btn-sm">
                    Submit
                </button>
                <a class="btn btn-secondary btn-sm" href="/expense_reports/{{ $report->id }}" role="button">Back</a>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger mt-1 mb-0 pb-0">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
