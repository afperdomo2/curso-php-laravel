@extends('layouts.app')

@section('content')
    <h2>Create Report</h2>
    <div class="row">
        <div class="col">
            <form action="/expense_reports" method="POST" autocomplete="off">
                @csrf
                <div class="form-group mb-2">
                    <label for="">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="title of report" value="{{ old('title') }}">
                </div>
                <button type="submit" class="btn btn-success btn-sm">
                    Submit
                </button>
                <a class="btn btn-secondary btn-sm" href="/expense_reports" role="button">Back</a>
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
