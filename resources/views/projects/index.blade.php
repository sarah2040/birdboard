@extends('layouts.app')

@section('content')

    <div class="flex items-center mb-4">
        <a href="/project/create">New Project</a>
    </div>


    <div class="flex">
        @forelse ( $projects as $project )
        <div class="bg-white mr-4 rounded shadow w-1/3 p-5" style="height: 200px";>

            <h3 class="font-normal text-xl py-4">{{ $project->title }}</h3>

            <div class="text-grey">{{ Illuminate\Support\Str::limit($project->description, 100) }}</div>

        </div>

        @empty
        
        <div>No projects yet.</div>
        
        @endforelse

    </div>

@endsection