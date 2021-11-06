<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto bg-gray-100">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register</h1>
                <form method="post" action="/register" class="mt-10">
                    @csrf
                    <x-form.input name="full_name"/>
                    <x-form.input name="username"/>
                    <x-form.input name="phone"/>
                    <x-form.input name="email" type="email"/>
                    <x-form.input name="password" type="password"/>
                    <x-form.button>
                        submit
                    </x-form.button>
                </form>
            </x-panel>
        </main>


    </section>
</x-layout>
