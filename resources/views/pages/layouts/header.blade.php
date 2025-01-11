@foreach ($allCategory as $cat)
    @php

        $url = route('category', ['category' => $cat->category]);

        $title = Str::title($cat->category);
    @endphp


    <li style="margin-bottom: 15px;"><a href="{{ $url }}"
            style="color: black; font-size: 19px; font-weight: 500; text-decoration: none; text-transform: uppercase;
                        ">{{ $title }}</a>

    </li>
@endforeach
