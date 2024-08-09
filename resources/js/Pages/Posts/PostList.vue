<template>
    <admin-header/>
    <div class="min-h-[100vh] flex flex-col justify-center items-center bg-gray-50">
        <div class="min-h-[100vh] w-full bg-blur-black flex flex-col justify-center items-center py-10">
            <h1 class="text-3xl text-white font-semibold self-center pb-8">Tabela de Postagens</h1>
            <span class="text-red-600 text-lg self-center w-10/12 py-5">{{ errors.delete }}</span>
            <table class="text-center border border-black border-opacity-65">
                <tr>
                    <th class="pl-2 col-span-3 h-12 bg-yellow-hoch">
                        Criado em
                    </th>
                    <th class="pl-2 col-span-6 h-12 bg-yellow-hoch">
                        Título
                    </th>
                    <th class="pl-2 col-span-3 h-12 bg-yellow-hoch">
                        Ações
                    </th>
                </tr>

                <tr v-for="post in posts" :key="post.id" class="border border-black border-opacity-65">
                    <td class="pl-2 col-span-3 h-12 bg-gray-200">{{ post.date_formatted }}</td>
                    <td class="pl-2 col-span-6 h-12 bg-gray-200">{{ post.title }}</td>
                    <td class="pl-2 col-span-3 h-12 bg-gray-200 flex justify-around items-center gap-4 pp:h-[13rem]">
                        <router-link :to="'/postagens/editar/' + post.id" class="hover:underline">Editar</router-link>
                        <span @click="deletePost(post.id)" class="hover:underline">Remover</span>
                    </td>
                </tr>
            </table>
            <router-link to="/postagens/criar" id="submitButton" class="my-6 ml-10 px-6 self-start py-2 bg-yellow-hoch text-black text-xl font-semibold rounded-md hover:scale-105 duration-200">Novo post</router-link>

        </div>
    </div>
</template>

<script>
import axios from 'axios'
import AdminHeader from '../../Components/AdminHeader.vue';

export default {
    beforeMount() {
        if(! localStorage.getItem('jwt_token')) {
            this.$router.push("/entrar");
        }
        
        this.getPosts();
    },
    components: {
        AdminHeader
    },
    methods: {
        async getPosts() {
            await axios.get("/api/posts", { headers: this.headers })
            .then(response => {
                    this.posts = response.data;
                })
            .catch(error => console.log(error));
        },
        async deletePost(postId) {
            await axios.delete(`/api/posts/${postId}`, { headers: this.headers})
                .then(response => {
                    if(response) {
                        this.$router.go(this.$router.currentRoute)
                    } 
                    else 
                    {
                        this.errors.delete = "Houve erro ao deletar post.";
                    }
                })
                .catch(error => console.log(error));
        },
    },
    data() {
        return {
            posts: [],
            errors: {
                delete: ""
            },
            headers: { 
                "Authorization": 'Bearer ' + localStorage.getItem('jwt_token') 
            }
        }
    },
}
</script>
