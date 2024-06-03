@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table my-5">
            <thead>
              <tr>
                <th scope="col">Project Title</th>
                <th scope="col">Project Description</th>
                <th scope="col">Github Url</th>
              </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
              <tr>
                <td>{{$project->project_title}}</td>
                <td>{{$project->project_description}}</td>
                <td>{{$project->github_url}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        
    </div>
</div>
@endsection