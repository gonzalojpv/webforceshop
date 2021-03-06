@extends('layouts.admin')


@section('content')
<div class="container">
    <div class="row header-content">
        <div class="col-12 col-sm-10">
                <div class="page-title">
                <h4 class="font-weight-bolder"><span class="font-weight-bold">Categories</span> - List</h4>
            </div>
        </div>
        <div class="col-12 col-sm-2">
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a
                        href="{{ route('admin.categories.create') }}"
                        class="btn btn-primary">new category</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-header">
                    <h5 class="panel-title">All Categories</h5>
                    <p class="text-right">Lorem ipsum dolor sit amet consectetur adipiscing elit, urna consequat felis vehicula class ultricies mollis dictumst, aenean non a in donec nulla.</p>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">Nº</th>
                                <th>Name</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $index => $user)
                                <tr>
                                    <td class="text-center" width="10%">{{ $index + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td width="20%" class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('admin.categories.edit', $user->id) }}" class="btn btn-link edit">Edit</a>
                                            <a
                                                href="javascript:void(0)"
                                                onclick="event.preventDefault();
                                                    document.getElementById('remove-form-' + {{ $user->id }}).submit();"
                                                class="btn btn-link delete">Remove</a>
                                            <form
                                                style="display: none;"
                                                id="remove-form-{{ $user->id }}"
                                                action="{{ route('admin.categories.destroy', $user->id) }}"
                                                method="POST">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
