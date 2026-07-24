{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}

<rss version="2.0">

<channel>

<title>{{ setting('site.title') }}</title>

<link>{{ url('/') }}</link>

<description>{{ setting('site.description') }}</description>

<language>{{ app()->getLocale() }}</language>

<lastBuildDate>{{ now()->toRssString() }}</lastBuildDate>

@foreach($posts as $post)

<item>

<title><![CDATA[{{ $post->title }}]]></title>

<link>{{ route('news.show', $post->slug) }}</link>

<guid>{{ route('news.show', $post->slug) }}</guid>

<pubDate>{{ $post->created_at->toRssString() }}</pubDate>

@if($post->excerpt)

<description><![CDATA[
{{ strip_tags($post->excerpt) }}
]]></description>

@else

<description><![CDATA[
{{ \Illuminate\Support\Str::limit(strip_tags($post->body),300) }}
]]></description>

@endif

</item>

@endforeach

</channel>

</rss>