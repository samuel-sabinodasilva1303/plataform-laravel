<template>
    <div class="min-h-[100vh] flex flex-col justify-center items-center bg-gray-50">
        <div class="w-full w-4/12 min-h-[100vh] bg-blur-black flex flex-col justify-center items-center py-10">
            <img src="../../src/images/logo.png" class="py-8" alt="Logo Zamon" width="300" height="300">
            <h1 class="text-2xl text-white font-semibold uppercase py-4">Acesso exclusivo</h1>
            <span class="w-full sm:w-1/2 text-yellow-hoch text-base self-center py-5">{{ errors.auth }}</span>
            <form @submit.prevent="submitForm()" method="POST" class="w-full h-full px-4 grid grid-cols-12 gap-6 place-items-center place-content-center">
                <div class="col-span-12 w-8/12">
                    <label for="email" class="text-white text-2xl font-semibold">E-mail</label><br>
                    <input type="email" id="email" v-model="email" name="email" placeholder="Digite o seu email" class="w-full h-10 px-5 rounded-md border border-black border-opacity-80" required>
                    <span class="text-red-600 text-lg">{{ errors.email }}</span>
                </div>

                <div class="col-span-12 w-8/12">
                    <label for="password" class="text-white text-2xl font-semibold">Senha</label><br>
                    <input type="password" id="password" v-model="password" name="password" placeholder="Digite a sua senha" class="w-full h-10 px-5 rounded-md border border-black border-opacity-80" required>
                    <span class="text-red-600 text-lg">{{ errors.password }}</span>
                </div>

                <div class="col-span-12 w-8/12 flex justify-center items-center">
                    <button type="submit" name="submitButton" id="submitButton" class="w-6/12 h-14 bg-yellow-hoch text-black text-xl font-semibold rounded-md hover:scale-105 duration-200">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            email: '',
            password: '',
            errors: {
                email: "",
                password: "",
                auth: ""
            }
        }
    },
    methods: {
        async submitForm() {
            if(this.validation) {
                await axios.post(
                "/api/login", {
                    'email': this.email,
                    'password': this.password,
                })
                .then(response => {
                    localStorage.setItem('jwt_token', response.data.access_token);

                    this.$router.push('/postagens') 
                })
                .catch(error => {
                    this.errors.auth = "Ops, e-mail ou senha incorretos, por favor verifique as informações e tente novamente.";
                    console.log(error)
                });
            }
        },
        validation() {
            let shouldSubmit = true;

            if(this.email === '') {
                this.errors.email = "O campo E-mail é obrigatório!";
                shouldSubmit = false;
            }

            if(this.password === '') {
                this.errors.password = "O campo Senha é obrigatório!";
                shouldSubmit = false;
            }

            return shouldSubmit
        },
    }
}
</script>
