@extends('layouts/admin')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">{{$technology->name}}</h5>
                      <p class="card-text">{{$technology->description}}</p>
                      <div class="d-flex">
                          <span>Badge color: </span><div style="width: 50px; height : 50px ; background-color: {{ $technology->color }}"></div>
                      </div>
                      <a href="{{ route('admin.technologies.edit', $technology) }}" class="card-link btn btn-primary">Modifica</a>
                      <form action="{{route('admin.technologies.destroy', $technology)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">ELIMINA</button>

                      </form>
                    </div>
                  </div>

            </div>
        </div>


    </div>
@endsection