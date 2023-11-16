@extends("layouts.app")

@section("title", $etudiant->name)

$section("content")
    <div class="row col-md-12 md-5">
        <div class="col-md-4">
            <div class="text-center">
                <img width="200" src="{{ asset('storage/'.str_replace('public/', '', $student->image)}}" class="rounded" alt="">
            </div>
        </div>
        <div class="col-md-8">
            <h3>Information personnelles de l'etudiant</h3>
            <table class="table">
                <tbody>
                    <tr>
                        <td><b>Nom vomplet : </b>{{ $student->name }}</td>
                    </tr>
                    <tr>
                        <td><b>Address : </b>{{ $student->address }}</td>
                    </tr>    
                    <tr>
                        <td><b>Email : </b>{{ $student->email }}</td>   
                    </tr>    
                    <tr>
                        <td><b>Telephone : </b>{{ $student->phone }}</td>    
                    </tr>    
                    <tr>
                        <td><b>iographie : </b>{{ $student->bio }}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>Status :</b>
                            @if($student->status == true)
                                <span class="badge text-bg-success">
                                    Actif
                                </span>
                                @else
                                <span class="badge text-bg-danger">
                                    Desactive
                                </span>
                        </td>
                    </tr>    
                    <td>
                        <a class="btn btn-primary" href="{{ route('students.index')}}">
                            Retour a la liste
                        </a>
                    </td>    
                       

                   
                </tbody>
            </table>
        </div>
    </div>
    @endsection