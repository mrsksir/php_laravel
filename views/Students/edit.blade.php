
@extends('layouts.app')
@section('main')

    @if ($message = session('status'))
        <div class="alert alert-success">
            <strong>{{$message}}</strong>    
        </div>
    @endif

    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card p-3 m-3">
                    <h2 class="text-muted">Student Edit # {{ $student->sname }}</h2>
                    <form action="/students/{{$student->id}}/update" method="post" enctype="multipart/form-data">
                        <div class="group-control">
                            @csrf
                            <label for="">Name:</label>
                            <input type="text" name="name" value="{{ $student->sname }}" class="form-control">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="group-control">
                            <label for="">Address:</label>
                            <textarea name="address" id="" cols="30" rows="5" class="form-control">{{ $student->addr }}</textarea>
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>

                        <div class="group-control">
                            <label for="">Image</label>
                            <input type="file" name="image" id="" class="form-control">
                             @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>

                        <div class="group-control mt-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection