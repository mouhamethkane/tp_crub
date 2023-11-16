@extends("layouts.app")

@section("title", "Modification d'un etudiant")

$section("content")
    <div class="row">
            <h3>Formulaire de modification d'n etudiant</h3>
            <form 
            action="{{ route('students.update', $student->id)}}" method="post">
            @csrf
            @method("PUT")
            @include('student.form')
        </form>
    </div>