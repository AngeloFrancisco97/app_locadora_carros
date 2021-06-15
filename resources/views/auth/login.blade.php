@extends('layouts.app')

@section('content')
<div class="container">
    <login-component token_csrf="{{ @csrf_token() }}"></login-component>
</div>
@endsection
