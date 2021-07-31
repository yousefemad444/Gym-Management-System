@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">{{__('dashboard.users')}}</h4>
{{--                <p class="card-category"> Here you can manage users</p>--}}
            </div>
            <div class="card-body">
                <div class="col-sm-12">
                    @if (Session::has('success'))
                        @include('partials.success',['message'=>Session::get('success')])
                    @endif
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                        <a href="{{route('users.create')}}" class="btn btn-sm btn-primary">{{__('dashboard.add_user')}}</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>
                            {{__('dashboard.name')}}
                        </th>
                        <th>
                            {{__('dashboard.email')}}
                        </th>
                        <th>
                            {{__('dashboard.role')}}
                        </th>
                        <th>
                            {{__('dashboard.creation_date')}}
                        </th>
                        <th class="text-right">
                            {{__('dashboard.actions')}}
                        </th>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                {{$user->role}}
                            </td>
                            <td>
                                {{$user->created_at->diffForHumans()}}
                            </td>
                            <td class="td-actions text-right">
                                <a class="btn btn-success btn-link" href="{{route('users.edit',$user)}}" >
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                </a>
                                @if ($user->role=='user')
                                    <form method="post" action="{{route('users.destroy',$user)}}" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-link"  onclick="confirm('Are you sure you want to delete this user?') ? this.parentElement.submit() : ''">
                                            <i class="material-icons">close</i>
                                            <div class="ripple-container"></div>
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                        @empty
                            <div>No Records</div>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
