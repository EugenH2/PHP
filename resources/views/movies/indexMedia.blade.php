<x-layout>
    <x-slot:h1Heading>
    </x-slot:h1Heading>

    <ul class="moviesList">
        <?php foreach ($movies as $movie): ?>

        <li>
            <a href="/media/<?= $movie['id'] ?>">
                <section class="movieImgItem">
                    <div>
                        <img src="/<?= $movie['image'] ?>" alt="<?= 'Image cover: ' . $movie['image'] ?>">
                    </div>
                    <article>
                        <h4><?= $movie["name"] ?></h4>
                        <p><?= $movie["description"] ?></p>
                    </article>
                </section>
            </a>
        </li>

        <?php endforeach; ?>
    </ul>

    <div>
        {{$movies->links()}}
    </div>

</x-layout>