@extends('layouts.app')

@section('title', 'Movies')

@section('content')
	<section id="movies" class="container-fluid px-5">
		<h5>Movies:</h1>
		<div class="row row-cols-5 gx-3 gy-5 pt-5">
			@foreach ($movies as $index => $movie)
				<div class="col">
					<div class="card">
						<div class="card-body">
							<a href="{{ route("movies-detail", ['id' => $movie->id]) }}">
								<h4 class="card-title">{{ $movie->title }}</h4>
							</a>
							<p class="card-subtitle mb-2 text-muted fst-italic">Date: {{ $movie->date }}</p>
							<p class="card-text">Nationality: {{ $movie->nationality }}</p>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</section>
@endsection