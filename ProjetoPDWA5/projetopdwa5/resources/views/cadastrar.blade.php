<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar novo Equipamento Esportivo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/cadastrar" method="post">
                        @csrf <!--token de formulario -->
                    <!-- tipo -->
                    <div>
                        <x-input-label for="tipo" :value="__('Tipo do equipamento (até 50 caracteres)')" />
                        <x-text-input id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="old('tipo')" maxlength="50" required autofocus autocomplete="tipo" />
                        <x-input-error :messages="$errors->get('tipo')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="material" :value="__('Material do equipamento (até 50 caracteres)')" />
                        <x-text-input id="material" class="block mt-1 w-full" type="text" name="material" :value="old('material')" maxlength="50" required autocomplete="material" />
                        <x-input-error :messages="$errors->get('material')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="data_fabricacao" :value="__('Data de Fabricação')" />
                        <x-text-input id="data_fabricacao" class="block mt-1 w-full" type="date" name="data_fabricacao" :value="old('data_fabricacao')" required />
                        <x-input-error :messages="$errors->get('data_fabricacao')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="peso" :value="__('Peso (em kg)')" />
                        <x-text-input id="peso" class="block mt-1 w-full" type="number" step="0.01" name="peso" :value="old('peso')" required />
                        <x-input-error :messages="$errors->get('peso')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="novo" :value="__('O equipamento é novo?')" />
                        <input id="novoTrue" type="radio" name="novo" value="1" {{old('booleano' == '1' ? 'checked' : '')}}/> Sim
                        <input id="novoFalse" type="radio" name="novo" value="0" {{old('booleano' == '0' ? 'checked' : '')}}/> Não
                        <x-input-error :messages="$errors->get('novo')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="cor" :value="__('Cor')" />
                        <x-text-input id="cor" class="block mt-1 w-full" type="text" name="cor" :value="old('cor')" maxlength="50" required autocomplete="cor" />
                        <x-input-error :messages="$errors->get('cor')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Enviar') }}
                        </x-primary-button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>