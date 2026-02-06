<x-layout>
    <form action="/login" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs mx-auto border p-4">
            <legend class="fieldset-legend">Log in</legend>

            <label class="label">Email</label>
            <input type="email" class="input" name="email" placeholder="Email" required />
            <x-forms.error name="email" />

            <label class="label">Password</label>
            <input type="password" class="input" name="password" placeholder="Password" required />

            <button class="btn btn-neutral mt-4">Log in</button>
        </fieldset>
    </form>
</x-layout>
