@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if (Session::has('success'))
            <div class="alert alert-success"  role="alert">
                <strong>Success: </strong>{{ Session::get('success') }}
            </div>
        @elseif (Session::has('warning'))
            <div class="alert alert-warning"  role="alert">
                <strong>Warning: </strong>{{ Session::get('warning') }}
            </div>
        @endif
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <a href="{{ route('super-admin.users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                <form action="{{ route('super-admin.users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" onclick="return confirm('Are you sure?');" class="btn btn-danger float-right">Delete</button>
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
@endsection
