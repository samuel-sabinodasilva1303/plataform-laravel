<template>
    <default-header></default-header>

    <page-template title="Blog" :breadcrumbs="breadcrumbs">
        <section id="blog-conteudo" class="min-h-[100vh] flex flex-col justify-center items-center">
            <div class="xl:w-8/12 py-10 flex flex-col justify-center items-center">
                <div class="xl:w-5/12 w-full py-5 xl:px-0 px-6">
                    <div class="relative w-full">
                        <input type="search" v-model="search" id="input-search" class="block w-full h-12 px-5 rounded-md border border-black border-opacity-90" placeholder="Procure no blog"/>
                        <div class="absolute inset-y-0 flex items-center ps-3 pointer-events-none end-6">
                            <svg class="w-4 h-4 font-semibold" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="custom-padding-filter xl:w-10/12 w-full md:flex flex-row justify-between py-2 text-black text-lg uppercase">
                    <button v-for="tag in tags" :key="tag.key" @click="filterByTag(tag.key)" class="hover:scale-105 duration-200">{{ tag.label }}</button>
                    <button @click="getAllPosts" class="hover:scale-105 duration-200">Todos</button>

                </div>

                <div class="border-b border-black border-opacity-75 w-full"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:gap-24 md:gap-16 gap-10 py-5 xl:px-0 px-8">
                    <h2 v-if="posts.length <= 0" class="text-3xl self-center font-bold text-blue-zamon">Não há postagens no momento!</h2>
                    
                    <post-card v-else v-for="post in posts" :key="post.id" :post="post"></post-card>
                </div>
            </div>
        </section>
    </page-template>    

    <default-footer></default-footer>
</template>

<script>
import axios from 'axios'
import PostCard from '../Components/PostCard.vue'
import DefaultFooter from '../Components/DefaultFooter.vue'
import DefaultHeader from '../Components/DefaultHeader.vue'
import PageTemplate from '../Components/Utils/PageTemplate.vue'

export default {
    components: {
        PageTemplate,
        DefaultFooter,
        DefaultHeader,
        PostCard
    },
    mounted() {
        this.getPosts();
        this.getTags();
    },
    methods: {
        async getPosts() {
            await axios.post("/api/posts/list", { search: this.search })
                .then(response => {
                    this.posts = response.data;
                })
                .catch(error => console.log(error));
        },
        async getTags() {
            await axios.get("/api/posts/tags")
                .then(response => {
                    this.tags = response.data;
                })
                .catch(error => console.log(error));
        },
        async filterByTag(tag) {
            await axios.post("/api/posts/tags", { tag })
                .then(response => {
                    this.posts = response.data;
                })
                .catch(error => console.log(error));
        },
        getAllPosts() {
            this.search = ''; // Clear the search input if needed
            this.getPosts(); // Fetch all posts without filtering
        }
    },
    watch: {
        search(newVal, oldVal) {
            if (this.search.length >= 3 || this.search === '') {
                this.getPosts();
            }
        }
    },
    data() {
        return { 
            breadcrumbs: [
                {
                    title: "Blog",
                    slug: "blog"
                }
            ],
            posts: [],
            tags: [],
            search: ''
        }
    }
}
</script>
