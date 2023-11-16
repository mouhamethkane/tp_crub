@extends("layouts.app")

@section("title", "La liste des etudiants")

@section("content")
    <div class="row">
        <h3>La liste des etudiant</h3>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('successed') }}
            </div>
        @endif
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nom complet</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>telephone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $etudiant)
                    <tr>
                        <td>{{ $etudiant->name }}</td>
                        <td>{{ $etudiant->address }}</td>
                        <td>{{ $etudiant->email }}</td>
                        <td>{{ $etudiant->phone }}</td>
                        <td style="display: flex">
                            <a class="btn btn-sm btn-success" style="margin-right: 5px"
                            href="{{ route('students.show', $etudiant->id) }}">
                                Detail
                            </a>
                            <a class="btn btn-sm btn-secondary" style="margin-right: 5px "
                            href="{{ route('students.edit', $etudiant->id) }}">
                                Modifier
                            </a>
                            <a class="btn btn-sm btn-primary" style="margin-right: 5px" 
                            href="{{ route('students.destroy', $etudiant->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm(Etes-vous sur ?)"
                             type="submit" class="btn btn-sm btn-danger">
                               Supprimer
                            </button>   
                            </a>
                        </td>
                    </tr>
                @endforeach    
            </tbody>
        </table>
    </div>
    @endsection