@extends('layouts.app')

@section('title')
    {{ $project->title }}
@endsection

@section('content')
    <div class="container">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mt-5">Torna alla lista</a>
        <h1 class="mt-3 fw-bold">{{ $project->title }}</h1>
        <span class="d-inline-block me-2">Created By</span><code class="d-inline-block fs-5">{{ $project->author }}</code>

        <span class="mt-4 fs-5 fw-bold d-block">Descrizione:</span>
        <p>{{ $project->description }}</p>

        <span class="mt-4 fs-5 fw-bold">Link alla pagina github:</span>
        <a href="{{ $project->project_link }}" target="_blank"><i class="fa-brands fa-github fa-xl"></i></a>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
