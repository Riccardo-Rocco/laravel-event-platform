@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                @foreach ($posts as $post)
                    <div class="col">
                        <div class="card">
                            <div class="card-header">{{ $post->name }}</div>
                            <h6 class="card-subtitle mb-2 text-muted">
                                {{ $post->category ? $post->category->name : 'senza categoria' }}
                            </h6>
                            <div class="card-body">{{ $post->description }}</div>
                            <div class="card-body">
                                @if (count($post->tags) > 0)
                                    <ul>
                                        @foreach ($post->tags as $tag)
                                            <li>{{ $tag->name }}</li>
                                        @endforeach
                                    </ul>

                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary">Modifica</a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                                @else
                                    <span>Non ci sono tag collegati</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
