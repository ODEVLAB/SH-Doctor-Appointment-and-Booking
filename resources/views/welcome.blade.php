<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto bg-gray-100">
            Welcome {{ auth()->user()->full_name }}!!
        </main>
    </section>
</x-layout>
