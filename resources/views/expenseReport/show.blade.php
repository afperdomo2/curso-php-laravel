@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h2>Report: {{ $report->title }}</h2>
            <a class="btn btn-sm btn-primary" href="/expense_reports/{{ $report->id }}/expenses/create">New expense</a>
            <a class="btn btn-secondary btn-sm" href="/expense_reports" role="button">Back</a>
            <a class="btn btn-info btn-sm" href="/expense_reports/{{ $report->id }}/confirmSendEmail" role="button">Send email</a>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Created at</th>
                        <th>Amount</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($report->expenses as $expense)
                        <tr>
                            <td>{{ $expense->description }}</td>
                            <td>{{ $expense->created_at }}</td>
                            <td>{{ $expense->amount }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection