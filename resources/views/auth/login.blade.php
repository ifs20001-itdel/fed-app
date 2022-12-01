<style>
    .logo {
        margin: 20px auto;
    }

    .tulisan {
        text-align: center;
        font-weight: 700;
        letter-spacing: 5px;
        margin-bottom: 45px;
    }

    #test {
        margin-left: 136px;
    }

    #tombol {
        background: linear-gradient(180deg, #2A61CD 0%, #64C1D1 100%);
        padding: 5px 100px;
        border-radius: 10px;
        color: white;
    }
</style>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <a href="/">
                    <img src="https://www.del.ac.id/wp-content/uploads/2013/07/logo_institut-teknologi-del_1agustus2013.jpg" alt="logo" width="90px" height="90px" class="logo">
                </a>
                <div class="tulisan">
                    <p>FRK & FED</p>
                    <p>INSTITUT TEKNOLOGI DEL</p>
                </div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="test" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
                </label>
            </div>

            <div class="text-center" style="margin-top: 30px;">
                <a href="/profile" id="tombol">{{ __('Log in') }}</a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>