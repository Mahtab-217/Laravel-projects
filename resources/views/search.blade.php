<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>
<form action="{{ route('search') }}" method="GET">
    <input type="text" name="q" placeholder="search something" value="{{ request('q')}}">
</form>
@if(isset($result))
<h1>result of searching:</h1>
@forelse ($result as $item)
<p>{{ $item->title }}</p>
    
@empty
    <p>nothing was found</p>
@endforelse
@endif