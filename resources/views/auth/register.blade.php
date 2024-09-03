<x-layout>
    <x-slot:h1Heading>
    </x-slot:h1Heading>


    <section class="createArticleAside">
        <div class="formWrapper">

            <h2>Create New Account</h2>

            <form method="POST" action="/register">
                @csrf
                <p>
                    <label for="emailSignup">E-Mail:</label>
                    <input type="email" name="email" id="emailSignup" placeholder="email@mail.com" autocomplete="email"
                        autocapitalize="off" autocorrect="off" spellcheck="false" maxLength="80" required />
                </p>
                <p>
                    <label for="confirmEmailSignup">Confirm E-Mail:</label>
                    <input type="email" name="email_confirmation" id="confirmEmailSignup" placeholder="email@mail.com"
                        autocomplete="email" autocapitalize="off" autocorrect="off" spellcheck="false" maxlength="80"
                        required />
                </p>
                <p>
                    <label for="passwordSignup">Password:</label>
                    <input type="password" id="passwordSignup" name="password" minlength="4" autocomplete="new-password"
                        autocapitalize="off" autocorrect="off" spellcheck="false" maxlength="80" required />
                </p>
                <p>
                    <label for="usernameSignup">Username:</label>
                    <input type="text" id="usernameSignup" name="name" minlength="3" autocomplete="username"
                        autocapitalize="off" autocorrect="off" spellcheck="false" maxlength="80" required />
                </p>

                <button class="btn" id="buttonCreateAcount" type="submit">Create Account</button>

                <p class="formParagraph">Already have an account? <a href="/login"><span>Log in</span></a></p>

            </form>

        </div>
    </section>


</x-layout>