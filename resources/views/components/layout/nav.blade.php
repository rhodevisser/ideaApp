<nav class="border-b border-border px-6">
    <div class="max-w-7xl mx-auto h-16 flex items-center justify-between">
        <div>
            <a href="/">
                IDEA
{{--                <img src="/images/logo.png" alt="Bla logo" width="100">--}}
            </a>
        </div>

        <div class="flex gap-x-4">

            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button>Log Out</button>
                </form>
            @endauth

            @guest
                <a href="/login">Sign In</a>
                <a href="/register" class="btn">Register</a>
            @endguest




        </div>
    </div>
</nav>
