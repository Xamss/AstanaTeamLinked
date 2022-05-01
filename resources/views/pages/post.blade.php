<x-Postlayout>
    <article>
        <h1>{{$post->name}}</h1>
        <p>Posted by {{$post->user->name}}</p>
        <p>{{$post->body}}</p>
        <a href="/posts">Go Back</a>
    </article>
</x-Postlayout>
