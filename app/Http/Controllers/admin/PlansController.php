<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminPlans;
use Illuminate\Http\Request;

class PlansController extends Controller
{

    public function index()
    {
        $plans = AdminPlans::get();
        return view('admin.plan.all', compact('plans'));
    }

    public function add()
    {
        return view('admin.plan.add');
    }

    public function store(Request $request)
    {
        $plan = new AdminPlans();
        $plan->name = $request->name;
        $plan->min_invest = $request->min_invest;
        $plan->max_invest = $request->max_invest;
        $plan->min_roi_per = $request->min_roi_per;
        $plan->max_roi_per = $request->max_roi_per;
        $plan->min_roi_profit = $request->min_roi_profit;
        $plan->max_roi_profit = $request->max_roi_profit;
        $plan->expiry = $request->expiry;
        $plan->save();
        return redirect()->route('Admin.All.Plans')->with('success', 'Plan Added Successfully');
    }

    public function delete($id)
    {
        $plan = AdminPlans::find($id);
        $plan->delete();
        return redirect()->route('Admin.All.Plans')->with('success', 'Plan Deleted');
    }

    public function edit($id)
    {
        $plan = AdminPlans::find($id);
        return view('admin.plan.edit', compact('plan'));
    }

    public function update(Request $request, $id)
    {
        $plan = AdminPlans::find($id);
        $plan->name = $request->name;
        $plan->min_invest = $request->min_invest;
        $plan->max_invest = $request->max_invest;
        $plan->min_roi_per = $request->min_roi_per;
        $plan->max_roi_per = $request->max_roi_per;
        $plan->min_roi_profit = $request->min_roi_profit;
        $plan->max_roi_profit = $request->max_roi_profit;
        $plan->expiry = $request->expiry;
        $plan->save();
        return redirect()->route('Admin.All.Plans')->with('success', 'Plan Updated');
    }
}
