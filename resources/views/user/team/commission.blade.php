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
                            <h4 class="card-title">Direct Commision</h4>
                            <h4>Team Business({{ team_business() }})</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($statement as $item)
                                            <tr>
                                                <td>{{ $item->user_id }}</td>
                                                <td>{{ $item->type }}</td>
                                                <td>{{ $item->amount }}</td>
                                                <td>{{ $item->level }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>{{ $item->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                            <th>Date</th>
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
