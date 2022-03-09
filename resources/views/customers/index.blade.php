@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">{{__('dashboard.customers')}}</h4>
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
                        <a href="{{route('customers.create')}}" class="btn btn-sm btn-primary">{{__('dashboard.add_customer')}}</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>
                            {{__('dashboard.id')}}
                        </th>
                        <th>
                            {{__('dashboard.name')}}
                        </th>
                        <th>
                            {{__('dashboard.mobile')}}
                        </th>
                        <th>
                            {{__('dashboard.creation_date')}}
                        </th>
                        <th>
                            {{__('dashboard.added_by')}}
                        </th>
                        <th class="text-right">
                            {{__('dashboard.actions')}}
                        </th>
                        </thead>
                        <tbody>
                        @forelse($customers as $customer)
                        <tr>
                            <td>
                                {{$customer->id}}
                            </td>
                            <td>
                                <a title="Customer Profile" style="color: #0c7cd5" href="{{route('customers.show',$customer)}}">{{$customer->name}}</a>
                            </td>
                            <td>
                                {{$customer->mobile}}
                            </td>
                            <td>
                                {{$customer->created_at->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$customer->user->name}}
                            </td>
                            <td class="td-actions text-right">
                                <a class="btn btn-success btn-link" href="{{route('customers.edit',$customer)}}" >
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                </a>
                                <form method="post" action="{{route('customers.destroy',$customer)}}" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-link"  onclick="confirm('Are you sure you want to delete this customer?') ? this.parentElement.submit() : ''">
                                        <i class="material-icons">close</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </form>
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
