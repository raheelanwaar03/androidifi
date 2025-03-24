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
                            <h4 class="card-title">Allot Plans To User</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Save.Allot.Plan') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="user_id" class="form-label">User Id</label>
                                    <input type="text" name="user_id" id="user_id" class="form-control"
                                        placeholder="Enter User Id">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="plan" class="form-label">Plan</label>
                                    <select name="plan" id="plan" class="form-control">
                                        @foreach ($plans as $item)
                                            <option value="{{ $item->name }}">{{ $item->name }} - {{ $item->invest }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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
