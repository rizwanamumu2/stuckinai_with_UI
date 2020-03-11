@extends('layouts.master')

@section('content')
<div class="container" style="margin-top:85px;margin-bottom:180px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Upload Profile Picture') }}</div>

                <div class="card-body">
                    <form method="POST" action="/profile/{{Auth::user()->id}}/image" enctype="multipart/form-data">
                        @csrf

                        <h2>Update your profile picture</h2>
						<h2>Update your profile picture</h2>
						<h2>Update your profile picture</h2>
						<h2>Update your profile picture</h2>
						<input type="file" name="avatar">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<input type="submit" class="btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection