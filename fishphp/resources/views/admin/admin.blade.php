@extends('layouts.app')

@section('content')

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">           
            <h1 style="color: black;">您好，管理員 {{ Auth::user()->name }} 歡迎您登入</h1>
        </div>
    </div>
</div>


@endsection