<!doctype html>
<html lang="en" data-bs-theme="auto">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign-in · Gym</title>
        @vite(['resources/sass/welcome.scss', 'resources/js/app.js'])
    </head>

    <body class="text-center">

        <main class="form-signin w-100 m-auto">
            <form action="{{route('login')}}" method="post">
                @csrf
                <img class="mb-4" src="{{ asset('images/LOGO_GYM1.png') }}" alt="" width="90%" height="85%">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-dark" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-body-secondary">&copy; 2023</p>
            </form>
        </main>
    </body>

</html>
