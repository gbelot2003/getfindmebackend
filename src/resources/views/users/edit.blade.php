@extends('layouts.admin')

@section('labels')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/users">{{ __('Users') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}y</li>
        </ol>
    </nav>
@stop

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('Updating') }} {{ $user->name }} {{ __('info') }}</h6>
        </div>
        <div class="card-body">
            <form action="/users" method="patch">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{ $user->name }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label class="form-label">{{ __('Mobile') }}</label>
                            <input type="text" class="form-control " name="phonefield" placeholder="Mobile" value="{{ $user->phonefield }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label class="form-label">{{ __('Email') }}</label>
                            <input type="email" class="form-control" name="email" placeholder="E-Mail" value="{{ $user->email }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-4 py-3 pl-2 bg-gray-100 border-left-primary">Esta sección es para cambiar manualmente el Password del
                        ususario, manejese con cuidado!!</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label class="form-label">{{ __('Password Confirmation') }}</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <select class="form-control" name="product_id">



                            <option>Select Product</option>



                            @foreach ($products as $key => $value)

                                <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>

                                    {{ $value }}

                                </option>

                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <label for="chkToggle2">{{ __('Status') }}</label>
                        <input id="chkToggle2" type="checkbox" data-on="Active" data-off="Inactive"
                               name="user_status" {{ $user->user_status === 1 ? 'checked' : '' }}
                               data-toggle="toggle" data-width="100">
                    </div>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary mr-3">Update</button>
                            <a class="btn btn-warning" href="/users">Cancel</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
@stop