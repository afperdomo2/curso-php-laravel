@extends('layouts.base')

@section('content')
    <h1 class="text-primary">Expense Reports</h1>
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
@endsection