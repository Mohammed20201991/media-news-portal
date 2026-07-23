<div class="alert alert-danger">

    <strong>

        🔥 Breaking News

    </strong>

    <marquee>

        @foreach($posts->take(5) as $post)

            {{ $post->title }}

            &nbsp;&nbsp;&nbsp;

        @endforeach

    </marquee>

</div>