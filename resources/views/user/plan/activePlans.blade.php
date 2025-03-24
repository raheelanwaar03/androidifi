@extends('layout.app')
@section('links')
    <link rel="stylesheet" href="{{ asset('asset/css/datatable.css') }}">
@endsection
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h3 class="text-center">Active Plans</h3>
                                        <a href="{{ route('User.Today.Reward') }}" class="btn btn-primary">Get Today
                                            Reward</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Plan Name</th>
                                                    <th>Investment</th>
                                                    <th>Status</th>
                                                    <th>Validate</th>
                                                    <th>Active Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($plans as $item)
                                                    <tr>
                                                        <td>{{ $item->plan_name }}</td>
                                                        <td>{{ $item->amount }}$</td>
                                                        <td>
                                                            @if ($item->status == 'Active')
                                                            <span class="badge badge-success">{{ $item->status }}</span>
                                                            @else
                                                            <span class="badge badge-danger">{{ $item->status }}</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->expiry }}Days</td>
                                                        <td>{{ $item->created_at }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
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
