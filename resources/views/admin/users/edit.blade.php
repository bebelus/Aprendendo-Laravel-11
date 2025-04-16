@extends('admin.layouts.app')
@section('title', 'Edição de Usuário')

@section('content')

<h1>Editar usuário {{ $user->name }}</h1>


<form  action="{{ route('users.update', $user->id) }}') }}" method="POST">
    @method('PUT')
    @include('admin.users.partials.form')

</form>
@endsection