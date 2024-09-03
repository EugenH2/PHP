@props(["current" => false])

<a {{ $attributes }} <?= $current ? 'class="current"' : ""?> aria-current="{{ $current ? 'page' : 'false'}}">
    {{ $slot }}</a>