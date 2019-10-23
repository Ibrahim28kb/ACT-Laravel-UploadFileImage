@extends('backend.layout.master')

@section('pageTitle','Edit user')

@section('content')

<div class="section-header">
    <h1>Edit user</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('user.update',$user->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="card-header">
                        <h4>Update user details</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>User full name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email address </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-at"></i>
                                    </div>
                                </div>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-key"></i>
                                    </div>
                                </div>
                                <input type="password" name="password" class="form-control" autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mobile number </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                </div>
                                <input type="text" name="mobile" class="form-control" value="{{ $user->mobile }}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>BIO </label>
                            <textarea name="bio" cols="30" rows="10" class="form-control">{{ $user->bio }}</textarea>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label>Avatar </label>
                                <input type="file" name="avatar_image" class="form-control">
                            </div>
                            <div class="col-6">
                                @if(!is_null($user->avatar) || !empty($user->avatar))
                                <img width="200" src="{{ url('storage/'.$user->avatar) }}" alt="{{ $user->name }}">
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-lg btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection