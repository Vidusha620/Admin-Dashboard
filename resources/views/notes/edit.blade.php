@extends('notes.admin')


@section('content')

<div class="container">
<div class="card mt-5">
    <div class="card-header">
    <h1 class="mt-4">Edit Note</h1>
    <a href="{{route('notes.index')}}" class="btn btn-danger float-end">Back</a>
    </div>
            <div class="card-body">
            <form action="{{route('notes.update',$note->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{$note->title}}" id="inputTitle" placeholder="Title"/>
                    @error('title') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="mb-3">
                    <label>Content</label>
                    <textarea name="content" rows="4" class="form-control" id="inputContent" style="height:150px">{{ $note->content }}</textarea>
                    @error('content') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" >Update</button>
                </div>
            </form>
            
            </div>
</div> 
</div>

@endsection
