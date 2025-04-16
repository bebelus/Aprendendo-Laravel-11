@extends('admin.layouts.app')
@section('title', 'Detalhes do Usuários')

@section('content')

<h1>Detalhes do usuário</h1>

<x-alert/>

<ul>
    <li>Nome: {{ $user->name }}</li>
    <li>E-mail: {{ $user->email }}</li>
</ul> 
{{-- @can('owner', $user)
Pode deletar
@endcan --}}
@can('is-admin')   
<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar</button>
</form>
 @endcan   
@endsection