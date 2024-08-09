<template>
    <router-link :to="'/blog/postagem/' + post.id" href="#redirect-top" class="cursor-pointer w-[18rem] h-fit">
        <div>
            <img :src="post.image_path" :alt="'Imagem' + post.title" class="w-full h-[240px]">
        </div>
        <div class="h-[20px]">
            <img class="relative bottom-3em" src="../../src/images/hugoFile.png">
        </div>
        <div>
            <small class="font-semibold text-gray-800" v-text="post.date_formatted"></small>
        </div>
        <div class="flex justify-between my-1">
            <h2 class="font-semibold w-11/12 text-black-color" v-text="post.title"></h2>

            <div class="w-1/12 flex justify-end">
                <svg width="20" height="20" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.33325 17L17.3333 7M17.3333 7H7.33325M17.3333 7V17" stroke="#1A1A1A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
        <div class="text-gray-500">
            <p v-html="post.description"></p>
        </div>
    </router-link>
</template>

<script>
import DOMPurify from 'dompurify';

export default {
  props: {
    post: {
      type: Object,
      required: true,
      default: () => ({})
    }
  },
  computed: {
    sanitizedDescription() {
      return DOMPurify.sanitize(this.post.description);
    }
  }
}
</script>
