<x-postlayout>
    @foreach ($posts as $post)
        <article style="background: {!!$post->color!!}">
            <h1>
                <a href="/posts/{{$post->slug}}">
                    {{$post->name}}
                </a>
            </h1>
            <p>Posted by <a href="/users/{{$post->user->id}}">{{$post->user->name}}</a></p>
            <p>Category: <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
            <div>
                <p>
                    {{$post->body}}
                </p>
            </div>
            <p class="date-post">{{$post->date}}</p>
        </article>
    @endforeach
</x-postlayout>
