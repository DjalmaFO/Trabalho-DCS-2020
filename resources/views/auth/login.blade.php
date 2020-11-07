<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Senha') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar-me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('Registrar-se') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Entrar') }}
                </x-jet-button>
            </div>
        </form>
        <div class="row">
            <h3 class="text-sm text-gray-600">
                Entre com:
            </h3>
        </div>
        <div class="mt-3 row justify-around" height="100">
            <div class="flex d-inline">
                <a class="btn bt-md btn-white" href="{{route('login.soc', ['provider' => 'github'])}}">
                <img src="{{ asset('img/git.jpg') }}" width="40" alt="github logo"></a>
            </div>
            <div class="flex d-inline">
                <a class="btn bt-md btn-white" href="{{route('login.soc', ['provider' => 'facebook'])}}">
                <img src="{{ asset('img/face.png') }}" width="40" alt="github logo"></a>
            </div>
            <div class="flex d-inline">
                <a class="btn bt-md btn-white" href="{{route('login.soc', ['provider' => 'google'])}}">
                <img src="{{ asset('img/google2.png') }}" width="40" alt="github logo"></a>
            </div>
            <div class="flex d-inline">
                <a class="btn bt-md btn-white" href="{{route('login.soc', ['provider' => 'discord'])}}">
                <img src="{{ asset('img/discord.png') }}" width="40" alt="github logo"></a>
            </div>
            <div class="flex d-inline">
                <a class="btn bt-md btn-white" href="{{route('login.soc', ['provider' => 'spotify'])}}">
                <img src="{{ asset('img/spotify.png') }}" width="40" alt="github logo"></a>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
