@extends('layouts.app')

@section('content')

    <h1>Create a Project</h1>

    <form method="POST" action="/projects">
        @csrf

        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="title">
            </div>
        </div>  
        
        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea class="textarea" name="description"></textarea>
            </div>
        </div> 
        
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
                <a href="/projects">Cancel</a>
            </div>
        </div>  

    </form>

@endsection