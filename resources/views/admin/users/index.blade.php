@extends('admin.layouts.app')
@section('title', 'Listagem de Usuários')
@section('content')

<h1>Lista de Usuários!</h1>
<x-alert/>
<div class="py-1 mb-4">>
    <a href="{{ route('users.create') }}" 
    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    <i class="fa-solid fa-plus" aria-hidden="true"> </i>
    >Criar novo usuário</a>
</div>
<x-alert/>
<x-alert />
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td> 
                    <a href="{{ route('users.edit', $user->id) }}">Editar</a>    
                    <a href="{{ route('users.show', $user->id) }}">Detalhes</a>                    
                
                </td>
            </tr>    
            @empty
                <td colspan="100"> Nenhum Usuário no banco!</td>    
            @endforelse
        </tbody>
    </table>
    {{ $users->links() }}
    @endsection