@extends('layouts.app')

@section('content')
    <div class="container show p-5 overflow-auto">

        <div class="card">
            <div class="card-body">

                <label class="fw-bold" for="name">Project name</label>
                <p id="name">{{ $project->project_name }}</p>

                <label class="fw-bold" for="name">Project type</label>
                <p id="name">{{ $project->type->name }}</p>

                <label class="fw-bold" for="description">Description</label>
                <p  id="description"> {{ $project->description}}</p>

                <label class="fw-bold" for="url">Url</label>
                <p>
                    <a class="d-block" id="url" target="_blank">{{ $project->url }}</a>
                </p>

                <label class="fw-bold" for="status">Status</label>
                <p id="status">{{ $project->status }}</p>

                <label class="fw-bold" for="license">License</label>
                <p id="license">{{ $project->license }}</p>

                <label class="fw-bold" for="license">Img. name</label>
                <p id="license">{{ $project->image_original_name }}</p>

                <p class="card-text"><small class="text-body-secondary">Last Update {{ $project->updated_at }} </small></p>


            </div>

                <img
                    src="{{$project->image_path ? asset('storage/' . $project->image_path) : Vite::asset('resources/assets/img/no_image_available.jpeg')}}"
                    class="card-img-bottom image-show"
                    alt="No Image available">

        </div>

        <div class="cta text-end py-3">
            <a href="{{ route('admin.project.edit', $project) }}" class="btn btn-warning text-white">Edit</a>
            <a href="{{ route('admin.project.index') }}" class="btn btn-success">Back to view</a>
        </div>

    </div>
@endsection
