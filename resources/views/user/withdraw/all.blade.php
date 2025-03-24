@extends('layout.app')
@section('links')
    <link rel="stylesheet" href="{{ asset('asset/css/datatable.css') }}">
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Withdraw Requests</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="cell-border" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Amount</th>
                                            <th>Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($withdraw as $item)
                                            <tr>
                                                <td>{{ $item->amount }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->account }}</td>
                                                <td>{{ $item->type }}</td>
                                                <td>{{ $item->status }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Amount</th>
                                            <th>Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')
        <script src="{{ asset('asset/js/code.jquery.com/jquery-3.7.1.js') }}"></script>
        <script src="{{ asset('asset/js/cdn.datatables.net/2.0.2/js/dataTables.js') }}"></script>
        <script>
            new DataTable('#example', {
                paging: false
            });
        </script>
    @endsection
