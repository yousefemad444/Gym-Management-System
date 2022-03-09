@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">{{__('dashboard.customer_data')}}</h4>
                <div class="card-link  float-md-right ">
                    <form action="{{route('customers.destroy',$customer)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a rel="tooltip" class="btn btn-secondary btn-link" href="{{route('customers.edit',$customer)}}" data-original-title="{{__('dashboard.edit_customer')}}" title="{{__('dashboard.edit_customer')}}">
                        <i class="material-icons">edit</i>
                        </a>
                        <button rel="tooltip" type="button" class="btn btn-secondary btn-link" data-original-title="{{__('dashboard.delete_customer')}}" title="{{__('dashboard.delete_customer')}}" onclick="confirm('Are you sure you want to delete this Customer?') ? this.parentElement.submit() : ''">
                            <i class="material-icons">close</i>
                        </button>
                    </form>
                </div>
                <p class="category">{{$customer->name}}</p>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span class="font-weight-bold text-lg">{{__('dashboard.id')}} : </span> {{$customer->id}}
                    </li>
                    <li class="list-group-item">
                        <span class="font-weight-bold text-lg">{{__('dashboard.name')}} : </span> {{$customer->name}}
                    </li>
                    <li class="list-group-item">
                        <span class="font-weight-bold text-lg">{{__('dashboard.email')}} : </span> {{$customer->email}}
                    </li>
                    <li class="list-group-item">
                        <span class="font-weight-bold text-lg">{{__('dashboard.gender')}} : </span> {{$customer->gender}}
                    </li>
                    <li class="list-group-item">
                        <span class="font-weight-bold text-lg">{{__('dashboard.date_of_birth')}} : </span> {{$customer->date_of_birth}}
                    </li>
                    <li class="list-group-item">
                        <span class="font-weight-bold text-lg">{{__('dashboard.height')}} : </span> {{$customer->height}} CM
                    </li>
                    <li class="list-group-item">
                        <span class="font-weight-bold text-lg">{{__('dashboard.weight')}} : </span> {{$customer->weight}} KG
                    </li>
                    <li class="list-group-item">
                        <span class="font-weight-bold text-lg">{{__('dashboard.mobile')}} : </span> {{$customer->mobile}}
                    </li>
                    <li class="list-group-item">
                        <span class="font-weight-bold text-lg">{{__('dashboard.added_by')}} : </span> {{$customer->user->name}}
                    </li>

                    <li class="list-group-item">
                        <span class="font-weight-bold text-lg">{{__('dashboard.creation_date')}} : </span> {{$customer->created_at->diffForHumans()}}
                    </li>
                    <li class="list-group-item">
                        <span class="font-weight-bold text-lg">{{__('dashboard.updated_at')}} : </span> {{$customer->updated_at->diffForHumans()}}
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">{{__('dashboard.customer_image')}}</h4>
            </div>
            <div class="card-body">
                <img class="d-block w-100" src="{{asset(viewImage($customer->image))}}" style="width: 900px; height: 400px;">
                @if($customer->image==null)
                    <form method="post" action="{{route('customers.uploadImage',$customer)}}" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group text-center">
                            <span class="btn btn-success">
                                {{__('dashboard.upload_image')}} <input name="image" type="file">
                            </span>
                            <button type="submit" class="btn btn-primary">{{__('dashboard.save')}}</button>
                        </div>
                    </form>
                @else
                    <div class="text-center mt-3">
                        <a href="{{route('customers.deleteImage',$customer)}}" class="btn-sm  btn-danger" >Delete Picture</a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
