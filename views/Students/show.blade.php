
@extends('layouts.app')
@section('main')

    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card p-3 m-3">
                    <p>Name: <b> {{$student->sname}} </b></p>
                    <p>Address: <b> {{$student->addr}} </b></p>
                    <img src="/students/{{$student->image}}" alt="" class="rounded" width="100%">
                </div>
            </div>
        </div>
    </div>

@endsection