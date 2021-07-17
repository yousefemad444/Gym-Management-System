@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{route('profile.update')}}" autocomplete="off" class="form-horizontal">
                @csrf
                @method('put')
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{__('dashboard.profile')}}</h4>
                        <p class="card-category">{{__('dashboard.user_information')}}</p>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-sm-12">
                                @if (Session::has('success'))
                                    @include('partials.success',['message'=>Session::get('success')])
                                @endif
                            </div>
                            <label class="col-sm-2 col-form-label">{{__('dashboard.name')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="input-name" type="text" placeholder="{{__('dashboard.name')}}" value="{{ auth()->user()->name }}" required="true" aria-required="true"/>

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
                                    <input class="form-control" name="email" id="email" type="email" placeholder="{{__('dashboard.email')}}" value="{{auth()->user()->email}}" required />
                                    @error('email')
                                    <span class="error text-danger" >{{$message}}</span>
                                    @enderror
                                </div>
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

    <div class="row">
        <div class="col-md-12">

            <form method="post" action="{{route('profile.updatePassword')}}" class="form-horizontal">
                @csrf
                @method('put')
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{__('dashboard.edit')}} {{__('dashboard.password')}}</h4>
                        <p class="card-category">{{__('dashboard.password')}}</p>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                @if (Session::has('success_password'))
                                    @include('partials.success',['message'=>Session::get('success_password')])
                                @endif
                            </div>
                            <label class="col-sm-2 col-form-label" for="input-current-password">{{__('dashboard.current_password')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" input type="password" name="current_password" id="input-current-password"  placeholder="{{__('dashboard.current_password')}}" required />
                                    @error('current_password')
                                    <span class="error text-danger" >{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label" for="input-password">{{__('dashboard.new_password')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="password" id="input-password" type="password" placeholder="{{__('dashboard.new_password')}}" required />
                                    @error('password')
                                    <span class="error text-danger" >{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{__('dashboard.confirm_password')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password"  placeholder="{{__('dashboard.confirm_password')}}" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">{{__('dashboard.edit')}} {{__('dashboard.password')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
