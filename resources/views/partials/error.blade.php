<div class="alert alert-danger">
    <button type="button" aria-hidden="true" data-dismiss="alert" class="close" aria-label="Close">×</button>
    @foreach($errors as $error)
       <span>{{$error}}</span>
    @endforeach
</div>
