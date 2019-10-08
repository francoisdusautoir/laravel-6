<div class="col-md-6">
   <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
         <strong class="d-inline-block mb-2 text-primary">{{$item['data']['subreddit']}}</strong>
         <h3 class="mb-0">{!! $item['data']['title'] !!}</h3>
         <div class="mb-1 text-muted">{{ date('d F Y', $item['data']['created']) }}</div>
         <p class="card-text mb-auto">{{ Str::limit($item['data']['selftext'], 50) }}</p>
         <a href="{{ $item['data']['url'] }}" class="stretched-link">Voir la suite</a>
      </div>
   </div>
</div>