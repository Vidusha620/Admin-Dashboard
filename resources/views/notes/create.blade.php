@extends('notes.admin')


@section('content')

<div class="container">
<div class="card mt-5">
    <div class="card-header">
    <h1 class="mt-4">Create Notes</h1>
    <a href="{{route('notes.index')}}" class="btn btn-danger float-end">Back</a>
    </div>
            <div class="card-body">
            <form action="{{route('notes.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <strong>Title</strong>
                    <input type="text" name="title" id="inputTitle" class="form-control" placeholder="Title"/>
                    @error('title') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="mb-3">
                    <label>Content</label>
                    <textarea name="content" rows="4" class="form-control" ></textarea>
                    @error('content') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" >Save</button>
                </div>
            </form>
            </div>
</div> 
</div>

@endsection
