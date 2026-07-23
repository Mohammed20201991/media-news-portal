<div class="card mb-4">

    <div class="card-header">

        Latest News

    </div>

    <div class="list-group list-group-flush">

        @foreach($posts->take(5) as $post)

            <a
                href="{{ route('news.show',$post->slug) }}"
                class="list-group-item">

                {{ $post->title }}

            </a>

        @endforeach

    </div>

</div>

<div class="card">

    <div class="card-header">

        Categories

    </div>

    <div class="list-group list-group-flush">

        @foreach($categories as $category)

            <a
                href="#"
                class="list-group-item">

                {{ $category->name }}

            </a>

        @endforeach

    </div>

</div>