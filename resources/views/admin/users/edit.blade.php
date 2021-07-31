@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{route('users.update',$user)}}" autocomplete="off" class="form-horizontal">
               @csrf
                @method('PUT')
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{__('dashboard.edit_user')}}</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="{{route('users.index')}}" class="btn btn-sm btn-primary">{{__('dashboard.back_to_list')}}</a>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{__('dashboard.name')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="name" type="text" placeholder="{{__('dashboard.name')}}" value="{{old('name')?? $user->name}}" required />
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
                                    <input class="form-control" name="email" type="email" placeholder="{{__('dashboard.email')}}" value="{{old('email')??$user->email}}" required />
                                </div>
                                @error('email')
                                <span class="error text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label" for="input-password">{{__('dashboard.password')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" input type="password" name="password"  placeholder="{{__('dashboard.password')}}"   />
                                </div>
                                @error('password')
                                <span class="error text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{__('dashboard.confirm_password')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="password_confirmation"  type="password" placeholder="{{__('dashboard.confirm_password')}}"  />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{__('dashboard.role')}}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <select required class="custom-select" name="role" >
                                        <option value="admin" @if($user->role=='admin') selected @endif>Admin</option>
                                        <option value="user" @if($user->role=='user') selected @endif>User</option>
                                    </select>
                                </div>
                                @error('role')
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
