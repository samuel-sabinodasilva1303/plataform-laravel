<template>
    <div class="w-full h-full flex justify-center items-center py-6">
        <div v-if="posts.length > 0" class="w-10/12 h-full flex md:flex-row flex-col justify-around items-center md:gap-12 gap-6">
            <post-card v-for="(post, index) in posts.slice(0, 3)" :key="post.id" :post="post"></post-card>
        </div>
        
        <h2 v-else class="text-xl text-black font-bold">
            Não há postagens no momento...
        </h2>
    </div> 
</template>
<script>
import axios from "axios";
import PostCard from "./PostCard.vue";

export default {
    beforeMount() {
        this.getPosts();
        // Chama getPosts a cada 30 segundos (30000 milissegundos)
        setInterval(() => {
            this.getPosts();
        }, 30000);
    },
    components: {
        PostCard
    },
    data() {
        return {
            posts: []
        }
    },
    methods: {
        async getPosts() {
            await axios.post("/api/posts/list", { search: "" })
                .then(response => {
                    this.posts = response.data;
                })
                .catch(error => console.log(error));
        },
    }
}
</script>