<style>
    body{
        background: #4f5659!important;
    }

    .box-articles {
        background: white!important;
        color: #222222!important;
        max-width: 700px!important;
        margin: auto!important;
        font-family: sans-serif!important;
        padding-left: 3vh;
        padding-right: 3vh;
        border-radius: 10px;
    }

    p{
        line-height: 1.6!important;
    }

    article + article{
        margin-top: 3rem!important;
        padding-top: 3rem!important;
        border-top: 1px solid #cbd5e0!important;
    }
</style>
<x-postlayout>
    <div class="box-articles">
        @foreach ($posts as $post)
            <article>
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
    </div>
</x-postlayout>
