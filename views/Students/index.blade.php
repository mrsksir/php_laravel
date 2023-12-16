
@extends('layouts.app')
@section('main')

    @if ($message = session('status'))
        <div class="alert alert-danger">
            <strong>{{$message}}</strong>    
        </div>
    @endif

    <div class="container-fluid mt-3 text-end">
        <div class="row">
            <div class="col-sm-9"> <a href="students/create" class="btn btn-primary">Add Student</a> </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 text-start">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sno</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($students as $stud)
                                <tr>
                                    <th scope="row">{{$loop->index +1}}</th>
                                    <td>{{$stud->sname}}</td>
                                    <td>{{$stud->addr}}</td>
                                    <td>
                                        <img 
                                            src="students/{{$stud->image}}" alt="" 
                                            class="rounded-circle"
                                            width="30px" height="30px">
                                        </td>
                                    <td>
                                        <a href="/students/{{$stud->id}}/delete" class="btn btn-sm btn-danger">Delete</a> |
                                        <a href="/students/{{$stud->id}}/edit" class="btn btn-sm btn-primary">Edit</a> |
                                        <a href="/students/{{$stud->id}}/show" class="btn btn-sm btn-primary">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>

                {{$students->links()}}
            </div>
        </div>
    </div>

@endsection