<template>
    <div class="w-full py-12">
        <Carousel v-bind="settings" :wrap-around="true" :breakpoints="breakpoints">
            <Slide v-for="service in services" :key="service.id" class="w-screen h-auto">
                <service-card :service="service"></service-card>
            </Slide>

            <template #addons>
                <Navigation />
                <Pagination />
            </template>
        </Carousel>
    </div>
</template>

<script>
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Navigation, Pagination } from 'vue3-carousel'
import ServiceCard from './ServiceCard.vue'

export default {
    components: {
        Carousel, 
        Slide, 
        Navigation,
        Pagination,
        ServiceCard
    },
    data() {
        return {
            settings: {
                itemsToShow: 1,
                itemsToScroll: 1, 
                transition: 700,
                autoplay: 2400,
                snapAlign: 'center',
            },
            breakpoints: {
                700: {
                    itemsToShow: 2,
                    itemsToScroll: 1,
                    transition: 700,
                    autoplay: 2400,
                    snapAlign: 'center',
                },
                1000: {
                    itemsToShow: 3,
                    itemsToScroll: 2,
                    transition: 700,
                    autoplay: 2400,
                    snapAlign: 'center',
                },
            },
            services: [
                {
                    "id": 1,
                    "title": "Marketing Estratégico",
                    "content": "Consultoria estratégica nas áreas de marketing e vendas. Descubra exatamente aonde está o problema na sua empresa.",
                    "icon": "images/icons/strategy.png"
                },
                {
                    "id": 2,
                    "title": "Palestras e Treinamentos On Demand",
                    "content": "Nenhuma palestra pronta, de portfólio. Todas as palestras são desenvolvidas sob medida, de acordo com as necessidades de cada projeto.",
                    "icon": "images/icons/training.png"
                },
                {
                    "id": 3,
                    "title": "Mentoria Empresarial",
                    "content": "Tenha como mentor um profissional que percorreu mais de 20 anos atuando de Marketing e Vendas.",
                    "icon": "images/icons/mentoring.png"
                },
                {
                    "id": 4,
                    "title": "Negociação e Persuasão",
                    "content": "Treinamento exclusivo com foco no fechamento de negociações, baseado nos melhores métodos mundiais.",
                    "icon": "images/icons/negociation.png"
                },
                {
                    "id": 5,
                    "title": "Performance Comercial",
                    "content": "Desenho da estratégia comercial, implementação e análise de indicadores comerciais e treinamento do time de vendas.",
                    "icon": "images/icons/performance.png"
                },
                {
                    "id": 6,
                    "title": "Estratégia de Comunicação e Propaganda",
                    "content": "Trabalho conjunto e interface com agências de propaganda e branding afim de alinhar a comunicação com os objetivos da empresa.",
                    "icon": "images/icons/advertising.png"
                },
                {
                    "id": 7,
                    "title": 'O efeito "Uau!"',
                    "content": "Análise de todos os pontos de contato da marca e criação do encantamento em cada momento.",
                    "icon": "images/icons/wow.png"
                },
            ]
        }
    },
}
</script>
