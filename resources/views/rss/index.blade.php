{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}

<rss version="2.0"
     xmlns:atom="http://www.w3.org/2005/Atom"
     xmlns:content="http://purl.org/rss/1.0/modules/content/"
     xmlns:media="http://search.yahoo.com/mrss/">

<channel>

<title><![CDATA[{{ setting('site.title') }}]]></title>

<link>{{ url('/') }}</link>

<description><![CDATA[
{{ setting('site.description') }}
]]></description>

<language>{{ app()->getLocale() }}</language>

<lastBuildDate>{{ now()->toRssString() }}</lastBuildDate>

<generator>Laravel + Voyager CMS</generator>

<atom:link
    href="{{ route('rss') }}"
    rel="self"
    type="application/rss+xml"/>

@foreach($posts as $post)

<item>

<title><![CDATA[
{{ $post->title }}
]]></title>

<link>{{ route('news.show',$post->slug) }}</link>

<guid isPermaLink="true">
{{ route('news.show',$post->slug) }}
</guid>

<pubDate>{{ $post->created_at->toRssString() }}</pubDate>


@if($post->category)
<category><![CDATA[
{{ $post->category->name }}
]]></category>
@endif

@if($post->image)
<media:content
    url="{{ Voyager::image($post->image) }}"
    medium="image"/>
@endif

<description><![CDATA[
{{ strip_tags($post->excerpt ?? \Illuminate\Support\Str::limit($post->body,250)) }}
]]></description>

<content:encoded><![CDATA[
{!! $post->body !!}
]]></content:encoded>

</item>

@endforeach

</channel>

</rss>