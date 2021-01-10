@extends('layouts.main')

@section('title', "Add a board for an user")


<link rel="stylesheet" href="{{ mix('css/app.css') }}">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Boards') }}
        </h2>
        <h3>Ajouter un board</h3>
        <form action="/boards" method="POST">
            @csrf
            <label for="title">Title : </label>
            <input type="text" name='title' id ='title' class="@error('title') is-invalid @enderror" required><br>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="description">Description : </label>
            <input type="text" name='description' id ='description' class="@error('description') is-invalid @enderror"><br>
            <button type="submit">Save</button>
        </form>
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
    </x-slot>

</x-app-layout>