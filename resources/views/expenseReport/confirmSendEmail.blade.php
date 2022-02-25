@extends('layouts.app')

@section('content')
    <h2>Send Report: {{ $report->title }}</h2>
    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{ $report->id }}/sendEmail" method="POST" autocomplete="off">
                @csrf
                <div class="form-group mb-2">
                    <label for="">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Type a email" value="{{ old('email') }}">
                </div>
                <button type="submit" class="btn btn-success btn-sm">Send Email</button>
                <a class="btn btn-secondary btn-sm" href="/expense_reports/{{ $report->id }}" role="button">Cancel</a>
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
