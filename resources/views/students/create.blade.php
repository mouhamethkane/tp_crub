@extends('layouts.app')

@section("title", "Enregistrement d'un etudiant")

@section("content")
    <div class="row">
        <h3>Enregistrement d'un etudiant</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach    
                </ul>
            </div>
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div
        @endif            
        <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('students.form')
            <!-- <div class="d-grid gap-2 mb-3">
                <button type="submit" class="btn btn-primary">
                    Enregistrer cet etudiant
                </button>     
            </div> -->

        </form>
    </div>
@endsection    