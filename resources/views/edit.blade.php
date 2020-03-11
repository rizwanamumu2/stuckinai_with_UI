@extends('layouts.master')

@section('content')
<h1>Edit Task - Task Name </h1>
<p class="lead">Edit this task below. <a href="/profile/{user}">Go back to all tasks.</a></p>

<div class="container"  style="margin-top:85px;margin-bottom:180px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="edit">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    <form method="post" action="/edit/store">
                        @csrf
                        @method('POST')
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">
                                {{ __('First Name') }}
                            </label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">
                            {{ __('Last Name') }}
                            </label>

                            <div class="col-md-6">
                                <input id="lastname" type="name" class="form-control" name="lastname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            {{ __('User Name') }}
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="name" value="{{$user->name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">
                            {{ __('Gender') }}
                            </label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control" name="gender">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">
                            {{ __('Birth Date') }}
                            </label>

                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control" name="dob">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">
                            {{ __('Description') }}
                            </label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="interest" class="col-md-4 col-form-label text-md-right">
                            {{ __('Interests') }}
                            </label>

                            <div class="col-md-6">
                                <input id="interest" type="text" class="form-control" name="interest">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection