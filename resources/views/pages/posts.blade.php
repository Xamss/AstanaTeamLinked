<x-postlayout>
    @foreach ($posts as $post)
        <article>
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
            <h16>{{$post->date}}</h16>
        </article>
    @endforeach
</x-postlayout>
