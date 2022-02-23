<div class="row">
    <div class="col">
        <h1>Expense Report {{ $report->id }}: {{ $report->title }}</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <h2>Expenses</h2>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Create at</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($report->expenses as $expense)
                <tr>
                    <td scope="row">{{ $expense->description }}</td>
                    <td>{{ $expense->date_at }}</td>
                    <td>{{ $expense->amount }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
