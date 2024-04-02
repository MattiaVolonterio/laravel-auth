@extends('layouts.app')

@section('title', 'Nuovo Progetto')

@section('content')
    <div class="container">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary my-3">Torna alla lista</a>

        <h1 class="mb-3">Inserisci un nuovo progetto</h1>

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="row g-3">
                <div class="col-6">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="col-6">
                    <label for="author" class="form-label">Autore</label>
                    <input type="text" class="form-control" id="author" name="author" required>
                </div>

                <div class="col-12">
                    <label for="project_link" class="form-label">Link al progetto</label>
                    <input type="url" class="form-control" id="project_link" name="project_link" required>
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

                <div class="col-2">
                    <button class="btn btn-success">Salva</button>
                </div>
            </div>
        </form>
    </div>
@endsection
