@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show">      
            <strong>Error!</strong>{{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endforeach
@endif


@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show">
        <strong>Error!</strong>{{session('error')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <strong>Success!</strong>{{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif