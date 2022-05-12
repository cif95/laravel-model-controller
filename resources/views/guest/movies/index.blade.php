@extends('layouts.app')

@section('title', 'Movies')

@section('content')
	<section id="movies" class="container-fluid px-5">
		<div class="row row-cols-5 gx-3 gy-5">
			@foreach ($movies as $movie)
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">{{ $movie->title }}</h4>
							<h6 class="card-subtitle mb-2 text-muted fst-italic">Original title: {{ $movie->original_title }}</h6>
							<p class="card-text">Nationality: {{ $movie->nationality }}</p>
							<p class="card-text fst-italic">Date: {{ $movie->date }}</p>
							<p class="card-text fst-italic">Vote: {{ $movie->vote }}</p>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</section>
@endsection