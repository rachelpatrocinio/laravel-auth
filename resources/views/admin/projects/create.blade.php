@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="my-5">
            <form action="" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="project_title" class="form-label">Project Title</label>
                    <input type="text" class="form-control" id="project_title" name="project_title" placeholder="Project Title">
                </div>
                <div class="mb-3">
                    <label for="project_description" class="form-label">Project Description</label>
                    <textarea name="procject_description" id="project_description" cols="30" rows="10" class="w-100"></textarea>
                </div>
                <div class="mb-5">
                    <label for="github_url" class="form-label">Github Url</label>
                    <input type="text" class="form-control" id="github_url" name="github_url" placeholder="Https://..">
                </div>
                <button class="btn btn-success">SAVE</button>
            </form>
        </div>
    </div>
</div>
@endsection