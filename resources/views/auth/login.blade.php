<x-app-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 h-screen bg-login sm:bg-none">
        <div class="absolute inset-0 bg-black/80 z-[1] sm:hidden"></div>
        <div class="flex flex-col justify-center px-8 max-w-[550px] mx-auto my-auto z-[2] space-y-5">
            <img src="{{ asset('logo.svg') }}" alt="Finance AI" class="w-44 mb-8">
            <h1 class="text-xl font-bold mb-3 text-gray-200 dark:text-gray-300 sm:text-gray-800">Bem Vindo</h1>
            <p class="dark:text-gray-300 text-gray-200 sm:text-gray-800">
                A Finance AI é uma plataforma de gestão financeira que utiliza IA para monitorar suas movimentações, e
                oferecer insights personalizados, facilitando o controle do seu orçamento.
            </p>
            <x-login-form/>
            <x-primary-button onclick="window.location.href='{{ route('register') }}'">Registrar</x-primary-button>
            <x-primary-button>
                <div class="flex space-x-3 justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mt-1 bi bi-google" viewBox="0 0 16 16">
                        <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                      </svg>
                    <span>Entrar com o Google</span>
                </div>
            </x-primary-button>
        </div>
        <div class="hidden sm:block sm:h-screen relative">
            <div class="absolute inset-0 bg-black/70 z-[2]"></div>
            <img src="{{ asset('images/login.png') }}" alt="Imagem do sistema" class="h-full w-full object-cover z-[1]">
        </div>
    </div>
</x-app-layout>
