<template>
    <div class="service-card-bg">
        <div :class="iconClass">
            <img :src="service.icon" alt="Icon" class="w-full h-[100%] ">
        </div>
        <div class="service-card-title"> 
            <h3 class="text-xl font-bold"> {{ service.title }} </h3>
        </div>
        <div class="service-card-description justify-center">
            <p class="text-xl">
                {{ service.content }}
            </p>
            <img class="imagem-logo-custom" :src="service.imageicon" alt="Logo" v-if="shouldShowImage">
        </div>
    </div> 
</template>

<script>
export default {
    props: {
        service: {
            type: Object,
            required: true,
            default: () => {}
        },
        iconClass: {
            type: String,
            default: 'w-28 h-28'
        },
    },
    data() {
        return {
            shouldShowImage: true // Defina a lógica para decidir quando mostrar a imagem
        };
    },
    mounted() {
        // Verificar a largura da tela e atualizar shouldShowImage conforme necessário
        window.addEventListener('resize', this.updateImageVisibility);
        this.updateImageVisibility();
    },
    destroyed() {
        window.removeEventListener('resize', this.updateImageVisibility);
    },
    methods: {
        updateImageVisibility() {
            this.shouldShowImage = window.innerWidth > 768; // Exemplo: mostrar apenas em telas maiores que 768px
        }
    }
}
</script>
