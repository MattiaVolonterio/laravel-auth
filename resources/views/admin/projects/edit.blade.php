@extends('layouts.app')

@section('title', 'Modifica Progetto')

@section('content')
    <div class="container">
        <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary mt-4 mb-3">Torna al progetto</a>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mt-4 mb-3">Torna alla lista</a>

        <h1 class="mb-3">Modifica {{ $project->title }}</h1>

        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf

            @method('PATCH')

            <div class="row g-3">
                <div class="col-6">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}"
                        required>
                </div>

                <div class="col-6">
                    <label for="author" class="form-label">Autore</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $project->author }}"
                        required>
                </div>

                <div class="col-12">
                    <label for="project_link" class="form-label">Link al progetto</label>
                    <input type="url" class="form-control" id="project_link" name="project_link"
                        value="{{ $project->project_link }}" required>
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $project->description }}</textarea>
                </div>

                <div class="col-2">
                    <button class="btn btn-success">Salva</button>
                </div>
            </div>
        </form>
    </div>
@endsection
