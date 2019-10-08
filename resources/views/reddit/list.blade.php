@extends('layouts.master')


@section('main')

	<div class="text-center mt-5 mb-5">
		<h1>Subreddit : {{$subreddit}}</h1>
	</div>

	@empty($articles)

		<div class="text-center">
			No subreddit available for {{$subreddit}}
		</div>

	@else
		
		@foreach($articles->chunk(2) as $items)
			<div class="row mb-2">
				@foreach($items as $item)
					@include('reddit.single')
				@endforeach
			</div>
		@endforeach
		
		<div class="text-center">
			{!! $articles->links() !!}
		</div>

	@endempty

@endsection