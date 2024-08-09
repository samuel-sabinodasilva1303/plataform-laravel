<template>
        <default-header></default-header>
        <div id="cardService" class="w-full py-12">
            <Carousel v-bind="settings" :wrap-around="true" :breakpoints="breakpoints">
                <Slide v-for="service in services" :key="service.id" class="w-screen h-auto">
                    <service-card :service="service" icon-class="w-full h-full"></service-card>
                </Slide>

                <template #addons>
                    <Navigation />
                </template>
            </Carousel>
        </div>
        <div class="relative bg-blur-black px-5 py-10 mx-auto">
        </div>
        <section id="entre-em-contato" class="w-full flex justify-center items-center">
            <div class="relative bg-blur-black px-5 py-10 lg:py-20 mx-auto w-full">
                <div class=" flex flex-col justify-center items-center">
                    <div class="text-white flex flex-col items-center justify-center px-5">
                        <h3 class="font-bold text-6xl pp:text-3xl">Vamos Conversar?</h3>
                    </div>

                    <div class="text-white flex flex-col text-center items-center justify-center py-10">
                        <p class="text-2xl custom-servicesPage--main">
                           Descubra a estratégia ideal para impulsionar sua empresa ou organização  rumo ao sucesso. Juntos, vamos alcançar nossos objetivos de forma eficaz  e  duradoura.
                        </p>

                        <div class="flex flex-col items-center justify-center py-10">
                            <a href="https://www.linkedin.com/in/hugohoch/" target="_blank"
                                class="bg-yellow-hoch  main-button--custom text-center text-black self-start px-10 py-4 w-full  rounded-sm">
                               QUERO CONVERSAR COM O HUGO!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <default-footer></default-footer>

</template>
 
<script>
import axios from 'axios';
import DefaultHeader from '../Components/DefaultHeader.vue';
import DefaultFooter from '../Components/DefaultFooter.vue';
import PageTemplate from '../Components/Utils/PageTemplate.vue';
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Navigation, Pagination } from 'vue3-carousel'
import ServiceCard from '../Components/Utils/ServiceCard.vue'

export default {
  components: {
    DefaultHeader,
    DefaultFooter,
    PageTemplate,
    Carousel, 
    Slide, 
    Navigation,
    Pagination,
    ServiceCard
  },
  data() {
    return {
      breadcrumbs: [
        {
          title: 'Servicos',
          slug: 'Servicos'
        }
      ],
      settings: {
                itemsToShow: 1,
                itemsToScroll: 1, 
                transition: 700,
                snapAlign: 'center',
            },
            breakpoints: {
                700: {
                    itemsToShow: 1,
                    itemsToScroll: 1,
                    transition: 700,
                    snapAlign: 'center',
                },
                1000: {
                    itemsToShow: 1,
                    itemsToScroll: 1,
                    transition: 700,
                    snapAlign: 'center',
                },
            },
            services: [
                
                {
                    "id": 1,
                    "title": "",
                    "content": "Consultoria estratégica nas áreas de marketing e vendas. Vamos descobrir exatamente onde está o problema da sua empresa..",
                    "icon": "images/icons/imagem1.png",
                    "imageicon" : "images/icons/fileHugo.jpeg"

                },
                {
                    "id": 2,
                    "title": "",
                    "content": "Serei o mentor ideal para estruturar e organizar seus processos. Atuando mais de 20 anos com Marketing e Vendas.",
                    "icon": "images/icons/imagem2.png",
                    "imageicon" : "images/icons/fileHugo.jpeg"

                },
                {
                    "id": 3,
                    "title": "",
                    "content": "Desenho da estratégia comercial, implementação e análise de indicadores comerciais e treinamento do time de vendas.",
                    "icon": "images/icons/imagem3.png",
                    "imageicon" : "images/icons/fileHugo.jpeg"

                },
                {
                    "id": 4,
                    "title": "",
                    "content": "Trabalho conjunto e interface com agências de propaganda e branding a fim de alinhar a comunicação com os objetivos da empresa.",
                    "icon": "images/icons/imagem4.png",
                    "imageicon" : "images/icons/fileHugo.jpeg"

                },
                {
                    "id": 5,
                    "title": "",
                    "content": "Treinamento exclusivo com foco no fechamento de negociações, baseado nos melhores métodos mundiais.",
                    "icon": "images/icons/imagem6.png",
                    "imageicon" : "images/icons/fileHugo.jpeg"

                },
                {
                    "id": 6,
                    "title": "",
                    "content": "Nenhuma palestra pronta, de portfólio. Todas as palestras são desenvolvidas sob medida, de acordo com as necessidades de cada projeto.",
                    "icon": "images/icons/imagem7.png",
                    "imageicon" : "images/icons/fileHugo.jpeg"

                },
            ]
    };
  },
};
</script>
