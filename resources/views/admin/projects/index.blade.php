@extends('layouts/admin')

@section('content')
<section class="section-admin-index">

    <div class="my-5">

      <div class="d-flex justify-content-center my-3">
        <a class="btn btn-secondary my-3" href="{{route('admin.projects.create')}}">Crea nuovo progetto</a>

      </div>

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
                            <div class="card-body d-flex flex-column gap-5 ">
                              <h2 class="card-title text-center">{{ $project->title }}</h2>
                              <div class="d-flex gap-3 justify-content-center">
                                @foreach($project->technologies as $tecnology)
                                  <p class="card-title text-center"><em>{{ $tecnology->name}}</em></p>
                                @endforeach
                              </div>
                              <h4 class="text-center">{{$project->type?->name}}</h4>
                            </div>
                          </div>
                          <div class="col-md-4 ">
                            <div class="card-body d-flex gap-3 justify-content-center">
                              <p class="card-text">{{$project->description}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>

@endsection