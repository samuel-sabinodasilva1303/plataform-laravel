<template>
    <header id="nav-bar" class="relative z-[10000]">
        <div class="flex justify-center md:py-4 py-8 top-0 left-0 z-1000 w-full bg-blur-black px-5 fixed">
            <div class="flex items-center justify-around w-full gap-4 md:flex-nowrap pp:flex-wrap">
                <router-link to="/" class="xl:w-4/12 md:w-3/12 h-20 md:flex flex-row justify-center items-center">
                    <img src="../../src/images/logo.png" class="w-52 h-full" alt="Logo Hugo Hoch">
                </router-link>

                <div class="xl:w-4/12 md:w-6/12 w-full flex flex-row xl:justify-around md:justify-around justify-between items-center">
                    <a href="/#sobre" class="text-white uppercase header-main--custom hover:underline">O Hugo</a>
                    <router-link to="/servicos" class="text-white uppercase header-main--custom hover:underline">Serviços</router-link>
                    <router-link to="/blog" class="text-white uppercase header-main--custom hover:underline">Blog</router-link> 
                    <router-link to="/contato" class="text-white uppercase header-main--custom hover:underline">Contato</router-link>
                </div>
                <div class="xl:w-4/12 md:w-3/12 hidden md:flex flex-row justify-center items-center">
                    <router-link to="/contato" class="hover:scale-110 hover:opacity-50 bg-yellow-hoch main-button--custom text-center text-black self-center px-10 py-4 xl:text-xl font-bold w-full md:w-auto rounded-sm">
                        Entre em contato
                    </router-link>
                </div>
                <div>
                    <router-link to="/entrar" class="flex text-with-custom text-12 pp:hidden" >Acesso Exclusivo</router-link>
                </div>
            </div>
        </div>
    </header>
</template>