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
                                    <h2 style="text-align: center;">Add Plan</h2>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('Admin.Store.Plan') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="name" class="form-label">Plan Name</label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    placeholder="Enter Plan Name">
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="mini">Minimum Investment</label>
                                                    <input type="number" name="min_invest" id="mini"
                                                        class="form-control" placeholder="Minimum Investment">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="max">Maximum Investment</label>
                                                    <input type="number" name="max_invest" id="max"
                                                        class="form-control" placeholder="Maximum Investment">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="min">Minimum Percentage</label>
                                                    <input type="number" placeholder="Enter Minimum percentage"
                                                        name="min_roi_per" id="min" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="maxi">Maximum Percentage</label>
                                                    <input type="number" placeholder="Enter Maximum percentage"
                                                        name="max_roi_per" id="max" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="min_profit">Minimum Profit</label>
                                                    <input type="number" name="min_roi_profit" id="min_profit"
                                                        class="form-control" placeholder="Minimum Profit">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="max_profit">Maximum Profit</label>
                                                    <input type="number" name="max_roi_profit" id="max_profit"
                                                        placeholder="Maximum Profit" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label for="expiry">Expire Date</label>
                                                <input type="number" placeholder="Expire Date of plan" name="expiry"
                                                    id="expiry" class="form-control">
                                            </div>
                                        </div>
                                        <div class="">
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
