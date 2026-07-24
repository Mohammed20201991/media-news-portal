<div class="topbar">

    <div class="container d-flex justify-content-between">

        <div>

            {{ now()->format('l, d M Y') }}

        </div>

        <div>
            @include('partials.social')
        </div>

    </div>

</div>