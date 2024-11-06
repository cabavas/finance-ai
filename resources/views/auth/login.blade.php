<x-app-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 h-screen bg-login sm:bg-none">
        <div class="absolute inset-0 bg-black/80 z-[1] sm:hidden"></div>
        <div class="flex flex-col justify-center px-8 max-w-[550px] mx-auto my-auto z-[2]">
            <img src="{{ asset('logo.svg') }}" alt="Finance AI" class="w-44 mb-8">
            <h1 class="text-xl font-bold mb-3 text-gray-200 dark:text-gray-300 sm:text-gray-800">Bem Vindo</h1>
            <p class="dark:text-gray-300 text-gray-200 sm:text-gray-800">
                A Finance AI é uma plataforma de gestão financeira que utiliza IA para monitorar suas movimentações, e
                oferecer insights personalizados, facilitando o controle do seu orçamento.
            </p>
            <button class="btn outline outline-1 bg-gray-300 mt-8">
                <div class="flex space-x-3 justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mt-1 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                    </svg> 
                    <span>Fazer login ou criar conta</span>
                </div>
            </button>
        </div>
        <div class="hidden sm:block sm:h-screen">
            <img src="{{ asset('images/login.png') }}" alt="Imagem do sistema" class="h-full w-full object-cover">
        </div>
    </div>
</x-app-layout>
