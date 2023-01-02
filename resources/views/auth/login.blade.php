<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/"> <x-application-logo/></a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" id="auth">
            @csrf

            <!-- Email Address -->
            <div class="text-box">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="text-box">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" type="password"  name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="text-box">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>

            <div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="btn-primary w-100">
                    {{ __('Connexion') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
