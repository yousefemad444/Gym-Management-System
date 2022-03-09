<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=Customer::with('user')->get();
        return view('customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CreateCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCustomerRequest $request)
    {
        auth()->user()->customers()->create($request->validated());
        session()->flash('success',__('dashboard.added_successfully'));
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateCustomerRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());
        session()->flash('success',__('dashboard.updated_successfully'));
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        session()->flash('success',__('dashboard.deleted_successfully'));
        return redirect()->route('customers.index');
    }

    public function uploadImage(Customer $customer ,Request $request)
    {
        $request->validate([
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120'
        ]);
        //image preview before uploading
        $customer->image =SaveImage($request->image,'assets/customers_images/');
        $customer->save();
        //redirect with session message
    }

    public function deleteImage(Customer $customer ,Request $request)
    {
        //delete old image
        deleteOldImage($customer->image,'customers_images');
        $customer->image=null;
        $customer->save();
        //redirect with session message
        return redirect()->back();

    }
}
