<!doctype html>

<title>Doctor appointment</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <p class="font-bold font-monospace">Doctors Appointment</p>
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center">
            @auth()
                    <form method="post" action="/logout">
                        @csrf
                        <button type="submit" class="text-xs font-bold uppercase">logout</button>
                    </form>
            @else
                <a href="/register" class="text-xs font-bold uppercase text-blue-500 hover:underline">Register</a>
                <a href="/login" class="text-xs font-bold uppercase mx-6 text-blue-500 hover:underline">Login</a>
            @endauth

        </div>
    </nav>

    {{$slot}}

</section>
<x-flash/>
</body>
