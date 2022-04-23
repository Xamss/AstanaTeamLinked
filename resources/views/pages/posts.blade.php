<x-postlayout>
    @foreach ($posts as $post)
        <article style="background: {!!$post->color!!}">
            <h1>
                <a href="/posts/{{$post->slug}}">
                    {{$post->name}}
                </a>
            </h1>
            <div>
                <p>
                    {{$post->body}}
                </p>
            </div>
            <p class="date-post">{{$post->date}}</p>
        </article>
    @endforeach
</x-postlayout>
