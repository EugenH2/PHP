<div class="header-menu">
    <ul class="nav-items">

        <li><x-nav-link href="/tv" :current="request()->is('tv')">

            </x-nav-link></li>
        <li><x-nav-link href="/media" :current="request()->is('media')">
                Media center
            </x-nav-link></li>

    </ul>
</div>
<div class="nav-out">
    @guest
        <x-nav-link href="/login" :current="request()->is('login')">
            Login
        </x-nav-link>
        <x-nav-link href="/register" :current="request()->is('register')">
            Register
        </x-nav-link>
    @endguest
    @auth
        <form method="POST" action="/logout">
            @csrf
            <section class="editForumMainTiles bottomForumMainTiles">
                <button>Logout</button>
            </section>
        </form>
    @endauth
</div>