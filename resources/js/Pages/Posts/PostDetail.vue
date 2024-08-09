<template>
  <div id="redirect-top">
    <default-header></default-header>

    <page-template :title="post.title" :breadcrumbs="breadcrumbs">
      <section :id="post.title + 'id' + post.id" class="w-full flex flex-col justify-center items-center">
        <div class="w-10/12 flex flex-col justify-center items-center xl:px-0 px-6 custom--pading-bottom">

          <div class="w-full">
            <img :src="post.image_path" :alt="'Imagem ' + post.title" class="absolute left-0 top-0 custom-opacity z-[-1] w-[1200px] pp:w-full h-[400px] pp:h-[400px]">
          </div>
          <div class="self-start xl:w-2/12 w-full custom--pading-bottom">
            <span class="text-xl text-black">{{ post.date_formatted }}</span>
          </div>

          <div class="w-full xl:text-xl">
            <p v-html="post.content"></p>
          </div>
        </div>
      </section>

      <section id="entre-em-contato" class="w-full flex justify-center items-center">
        <div class="relative bg-blur-black custom-bg--main w-10/12 mx-auto">
          <div class="flex flex-col justify-center items-center gap-ask-custom">
            <div class="text-white flex flex-col items-center justify-center px-5">
              <h3 class="font-bold text-6xl custo-ask--main">Me conte o que achou do artigo</h3>
            </div>

            <div class="text-white flex flex-col text-center items-center justify-center">
              <p class="text-2xl custom-titleAsk--main">
                Envie uma mensagem, sua opinião é muito importante para mim!
              </p>

              <div class="flex flex-col items-center justify-center py-10">
                <a href="https://www.linkedin.com/in/hugohoch/" target="_blank" class="hover:scale-110 hover:opacity-50 bg-yellow-hoch main-button--custom text-center text-black self-start px-10 py-4 w-full rounded-sm">
                  Entre em contato
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="mx-auto flex justify-center items-center py-10 lg:py-14">
        <div class="w-screen flex flex-col">
          <div class="text-white flex flex-col items-center justify-center px-5 py-6">
            <h3 class="font-bold text-4xl text-black">Relacionados</h3>

            <div class="w-full h-full flex flex-row justify-center items-center">
              <blog-cards-display :is-recent-posts="true" class="py-24" @post-clicked="handlePostClicked"></blog-cards-display>
            </div>
          </div>
        </div>
      </section>
    </page-template>

    <default-footer></default-footer>
  </div>
</template>

<script>
import axios from 'axios';
import DOMPurify from 'dompurify';
import PageTemplate from '../../Components/Utils/PageTemplate.vue';
import DefaultHeader from '../../Components/DefaultHeader.vue';
import DefaultFooter from '../../Components/DefaultFooter.vue';
import BlogCardsDisplay from '../../Components/BlogCardsDisplay.vue';

export default {
  components: {
    PageTemplate,
    DefaultHeader,
    DefaultFooter,
    BlogCardsDisplay
  },
  data() {
    return {
      breadcrumbs: [
        {
          title: "Blog",
          slug: "blog",
        },
        {
          title: "",
        },
      ],
      post: {
        description: '',
        content: ''
      }
    };
  },
  created() {
    this.getPost();
  },
  watch: {
    '$route.params.id': function(newId, oldId) {
      this.getPost();
    }
  },
  methods: {
    unescapeHTML(str) {
      const txt = document.createElement('textarea');
      txt.innerHTML = str;
      return txt.value;
    },
    async getPost() {
      try {
        const response = await axios.get(`/api/posts/${this.$route.params.id}`);
        if (response.data) {
          this.post.id = response.data.id;
          this.post.title = response.data.title;
          this.breadcrumbs[1].title = this.post.title;
          this.post.date_formatted = response.data.date_formatted;
          this.post.image_path = response.data.image_path;
          this.post.tag_formatted = response.data.tag_formatted;
          // Desescapar o HTML antes da sanitização
          const unescapedDescription = this.unescapeHTML(response.data.description);
          const unescapedContent = this.unescapeHTML(response.data.content);

          this.post.description = DOMPurify.sanitize(unescapedDescription);
          this.post.content = DOMPurify.sanitize(unescapedContent);
          
          this.$nextTick(() => {
            const element = document.getElementById('redirect-top');
            if (element) {
              element.scrollIntoView({ behavior: 'smooth' });
            }
          });
        }
      } catch (error) {
        console.error('Erro ao buscar post:', error);
      }
    },
    handlePostClicked(postId) {
      this.$router.push(`/posts/${postId}`);
    }
  }
};
</script>
