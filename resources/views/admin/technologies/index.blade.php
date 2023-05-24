@extends('layouts/admin')

@section('content')
    
<div class="container">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th>Badge Color</th>
            </tr>
        </thead>
        <tbody>
            @foreach($technologies as $technology)
                <tr>
                    <td scope="row">{{$technology->name}}</td>
                    <td>{{$technology->description}}</td>
                    <td>{{$technology->color}}</td>
                    <td><a href="{{route('admin.technologies.show', $technology)}}">apri</a></td> 
                </tr>
                @endforeach
            </table>
        </tbody>

        
</div>

@endsection