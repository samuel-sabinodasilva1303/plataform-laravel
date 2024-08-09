<template>
    <header id="nav-bar" class="relative" >
        <div class="flex justify-center md:py-4 py-8 sticky top-0 left-0 w-full bg-blur-black z-50 px-5">
            <div class="flex items-center justify-around w-full gap-4 pp:flex-wrap pp:justify-center">
                <router-link to="/postagens" class="xl:w-4/12 md:w-3/12 h-20  md:flex flex-row justify-center items-center">
                    <img src="../../src/images/logo.png" class="w-52 h-full" alt="Logo Hugo Hoch">
                </router-link>

                <div class="xl:w-4/12 md:w-6/12 w-full flex flex-row xl:justify-around md:justify-around justify-between items-center">
                    <router-link to="/postagens" class="text-white xl:text-xl text-lg">Ver postagens</router-link>
                    <router-link to="/postagens/criar" class="text-white xl:text-xl text-lg">Adicionar postagem</router-link>
                </div>
+
                <div class="xl:w-4/12 md:w-3/12 md:flex flex-row justify-center items-center">
                    <button @click="logout()" class="bg-yellow-hoch text-center text-black self-center px-16 py-4 xl:text-xl font-bold w-full md:w-auto rounded-sm">
                        Sair
                    </button>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
import axios from 'axios';

export default {
    methods: {
        async logout() {
            await axios.get("/api/logout")
                .then(response => {
                    if(response) {
                        localStorage.removeItem("jwt_token")
                        this.$router.push('/')
                    }
                })
                .catch(error => console.log(error));
        },
    }
}
</script>