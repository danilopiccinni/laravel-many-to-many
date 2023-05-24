@extends('layouts/admin')

@section('content')

    <div class="container px-5 my-5" >

        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
    
            @csrf
            @method('PUT')

            <div class="mb-2 form-check" >
                <label class="form-label" for="title">Title</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title') ?? $project->title}}">
                @error('title')
                <div class="invalid-feedback">
                    <em> {{$message}} </em>
                </div>
                @enderror
            </div>
    
            <div class="mb-2 form-check" >
                <label class="form-label" for="repo">repo</label>
                <input class="form-control @error('repo') is-invalid @enderror" type="text" id="repo" name="repo" value="{{old('repo') ?? $project->repo}}">
                @error('repo')
                <div class="invalid-feedback">
                    <em> {{$message}} </em>
                </div>
                @enderror
            </div>


            <div class="mb-2 form-check" >
                <label class="form-label" for="type_id">Categoria</label>
                <select name="type_id" id="type_id" >
                    <option value="">nessuna</option>
                    @foreach ($types as $type)
                        <option value="{{$type->id}}" {{$type->id == old('type_id', $project->type_id) ? 'selected' : ''}}>{{$type->name ?? old($type->name)}}</option>
                    @endforeach
                </select>
                @error('repo')
                <div class="invalid-feedback">
                    <em> {{$message}} </em>
                </div>
                @enderror
            </div>


            <div class="form-group">
                <span>Technologia</span>

                @foreach($technologies as $technology)
                <div class="form-check">
                    <input type="checkbox" id="technology-{{$technology->id}}" name="technologies[]" value="{{$technology->id}}" @checked($project->technologies->contains($technology))>
                    <label for="technology-{{$technology->id}}">{{$technology->name}}</label>
                </div>
                @endforeach
            </div>
            

    
            <div class="mb-2 form-check" >
                <label class="form-label" for="description">description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" type="text" id="description" name="description">{{old('description') ?? $project->description}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    <em> {{$message}} </em>
                </div>
                @enderror
            </div>
    
            <div class="mb-2 form-check" >
                <label class="form-label" for="thumb">thumb</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb') ?? $project->thumb}}">
                @error('thumb')
                <div class="invalid-feedback">
                    <em> {{$message}} </em>
                </div>
                @enderror
            </div>
    
            <button class="btn btn-secondary ms-4 mt-3" type="submit">Effettua modifiche</button>
     
        </form>
    </div>

@endsection