<x-filament::page>
    @if(filament()->hasRegistration())
        <x-slot name="subheading">
            {{ __('filament::pages/auth/login.actions.register.before') }}
            <x-filament::link :href="filament()->getRegistrationUrl()">
                {{ __('filament::pages/auth/login.actions.register.label') }}
            </x-filament::link>
        </x-slot>
    @endif

    <form method="POST" action="{{ route('filament.admin.auth.login') }}" @submit.prevent="$wire.authenticate()">
        @csrf

        {{ $this->form }}

        <x-filament::button type="submit" class="w-full">
            {{ __('filament::pages/auth/login.form.actions.submit.label') }}
        </x-filament::button>
    </form>
</x-filament::page>