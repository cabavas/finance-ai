<form method="POST" action="{{ route('login') }}" class="space-y-5">
    @csrf
    <div>
        <x-text-input 
        :placeholder="__('E-mail')" 
        id="email" 
        class="block mt-1 w-full" 
        type="text" 
        name="email" 
        :value="old('email')" 
        required autofocus autocomplete="email" />
        <x-input-error :messages="$errors->get('username')" class="mt-2" />
    </div>   
    <div>
        <x-text-input 
            :placeholder="__('Senha')" 
            type="password" 
            id="password" 
            class="block mt-1 w-full"
            name="password" 
            required autofocus autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <div class="flex justify-end">
        <x-primary-button>{{ __('Login') }}</x-primary-button>
    </div>
</form>