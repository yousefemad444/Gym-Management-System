@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{route('customers.update',$customer)}}" autocomplete="off" class="form-horizontal">
               @csrf
                @method('PUT')
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{__('dashboard.edit_customer')}}</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="{{route('customers.index')}}" class="btn btn-sm btn-primary">{{__('dashboard.back_to_list')}}</a>
                            </div>
                        </div>

                        <input type="hidden" name="id" value="{{$customer->id}}">

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{__('dashboard.name')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="name" type="text" placeholder="{{__('dashboard.name')}}" value="{{old('name')?? $customer->name}}" required />
                                </div>
                                @error('name')
                                <span class="error text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{__('dashboard.email')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" placeholder="{{__('dashboard.email')}}" value="{{old('email')??$customer->email}}"  />
                                </div>
                                @error('email')
                                <span class="error text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{__('dashboard.gender')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <select required class="custom-select" name="gender" >
                                        <option value="male" @if($customer->gender=='male') selected @endif>Male</option>
                                        <option value="female" @if($customer->gender=='female') selected @endif>Female</option>
                                    </select>
                                </div>
                                @error('gender')
                                <span class="error text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{__('dashboard.mobile')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="mobile" type="text" placeholder="{{__('dashboard.mobile')}}" value="{{old('mobile') ?? $customer->mobile}}" required />
                                </div>
                                @error('mobile')
                                <span class="error text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{__('dashboard.height')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="height" type="number" placeholder="{{__('dashboard.height')}}" value="{{old('height') ?? $customer->height}}" required />
                                </div>
                                @error('height')
                                <span class="error text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{__('dashboard.weight')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="weight" type="number" step=".1" placeholder="{{__('dashboard.weight')}}" value="{{old('weight') ?? $customer->weight}}" required />
                                </div>
                                @error('weight')
                                <span class="error text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{__('dashboard.date_of_birth')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="date_of_birth" type="date" placeholder="{{__('dashboard.date_of_birth')}}" value="{{old('date_of_birth')??$customer->date_of_birth}}" required />
                                </div>
                                @error('date_of_birth')
                                <span class="error text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">{{__('dashboard.save')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
