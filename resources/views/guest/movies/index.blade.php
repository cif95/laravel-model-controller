@extends('layouts.app')

@section('content')
	<section id="movies" class="container-fluid px-5">
		<div class="row row-cols-2">
			@foreach ($movies as $movie)

				<div class="col card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">{{ $movie->title }}</h5>
						<h6 class="card-subtitle mb-2 text-muted">Original title: {{ $movie->original_title }}</h6>
						<p class="card-text">Nationality: {{ $movie->nationality }}</p>
						<p class="card-text">Date: {{ $movie->date }}</p>
						<p class="card-text">Vote: {{ $movie->vote }}</p>
					</div>
				</div>

			@endforeach
		</div>
	</section>
@endsection