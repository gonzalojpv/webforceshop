@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-12 col-sm-10">
                <div class="header-content">
                    <div class="page-title">
                        <h4 class="font-weight-bolder">
                            <a href="{{ route('admin.users.index') }}">
                                <span class="font-weight-bold">Users</span>
                            </a>
                            - Edit
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="panel">
                <div class="panel-header">
                    <h5 class="panel-title">Edit user</h5>
                    <p class="text-right">Lorem ipsum dolor sit amet consectetur adipiscing elit, urna consequat felis vehicula class ultricies mollis dictumst, aenean non a in donec nulla.</p>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                         @csrf
                         @method('PUT')
                        @include('admin.users._form')
                        <button class="btn btn-primary float-right" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @if ( session('notification') )
        <script>
            swal("Good job!", "{{ session('notification') }}", "success");
        </script>
    @endif
@endsection
