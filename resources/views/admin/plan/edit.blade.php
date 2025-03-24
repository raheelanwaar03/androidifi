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
                                    <h2 style="text-align: center;">Edit Plan ({{ $plan->name }})</h2>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('Admin.Update.Plan', $plan->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="name" class="form-label">Plan Name</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                value="{{ $plan->name }}">
                                        </div>
                                        <div class="row align-items-center mb-3">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="mini">Minimum Investment</label>
                                                    <input type="number" name="min_invest" id="mini"
                                                        class="form-control" value="{{ $plan->min_invest }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="max">Maximum Investment</label>
                                                    <input type="number" name="max_invest" id="max"
                                                        value="{{ $plan->max_invest }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-3">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="min_roi">Minimum Percentage</label>
                                                    <input type="number" name="min_roi_per" id="min_roi"
                                                        class="form-control" value="{{ $plan->min_roi_per }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="max_roi">Maximum Percentage</label>
                                                    <input type="number" name="max_roi_per" id="max_roi"
                                                        value="{{ $plan->max_roi_per }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-3">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="min_profit">Minimum Profit</label>
                                                    <input type="number" name="min_roi_profit" id="min_profit"
                                                        class="form-control" value="{{ $plan->min_roi_profit }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="max_profit">Maximum Profit</label>
                                                    <input type="number" name="max_roi_profit" id="max_profit"
                                                        value="{{ $plan->max_roi_profit }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="expiry" class="form-label">Expiry</label>
                                            <input type="number" name="expiry" id="expiry" class="form-control"
                                                value="{{ $plan->expiry }}">
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
