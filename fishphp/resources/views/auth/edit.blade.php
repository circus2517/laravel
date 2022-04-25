@extends('layouts.app')

@section('content')

<style>
    .edit-Profile, .content-Profile{
        margin: 0 auto;
    }
    .input-group{
        margin-top: 20px;
    }
    h1{
        text-align: center;
    }
    .btn-sub-Profile{
        margin: 0 auto;
        width: 60px;
        height: 40px;
    }
</style>
<div class="container">
    <div class="content-Profile col-6">
        <h1>密碼修改</h1>
        <form class="editProfile" action="{{ route('update') }}" method="POST">
            @csrf
            <input type="text" name="id" value="{{ Auth::user()->id }}" hidden>
            <div class="input-group input-group-sm mb-3">
                <span for="name" class="input-group-text" id="inputGroup-sizing-sm">個人名稱</span>
                <input id="name" type="text" name="name" value="{{ Auth::user()->name }}" class="form-control profile-name-input" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span for="email" class="input-group-text" id="inputGroup-sizing-sm">信箱</span>
                <input id="email" type="text" name="email" value="{{ Auth::user()->email }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span for="password" class="input-group-text" id="inputGroup-sizing-sm">密碼</span>
                <input id="password" type="password" name="password" value="" class="form-control @error('password') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group input-group-sm mb-3">
                <button type="submit" class="btn btn-primary btn-sub-Profile">送出</button>
            </div>
        </form>
    </div>
</div>




@endsection