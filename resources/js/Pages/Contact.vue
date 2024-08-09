<template>
    <default-header></default-header>
  
    <page-template title="Contato" :breadcrumbs="breadcrumbs">
      <section id="contact-conteudo" class="w-full min-h-[100vh] mb-3em  mt-3em flex flex-col justify-center">
        <h1 class="pp:w-[100%] pp:text-center text-custom-color pp:text-2xl w-[88%] mx-auto text-5xl md:text-4xl font-semibold">Quero falar diretamente com o Hugo.</h1>

        <div class="py-10 flex flex-col justify-center items-center">
          <form @submit.prevent="submitForm" class="w-full py-5 px-6 gap-4 px-15 flex justify-center items-center flex-wrap">
            <div class="mb-4">
              <input placeholder="Nome" type="text" id="name" v-model="formData.name" class="block input-custom xl:w-[586px] h-12 px-5 rounded-md border border-black border-opacity-90" required>
            </div>
            <div class="mb-4">
              <input  placeholder="Empresa" type="text" id="company" v-model="formData.company" class="block input-custom xl:w-[586px] h-12 px-5 rounded-md border border-black border-opacity-90">
            </div>
            <div class="mb-4">
              <input placeholder="Email" type="email" id="email" v-model="formData.email" class="block input-custom xl:w-[586px] h-12 px-5 rounded-md border border-black border-opacity-90" required>
            </div>
            <div class="mb-4">
              <input placeholder="Telefone" type="tel" id="phone" v-model="formData.phone" class="block input-custom xl:w-[586px] h-12 px-5 rounded-md border border-black border-opacity-90">
            </div>
            <div class="mb-4">
              <input placeholder="Assunto" type="text" id="subject" v-model="formData.subject" class="block input-custom xl:w-[1196px] h-12 px-5 rounded-md border border-black border-opacity-90">
            </div>
            <div class="mb-4">
              <textarea placeholder="Mensagem" id="message" rows="4" v-model="formData.message" class="block input-custom xl:w-[1196px] px-5 py-3 rounded-md border border-black border-opacity-90" required></textarea>
            </div>
            <div class="flex justify-center w-full">
              <button type="submit" class="pp:w-[230px] bg-yellow-hoch text-black-color font-semibold py-3 px-6 rounded-md uppercase hover:bg-blue-zamon-dark">Enviar</button>
            </div>
          </form>
        </div>
      </section>
    </page-template>
  
    <default-footer></default-footer>
  </template>
  
  <script>
  import axios from 'axios';
  import DefaultHeader from '../Components/DefaultHeader.vue';
  import DefaultFooter from '../Components/DefaultFooter.vue';
  import PageTemplate from '../Components/Utils/PageTemplate.vue';
  
  export default {
    components: {
      DefaultHeader,
      DefaultFooter,
      PageTemplate
    },
    data() {
      return {
        breadcrumbs: [
          {
            title: 'Contato',
            slug: 'contato'
          }
        ],
        formData: {
          name: '',
          company: '',
          email: '',
          phone: '',
          subject: '',
          message: ''
        }
      };
    },
    methods: {
      submitForm() {
        // Aqui você pode enviar os dados do formulário para o servidor Laravel
        axios.post('/api/contact', this.formData)
          .then(response => {
            console.log('Formulário enviado com sucesso!', response.data);
            // Limpar o formulário após o envio, se necessário:
            this.formData = {
              name: '',
              company: '',
              email: '',
              phone: '',
              subject: '',
              message: ''
            };
          })
          .catch(error => {
            console.error('Erro ao enviar formulário:', error);
          });
      }
    }
  };
  </script>
  