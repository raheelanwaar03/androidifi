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
                            <h4 class="card-title">All Deposit Requests</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Amount</th>
                                            <th>Total</th>
                                            <th>Transcation ID</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($deposit as $item)
                                            <tr>
                                                <td>{{ $item->amount }}</td>
                                                <td>{{ $item->total }}</td>
                                                <td>{{ $item->trx }}</td>
                                                <td>
                                                    @if ($item->status == 'approved')
                                                        <span class="badge badge-success">{{ $item->status }}</span>
                                                    @else
                                                        <span class="badge badge-primary">{{ $item->status }}</span>
                                                    @endif
                                                </td>
                                                <td><img src="{{ asset('images/deposit/' . $item->image) }}" height="60px"
                                                        class="img-fluid img-responsive" width="60px"></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Amount</th>
                                            <th>Total</th>
                                            <th>Transcation ID</th>
                                            <th>Status</th>
                                            <th>Image</th>
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
