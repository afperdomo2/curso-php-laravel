@extends('layouts.base')

@section('content')
    <h1 class="text-secondary">Expense Reports</h1>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary btn-sm" href="/expense_reports/create" role="button">
                Create a new report
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
                <thead class="thead-inverse|thead-default">
                    <tr>
                        <th>Title</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($expenseReports as $expenseReport)
                        <tr>
                            <td scope="row">{{ $expenseReport->title }}</td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
@endsection
