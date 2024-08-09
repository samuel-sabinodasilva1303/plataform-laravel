<template>
    <default-header></default-header>

    <section class="mx-auto">
        <div class="bg-blur-black 2xl:h-[100vh] xl:h-[100vh] h-[127vh] flex flex-col items-center justify-center relative" >
            <div class="w-full z-10 h-[30rem] customPadding-nine flex flex-col justify-center items-center text-white absolute">
                <div class="3xl:w-8/12 2xl:w-7/12 xl:w-7/12 lg:w-8/12 w-10/12 flex flex-col justify-start items-start">
                    <div class="xl:w-[100%] relative xl:left-[-146px]">
                        <h1 class="mt-1em custom-title--main w-[110%]">Eu sou o cara para quem você liga quando não consegue bater metas.</h1>

                        <p class="3xl:text-3xl 2xl:text-2xl break-words py-14 w-[80%] header-title-custom">
                            Especialista em Estratégias de Marketing, Vendas e Negociação, atua com ações para aumento da lucratividade e resultados, tornando-os previsíveis, escaláveis e rentáveis.
                        </p>
                        
                        <a href="/#sobre" class="bg-yellow-hoch main-button--custom text-center text-black self-start px-14 py-5 font-bold text-xl rounded-sm hover:scale-110 hover:opacity-50">
                           QUERO CONHECER
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden lg:flex w-full relative justify-end items-end xl:top-[7rem] lg:top-16">
            <img src="/resources/src/images/new-hugo.png" class="w-8/12 h-auto absolute">
        </div> 
        
        <div class="hidden lg:flex bg-yellow-hoch justify-center items-center xl:h-52 h-32 px-12 padding-info--custom">
            <div class="w-full flex justify-between items-center gap-x-8 h-full">
                <div class="w-4/12 h-full flex justify-center items-center">
                    <h2 class="text-black text-color-cinza custom-sucess--custom">Sucesso comprovado</h2>
                </div>

                <div class="w-8/12 h-full flex justify-center items-baseline divide-x-2 divide-black">
                    <div class="flex flex-col justify-center items-center w-full text-center font-semibold text-black xl:py-2 xl:px-6 p-3 xl:text-2xl text-lg">
                        <p class="custom-experience">20+</p>
                        <p class="text-13px font-300 leading-120 text-color-cinza">Anos de experiência</p>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center w-full text-center font-semibold text-black xl:py-2 xl:px-6 p-3 xl:text-2xl text-lg">
                        <p class="custom-experience">12k</p>
                        <p class="text-13px font-300 leading-120 text-color-cinza">Empresários e executivos capacitados</p>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center w-full text-center font-semibold text-black xl:py-2 xl:px-6 p-3 xl:text-2xl text-lg">
                        <p class="custom-experience">3,6k</p>
                        <p class="text-13px font-300 leading-120 text-color-cinza">Empresas atendidas com consultoria de marketing e vendas</p>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center w-full text-center font-semibold text-black xl:py-2 xl:px-6 p-3 xl:text-2xl text-lg">
                        <p class="custom-experience">300+</p>
                        <p class="text-13px font-300 leading-120 text-color-cinza">Palestras e treinamentos ministrados</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--EMPRESAS-->
    <section id="empresas"  class="  mx-auto min-h-[90vh] flex justify-center items-center relative bg-gray-100 px-5 py-10 lg:py-20 padding-customBottom">
        <div class="w-full flex flex-col max-w-7xl mx-auto">
            <div class="text-black flex flex-col items-center justify-center px-5 py-10">
                <h3 class="font-bold text-6xl pp:text-3xl title-services--custom">Co-founder e CEO das empresas</h3>
            </div>
            <companies-card></companies-card>
        </div>
        <div id="sobre" class="relative" style="top: 20em; transition: all 999mms"></div>
    </section>
    <!--SOBRE-->
    <section class="  mx-auto px-5 flex flex-col items-center bg-black">
        <div class="2xl:w-10/12 lg:w-11/12 flex flex-col lg:flex-row-reverse lg:justify-around justify-center items-center relative">
            <div class="2xl:w-6/12 w-full h-full flex flex-col justify-center items-center xl:my-0 my-10">
                <div class=" w-full xl:py-12">
                    <h2 class="font-bold 2xl:text-6xl xl:text-5xl text-4xl mb-5 text-white xl:pb-10 pb-4">Quem é Hugo Hoch?</h2>

                    <p class="sobre-text--custom font-medium text-white pb-10">
                        Publicitário de formação, é pós graduado em Administração de Marketing pela Universidade Estadual de Londrina. Palestrante, Mentor, Professor Universitário e Consultor de Marketing e Vendas, com 20 anos experiência atuando nas áreas de Planejamento e Inteligência de Marketing, Comunicação e Propaganda, Gestão Comercial, Marketing Digital, Branding e Gestão de Marcas. Já atendeu mais de 3,6k de empresas com consultorias de marketing e vendas, e já treinou mais de 8k empresários e executivos, em mais de 300 treinamentos ministrados.
                    </p>

                    <p class="sobre-text--custom font-medium text-white pb-10">
                        Especialista em Estratégias de Marketing, Negociação, Persuasão e Influência atua com ações para aumento da lucratividade e vendas.
                    </p>

                    <p class="font-medium text-white pb-10">
                        Meu propósito: Acelerar o resultado das empresas e formar profissionais de Marketing e Negociadores 10 vezes melhor do que eu.
                    </p>

                    <router-link to="/contato" class="hover:scale-110 hover:opacity-50 bg-yellow-hoch main-button--custom text-center uppercase text-black self-start px-12 py-5 text-xl font-bold w-6/12 rounded-sm lg:mx-0 mx-auto lg:my-0 my-5">
                        QUERO O HUGO NA MINHA EMPRESA
                    </router-link>
                </div>
            </div>

            <div class="hidden lg:flex 2xl:w-5/12 w-full z-50 2xl:-mt-24 lg:-mt-12 self-end">
                <img src="/resources/src/images/sobreHugo.png" class="w-full h-full" alt="Perfil Hugo">
            </div>
        </div>
    </section>

    <!-- SERVICES
    <section id="servicos" class="  mx-auto min-h-[20vh] flex justify-center items-center relative bg-gray-100">
        <div class="w-full flex flex-col justify-center items-center py-10">
            <div class="w-10/12 text-black flex flex-col items-center justify-center">
                <h3 class="font-bold lg:text-5xl md:text-3xl text-2xl">Serviços</h3>
                
                <card-slider></card-slider>
            </div>
        </div>
    </section>
    -->
    <!--VIDEO
    <section id="video" class="  mx-auto relative bg-white px-5 py-10 lg:py-14">
        <div class="w-full flex flex-col max-w-7xl mx-auto">
            <div class="text-black flex flex-col items-center justify-center px-5">
                <h3 class="font-bold text-5xl">Vídeos</h3>
            </div>

            <div class="text-black flex flex-col items-center justify-center pt-6">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe class="w-full xl:w-[1200px] min-h-[90vh]" src="https://www.youtube.com/embed/U0Qx8vNAX1Q?si=HmIkln3RWb0JXwv0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="flex flex-col items-center justify-center pt-8">
                    <a href="#Button"
                        class="bg-yellow-hoch text-center text-black self-start md:px-12 md:py-5 px-8 py-2 font-medium md:text-xl md:font-semibold w-full md:w-auto rounded-sm">
                        Ver mais
                    </a>
                </div>
            </div>
        </div>
    </section>
    -->
    <!--CONTATO-->
    <section id="contato" class="  mx-auto flex flex-col justify-center items-center bg-blur-black-double bg-center lg:py-12 py-6">
        <div class="w-full flex flex-col justify-center items-center">
            <div class="text-white flex flex-col items-center text-center justify-center px-5">
                <h3 class="font-bold lg:text-5xl text-3xl custom-xrs' flex items-center gap-4 flex-wrap justify-center">Vamos nos conectar no <img src="/resources/src/images/linke.png">
                </h3>
            </div>

            <div class="md:w-8/12 w-full text-white flex flex-col text-center items-center justify-center pt-10">
                <p>
                    Vamos juntos em uma jornada rumo à troca de conhecimento e insights? Como especialista em Marketing, Vendas e Negociação, compartilho ideias, tendências e experiências valiosas que podem transformar sua abordagem e impulsionar seu sucesso.
                </p>

                <div class="flex flex-col items-center justify-center pt-6 main-button--custom">
                    <a href="https://www.linkedin.com/in/hugohoch/" target="_blank"
                        class="hover:scale-110 hover:opacity-50 bg-yellow-hoch text-center text-black self-start lg:px-10 lg:py-4 md:px-8 px-6 py-3 w-full  rounded-sm">
                        QUERO CONECTAR COM HUGO
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--BLOG-->
    <section class="  mx-auto flex justify-center items-center py-10 lg:py-14">
        <div class="w-screen flex flex-col">
            <div class="text-white flex flex-col items-center justify-center px-5 py-6">
                <h3 class="font-bold text-4xl text-black">BLOG</h3>

                <div class="w-full h-full flex flex-row justify-center items-center">
                    <blog-cards-display :is-recent-posts="true" class="py-24"></blog-cards-display>
                </div>

                <router-link to="/blog" class="bg-yellow-hoch px-10 py-4 uppercase text-black font-bold hover:scale-110 hover:opacity-50">VER MAIS</router-link>
            </div>
        </div>
    </section>

    <section class="  mx-auto relative bg-yellow-hoch px-5 lg:py-12 py-8">
        <div class="w-full flex flex-col max-w-7xl mx-auto">
            <div class="text-black flex flex-col items-center justify-center lg:px-5 px-0">
                <h3 class="flex items-center justify-center hanglouse pp:flex-wrap font-bold lg:text-5xl md:text-3xl text-xl text-color-cinza gap-4 ">Vem comigo que eu vou te ajudar! <p ref="emoji" class="emoji"> 🤟🏻</p></h3>
            </div>
        </div>
    </section>


    <default-footer></default-footer>
</template>

<script>
import CompaniesCard from '../Components/CompaniesCard.vue'
import DefaultFooter from '../Components/DefaultFooter.vue'
import BlogCardsDisplay from '../Components/BlogCardsDisplay.vue'
import DefaultHeader from '../Components/DefaultHeader.vue'
import CardSlider from '../Components/Utils/CardSlider.vue'

export default {
    components: {
        CompaniesCard,
        DefaultFooter,
        BlogCardsDisplay,
        DefaultHeader,
        CardSlider
    },
     mounted() {
    this.$refs.emoji.classList.add('pulse-animation');
  }
}
</script>

<style>
  @keyframes pulse {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.2);
    }
    100% {
      transform: scale(1);
    }
  }

  .pulse-animation {
    animation: pulse 1s infinite;
  }
</style>