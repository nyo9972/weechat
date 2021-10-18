<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
<img src="https://previews.dropbox.com/p/thumb/ABUuUIZR6U-ci8naFHhl6x0gv_JGW1E0HQlhXZsCPQx8I6A7jLddFNMRU024H3Nj3xakCAK9leyTtpj-kj6BtEJ_3R0XKyCdGoKmL1zZUdrG-3NLLhEDNALsjPKQT6tukHkHVMbbjPwD1Fn1JoyPYGuSYg9vrNt-3iRNriaHmCMakt_Zppn-Hz11Sk3otc0eAFkZwYR30fprlL8bNP_vBJLFngHnH9LqeYhwHX3kooepNqSEKbLKG3mrIzu3EJhPsWHTt7n51Ohk5o6pGyFBUEQzy9ZHcE7K7NmzNWJWxMWHkU0r9HbqO80u_HPUMvBOjSb4gVE8QdjLrdiTjiJwyygI2dnemGNJsLwZnKaaml38sA/p.png?fv_content=true&size_mode=5" style="width: 100px;" class="block w-auto" />        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e nós lhe enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Enviar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
