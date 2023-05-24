@extends('layouts/admin')

@section('content')
<section class="section-admin-index">

    <div class="my-5">
        <ul>
            @foreach ($projects as $project)
                <li>
                    <a style="color: black ; text-decoration: none" class="cont-card" href="{{ route('admin.projects.show', $project) }}">
                      <div class="card mb-1" >
                        <div class="row g-0">
                          <div class="col-md-4 d-flex align-items-center">
                            <img src="{{$project->thumb}}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-4 ">
                            <div class="card-body">
                              <span class="text-end">Titolo:</span>
                              <h5 class="card-title text-center">{{ $project->title }}</h5>
                              <span>Tecnologie: </span>
                              @foreach($project->technologies as $tecnology)
                                <p class="card-title text-center">{{ $tecnology->name}}</p>
                              @endforeach
                              <span>Tipologia:</span>
                              <p class="text-center">{{$project->type?->name}}</p>

                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="card-body">
                              <span>Descrizione: </span>
                              <p class="card-text text-center">{{$project->description}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                </li>
            @endforeach
        </ul>

    </div>

    <a href="{{route('admin.projects.create')}}">Crea nuovo progetto</a>
    
    


</section>

@endsection