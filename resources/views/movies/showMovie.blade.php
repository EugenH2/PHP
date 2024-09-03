<x-layout>
    <script>
        function auto_grow(element) {
            element.style.height = "auto";
            element.style.height = (element.scrollHeight + 1) + "px";
        }
    </script>

    <x-slot:h1Heading>
    </x-slot:h1Heading>

    <section class="movieSection">

        <div class="movieImgItem">
            <div>
                <img src="/<?= $movie['image'] ?>" alt="<?= 'Image cover: ' . $movie['image'] ?>">
            </div>
            <article>
                <h4><?= $movie["name"] ?></h4>
                <p><?= $movie["description"] ?></p>
            </article>
        </div>

    </section>


    <section>
        <div class="createArticleAside">
            <div class="forum">

                <div class="forumMain">
                    <div class="alert">
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <article class="createArticle forumMainTiles">
                        <section class="topForumMainTiles">


                            <div class="topInfoForumMainTiles">
                                <h3>{{isset(Auth::user()->name) ? Auth::user()->name : 'Register name'}}</h3>
                                <p>
                                </p>
                            </div>

                        </section>

                        <section class="bottomForumMainTiles">
                            <form method="POST" action="/media/{{$movie->id}}/post">
                                @csrf
                                <input type="hidden" name="movie_id" value="{{$movie->id}}" />
                                <label for="createArticleArea"></label>
                                <textarea class="editModalInput" name="article" id="createArticleArea"
                                    oninput="auto_grow(this)" placeholder="Create a new article" rows="1" cols="1000"
                                    autocomplete="off" maxlength="100000" minlength="2" required
                                    spellcheck="true"></textarea>

                                <section class="ratingIconsForumMainTiles">
                                    <div class="nmbrRatingIconsForumMainTiles">
                                        <div class="ratingIconForumMainTiles">


                                        </div>

                                        <div class="ratingIconForumMainTiles">


                                        </div>
                                    </div>

                                    <Button type="submit">Submit</Button>

                                    <div class="sendRatingIconsForumMainTiles">
                                        <div class="ratingIconForumMainTiles">

                                        </div>

                                        <div class="ratingIconForumMainTiles">


                                        </div>
                                    </div>
                                </section>
                            </form>
                        </section>

                    </article>
                </div>

                @foreach ($posts as $post)
                    <article class="forumMainTiles">

                        <section class="topForumMainTiles">

                            <div class="topInfoForumMainTiles">
                                <h3>{{ $post->user->name }}</h3>
                                <p>{{$post->created_at->toDateTimeString()}}</p>
                            </div>

                        </section>

                        <section class="bottomForumMainTiles">
                            <p class="bottomForumMainTilesP"><span>{{$post->post}}</span></p>
                        </section>

                        @can('edit', $post)
                            <section class="editForumMainTiles bottomForumMainTiles">
                                <a href="{{$movie->id}}/edit/{{$post->id}}">Edit </a>
                            </section>
                        @endcan

                    </article>
                @endforeach

            </div>
        </div>
    </section>

    <div>
        {{$posts->links()}}
    </div>
</x-layout>