<x-layout>

    <x-slot:h1Heading>
        Edit article:
    </x-slot:h1Heading>

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

                            <Avatar src={currentUser?.profilePic} />
                            <div class="topInfoForumMainTiles">
                                <h3>username</h3>
                                <p>
                                </p>
                            </div>

                        </section>

                        <section class="bottomForumMainTiles">
                            <form method="POST" action="/media/{{$post->movie_id}}/post/{{$post->id}}">
                                @csrf
                                @method('PATCH')
                                <label for="createArticleArea"></label>
                                <textarea class="editModalInput" name="article" id="createArticleArea"
                                    oninput="auto_grow(this)" rows="1" cols="1000" autocomplete="off" maxlength="100000"
                                    minlength="2" required spellcheck="true">{{$post->post}}</textarea>

                                <section class="ratingIconsForumMainTiles">
                                    <div class="nmbrRatingIconsForumMainTiles">
                                        <div class="ratingIconForumMainTiles">


                                        </div>

                                        <div class="ratingIconForumMainTiles">


                                        </div>
                                    </div>

                                    <Button type="submit">Update</Button>

                                    <div class="sendRatingIconsForumMainTiles">
                                        <div class="ratingIconForumMainTiles">

                                        </div>

                                        <div class="ratingIconForumMainTiles">


                                        </div>
                                    </div>
                                </section>
                            </form>
                        </section>

                        <form method="POST" action="/media/{{$post->movie_id}}/post/{{$post->id}}">
                            @csrf
                            @method('DELETE')
                            <section class="editForumMainTiles bottomForumMainTiles">
                                <button>Delete</button>
                            </section>
                        </form>
                    </article>
                </div>


            </div>
        </div>
    </section>


</x-layout>