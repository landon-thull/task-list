@extends('layouts.app')

@section('title', "Task List")

@section('content')
    @forelse($tasks as $task)
        <div>
            <a href="{{route('tasks.show', ['task' => $task])}}">
                {{$task->title}}
            </a>
        </div>
    @empty
        <p>There are no tasks!</p>
    @endforelse

    @if($tasks->count())
        <nav>
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
