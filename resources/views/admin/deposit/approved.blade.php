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
                            <h4 class="card-title">Approved Deposit Request</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Amount</th>
                                            <th>Total</th>
                                            <th>Transcation</th>
                                            <th>Status</th>
                                            <th>Proofe</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($deposit as $item)
                                            <tr>
                                                <td>{{ $item->amount }}</td>
                                                <td>{{ $item->total }}</td>
                                                <td>{{ $item->trx }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <img src="{{ asset('images/deposit/' . $item->image) }}"
                                                        class="img-fluid img-responsive" height="30px" width="30px"
                                                        alt="">
                                                </td>
                                                <td class="d-flex justify-content-center align-items-center">
                                                    <a href="{{ route('Admin.Make.Deposit.Approved', $item->id) }}"
                                                        class="btn btn-primary">Approve</a>
                                                    <a href="{{ route('Admin.Make.Deposit.Rejected', $item->id) }}"
                                                        class="btn btn-danger">Reject</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Amount</th>
                                            <th>Total</th>
                                            <th>Transcation</th>
                                            <th>Status</th>
                                            <th>Proofe</th>
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
