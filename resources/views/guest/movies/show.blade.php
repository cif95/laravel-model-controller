@extends('layouts.app')

@section('title')
{{$movie->title}} detail
@endsection

@section('content')
<section id="movie-detail" class="container-fluid px-5">
	<a
	href="{{ route("movies") }}"
	class="btn btn-outline-info"
	tabindex="-1"
	role="button"
	aria-disabled="true"
	>
		Back to Movies
	</a>
	<div class="row justify-content-center pt-5">
		<div class="col-2">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">{{ $movie->title }}</h4>
					<p class="card-subtitle mb-2 text-muted fst-italic">Original title: {{ $movie->original_title }}</p>
					<p class="card-text">Nationality: {{ $movie->nationality }}</p>
					<p class="card-text fst-italic">Date: {{ $movie->date }}</p>
					<p class="card-text fst-italic">Vote: {{ $movie->vote }}</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection