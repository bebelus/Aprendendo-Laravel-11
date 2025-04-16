@extends('admin.layouts.app')
@section('title', 'Inclusão de Usuários')

@section('content')

<h1>Novo usuário</h1>

<x-alert/>

<form  action="{{ route('users.store') }}" method="POST">
    
    @include('admin.users.partials.form')
</form>
@endsection