@extends('admin.layout.app')
@section('links')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Plans</h4>
                            <a href="{{ route('Admin.Add.Plan') }}" class="btn btn-primary">Add Plan</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Min Invest</th>
                                            <th>Max Invest</th>
                                            <th>Min %</th>
                                            <th>Max %</th>
                                            <th>Min Profit</th>
                                            <th>Max Profit</th>
                                            <th>Expiry</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($plans as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->min_invest }}$</td>
                                                <td>{{ $item->max_invest }}$</td>
                                                <td>{{ $item->min_roi_per }}%</td>
                                                <td>{{ $item->max_roi_per }}%</td>
                                                <td>{{ $item->min_roi_profit }}$</td>
                                                <td>{{ $item->max_roi_profit }}$</td>
                                                <td>{{ $item->expiry }}Days</td>
                                                <td>{{ $item->status }}</td>
                                                <td class="d-flex justify-content-center align-items-center">
                                                    <a href="{{ route('Admin.Edit.Plan', $item->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="{{ route('Admin.Delete.Plan', $item->id) }}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Min Invest</th>
                                            <th>Max Invest</th>
                                            <th>Min %</th>
                                            <th>Max %</th>
                                            <th>Min Profit</th>
                                            <th>Max Profit</th>
                                            <th>Expiry</th>
                                            <th>Status</th>
                                            <th>Action</th>
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
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
        <script>
            new DataTable('#example');
        </script>
    @endsection
