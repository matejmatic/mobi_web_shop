@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit user {{ $user->name }}</div>

                <div class="card-body">
                    <form action="{{ route('super-admin.users.update', $user) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        @foreach($roles as $role)
                            <div class="form-check">
                                <input type="radio" class="flat" name="role" id="role" value="{{ $role }}" 
                                    {{ $user->role == $role ? 'checked' : '' }} >                    
                                <label for="role"> {{ $role }} </label>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary ml-2">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
