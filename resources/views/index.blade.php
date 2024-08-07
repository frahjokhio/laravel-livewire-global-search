@extends('layouts.app')

@section('content')
    <header class="bg-white shadow mt-12">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Global Search</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- global search livewire component -->
            <livewire:global-search />
        </div>
    </main>
@endsection