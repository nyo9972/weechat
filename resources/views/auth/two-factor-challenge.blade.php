<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
<img src="https://previews.dropbox.com/p/thumb/ABUuUIZR6U-ci8naFHhl6x0gv_JGW1E0HQlhXZsCPQx8I6A7jLddFNMRU024H3Nj3xakCAK9leyTtpj-kj6BtEJ_3R0XKyCdGoKmL1zZUdrG-3NLLhEDNALsjPKQT6tukHkHVMbbjPwD1Fn1JoyPYGuSYg9vrNt-3iRNriaHmCMakt_Zppn-Hz11Sk3otc0eAFkZwYR30fprlL8bNP_vBJLFngHnH9LqeYhwHX3kooepNqSEKbLKG3mrIzu3EJhPsWHTt7n51Ohk5o6pGyFBUEQzy9ZHcE7K7NmzNWJWxMWHkU0r9HbqO80u_HPUMvBOjSb4gVE8QdjLrdiTjiJwyygI2dnemGNJsLwZnKaaml38sA/p.png?fv_content=true&size_mode=5" style="width: 100px;" class="block w-auto" />        </x-slot>

        <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                {{ __('Confirme o acesso à sua conta inserindo o código de autenticação fornecido pelo seu aplicativo autenticador.') }}
            </div>

            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                {{ __('Confirme o acesso à sua conta inserindo um dos seus códigos de recuperação de emergência.') }}
            </div>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('two-factor.login') }}">
                {{ csrf_field() }}

                <div class="mt-4" x-show="! recovery">
                    <x-jet-label for="code" value="{{ __('Code') }}" />
                    <x-jet-input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                </div>

                <div class="mt-4" x-show="recovery">
                    <x-jet-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                    <x-jet-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('Use um código de recuperação') }}
                    </button>

                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('Use um código de autenticação') }}
                    </button>

                    <x-jet-button class="ml-4">
                        {{ __('Entrar') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
