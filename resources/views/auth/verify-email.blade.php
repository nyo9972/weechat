<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
<img src="https://previews.dropbox.com/p/thumb/ABUuUIZR6U-ci8naFHhl6x0gv_JGW1E0HQlhXZsCPQx8I6A7jLddFNMRU024H3Nj3xakCAK9leyTtpj-kj6BtEJ_3R0XKyCdGoKmL1zZUdrG-3NLLhEDNALsjPKQT6tukHkHVMbbjPwD1Fn1JoyPYGuSYg9vrNt-3iRNriaHmCMakt_Zppn-Hz11Sk3otc0eAFkZwYR30fprlL8bNP_vBJLFngHnH9LqeYhwHX3kooepNqSEKbLKG3mrIzu3EJhPsWHTt7n51Ohk5o6pGyFBUEQzy9ZHcE7K7NmzNWJWxMWHkU0r9HbqO80u_HPUMvBOjSb4gVE8QdjLrdiTjiJwyygI2dnemGNJsLwZnKaaml38sA/p.png?fv_content=true&size_mode=5" style="width: 100px;" class="block w-auto" />        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Obrigado por inscrever-se! Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar para você? Se você não recebeu o e-mail, teremos o prazer de enviar outro.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Um novo link de verificação foi enviado para o endereço de e-mail que você forneceu durante o registro.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                {{ csrf_field() }}

                <div>
                    <x-jet-button type="submit">
                        {{ __('Reenviar email de verificação') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                {{ csrf_field() }}

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Sair') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
