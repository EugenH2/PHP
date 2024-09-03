<x-layout>
    <x-slot:h1Heading>
    </x-slot:h1Heading>


    <section class="createArticleAside">
        <div class="formWrapper">

            <h2>Log in</h2>

            <form method="POST" action="/login">
                @csrf
                <div class="alert">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <p>
                    <label for="emailLogin">E-Mail:</label>
                    <input type="email" name="email" id="emailLogin" value="{{old('email')}}" autocomplete="email"
                        placeholder="email@mail.com" autocapitalize="off" autocorrect="off" spellCheck="false"
                        maxlength="80" required />
                </p>
                <p>
                    <label for="passwordLogin">Password:</label>
                    <input type="password" id="passwordLogin" name="password" autocomplete="current-password"
                        autocapitalize="off" autocorrect="off" spellcheck="false" maxlength="80" required />
                </p>

                <button class="btn" type="submit">Log in</button>

                <p class="formParagraph">Don't have an account? <a href="/register"><span>Sign up</span></a></p>

            </form>

        </div>
    </section>
</x-layout>