@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-3">Lista Progetti</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome del progetto</th>
                    <th scope="col">Autore</th>
                    <th scope="col">Link</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->author }}</td>
                        <td><a href="{{ $project->project_link }}" target="_blank">Vai alla pagina del progetto</a></td>
                        <td>
                            <a href="" class="me-2"><i class="fa-solid fa-eye"></i></a>
                            <a href="" class="me-2"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100%">Nessun risultato trovato</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

        {{ $projects->links() }}
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
