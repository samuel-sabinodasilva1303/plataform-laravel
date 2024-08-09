<template>
    <admin-header/>

    <div class="min-h-[100vh] flex flex-col justify-center items-center bg-gray-50 ">
        <div class="pp:w-[90%] w-6/12 min-h-[40vh] bg-blur-black flex flex-col justify-center items-center rounded-lg shadow-lg my-10 py-3">
            <span class="text-red-600 text-lg self-center w-10/12 py-5">{{ errors.save }}</span>
            <form @submit.prevent="submitForm()" method="POST" class="pp:flex pp:flex-wrap w-full h-full px-4 grid grid-cols-12 gap-6 place-items-center place-content-center" enctype="multipart/form-data">
                <div class="md:col-span-6 col-span-12 w-full">
                    <label for="title" class="text-white text-2xl font-semibold">Título</label><br>
                    <input type="text" id="title" v-model="post.title" name="title" placeholder="Digite o título" class="w-full h-10 px-5 rounded-md border border-black border-opacity-80" required>
                    <span class="text-red-600 text-lg">{{ errors.title }}</span>
                </div>

                <div class="md:col-span-6 col-span-12 w-full">
                    <label for="tag" class="text-white text-2xl font-semibold">Categoria</label><br>
                    <select id="tag" v-model="post.tag" name="tag" class="w-full h-10" required>
                        <option value="" selected>Selecione a categoria...</option>
                        <option v-for="tag in tags" :key="tag.key" :value="tag.key">{{ tag.label }}</option>
                    </select>
                </div>

                <div class="col-span-12 w-full description">
                    <label for="description" class="text-white text-2xl font-semibold">Descrição</label><br>
                    <ckeditor :editor="editor" v-model="post.description" />
                    <span class="text-red-600 text-lg">{{ errors.description }}</span>
                </div>

                <div class="col-span-12 w-full">
                    <label for="content" class="text-white text-2xl font-semibold">Conteúdo</label><br>
                    <ckeditor :editor="editor" v-model="post.content" />
                    <span class="text-red-600 text-lg">{{ errors.content }}</span>
                </div>

                <div class="col-span-12 w-full h-32 bg-white flex flex-col justify-center items-center">
                    <button class="w-full" type="button" @click="onPickFile">Selecione a imagem do post</button>
                    <input type="file" name="image" class="sr-only" accept="image/*" ref="fileInput" @change="onFilePicked" required/>
                </div>
                
                <div class="col-span-12 w-8/12 flex justify-center items-center">
                    <button type="submit" name="submitButton" id="submitButton" class="w-6/12 h-14 bg-yellow-hoch text-black text-xl font-semibold rounded-md hover:scale-105 duration-200">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import CKEditor from '@ckeditor/ckeditor5-vue';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import axios from 'axios';
import AdminHeader from '../../Components/AdminHeader.vue';

export default {
    components: {
        AdminHeader,
        ckeditor: CKEditor.component
    },
    data() { 
        return {
            post: {
                id: "",
                title: "",
                tag: "",
                description: "",
                content: "",
                image: null,
            },
            errors: {
                title: "",
                tag: "",
                description: "",
                content: "",
                save: ""
            },
            headers: {
                "Authorization": 'Bearer ' + localStorage.getItem('jwt_token'),
                'Content-Type': "multipart/form-data;"
            },
            tags: [],
            editor: ClassicEditor
        };
    },
    beforeMount() {
        if(!localStorage.getItem('jwt_token')) {
            this.$router.push("/entrar");
        }

        this.getTags();

        if(this.$route.params.id) {
            this.getPost();
        }
    },

    methods: {
        submitForm() {
            if(this.$route.params.id) {
                this.update();
            } else {
                this.save();
            }
        },
        async getPost() {
            await axios.get(`/api/posts/${this.$route.params.id}`, { headers: this.headers })
                .then(response => {
                    if(response.data) {
                        this.post.id = response.data.id;
                        this.post.title = response.data.title;
                        this.post.tag = response.data.tag;
                        this.post.description = response.data.description;
                        this.post.content = response.data.content;
                        this.post.image = response.data.image;
                    }
                })
                .catch(error => console.log(error));
        },
        async save() {
            const formData = new FormData();
            formData.append("title", this.post.title);
            formData.append("tag", this.post.tag);
            formData.append("description", this.post.description);
            formData.append("content", this.post.content);
            if (this.post.image) {
                formData.append("image", this.post.image);
            }

            await axios.post("/api/posts", formData, { headers: { ...this.headers, 'Content-Type': 'multipart/form-data' } })
                .then(response => {
                    if(!response.data) {
                        this.errors.save = "Houve erro ao salvar postagem.";
                    } else {
                        this.$router.push('/postagens')
                    } 
                })
                .catch(error => console.log(error));
        },
        async update() {
            const formData = new FormData();
            formData.append("id", this.post.id);
            formData.append("title", this.post.title);
            formData.append("tag", this.post.tag);
            formData.append("description", this.post.description);
            formData.append("content", this.post.content);
            if (this.post.image) {
                formData.append("image", this.post.image);
            }

            await axios.post(`/api/posts/${this.post.id}`, formData, { headers: { ...this.headers, 'Content-Type': 'multipart/form-data' } })
                .then(response => {
                   if(!response.data) {
                        this.errors.save = "Houve erro ao atualizar postagem.";
                    } else {
                        this.$router.push('/postagens')
                    } 
                })
                .catch(error => console.log(error));
        },
        async getTags() {
            await axios.get('/api/posts/tags')
                .then(response => {
                    if(response.data) {
                        this.tags = response.data;
                    }
                })
                .catch(error => console.log(error));
        },
        onPickFile () {
            this.$refs.fileInput.click();
        },
        onFilePicked (event) {
            const files = event.target.files;
            this.post.image = files[0];
        }
    },
}
</script>

<style scoped>
/* Adicione aqui estilos específicos, se necessário */
</style>
