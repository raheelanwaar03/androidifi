@extends('admin.layout.app')

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
                                    <h2 style="text-align: center;">Edit User ({{ $user->name }})</h2>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('Admin.Update.User', $user->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                value="{{ $user->name }}">
                                        </div>
                                        <div class="row align-items-center mb-3">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" id="email" name="email" class="form-control"
                                                        value="{{ $user->email }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="ph">Phone</label>
                                                    <input type="number" name="phone" value="{{ $user->phone }}"
                                                        id="ph" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-3">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="balance">Balance</label>
                                                    <input type="number" name="balance" id="balance" class="form-control"
                                                        value="{{ $user->balance }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="airdrop">AriDrop</label>
                                                    <input type="number" name="airdrop" id="airdrop"
                                                        value="{{ $user->airdrop }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
