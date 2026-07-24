<ul class="navbar-nav me-auto">

@if($frontendMenu)

@foreach($frontendMenu->items->where('parent_id', null)->sortBy('order') as $item)

    @if($item->children->count())

        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle"
               href="#"
               role="button"
               data-bs-toggle="dropdown"
               aria-expanded="false">

                {{ $item->title }}

            </a>

            <ul class="dropdown-menu">

                @foreach($item->children->sortBy('order') as $child)

                    <li>

                        <a class="dropdown-item"
                           href="{{ url($child->link()) }}">

                            {{ $child->title }}

                        </a>

                    </li>

                @endforeach

            </ul>

        </li>

    @elseif($item->title == 'Categories')

        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle"
               href="#"
               data-bs-toggle="dropdown">

                {{ $item->title }}

            </a>

            <ul class="dropdown-menu">

                @foreach($categories as $category)

                    <li>

                        <a class="dropdown-item"
                           href="{{ route('category.show',$category->slug) }}">

                            {{ $category->name }}

                        </a>

                    </li>

                @endforeach

            </ul>

        </li>

    @else

        <li class="nav-item">

            <a class="nav-link"
               href="{{ url($item->link()) }}">

                {{ $item->title }}

            </a>

        </li>

    @endif

@endforeach

@endif

</ul>