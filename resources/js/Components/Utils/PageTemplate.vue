<template>
  <default-header></default-header>

  <div>
    <div
      :class="{
        'margin-top-custom bg-cover bg-center min-h-[30vh] flex justify-center items-center': true,
        'bg-page-banner bg-no-repeat': title === 'Blog' || title === 'Contato'
      }"
    >
      <div class="w-full min-h-[37vh] flex justify-center items-center">
        <div class="xl:w-[80%] w-11/12">
          <breadcrumbs :breadcrumbs="breadcrumbs"></breadcrumbs>
          
          <div class="w-full min-h-[25vh] pt-4 flex flex-col justify-center items-center text-left pb-5">
            <div class="text-5xl md:text-4xl font-semibold custom-titleTop"> 
                {{ title }}
          </div>
        </div>
        </div>
      </div>
    </div>

    <slot></slot>
  </div>
</template>

<script>
import Breadcrumbs from './Breadcrumbs.vue'

export default {
  components: {
    Breadcrumbs,
  },
  props: {
    title: {
      type: String,
      required: true,
      default: ""
    },
    breadcrumbs: {
      type: Array,
      required: true,
      default: () => []
    },
  }
}
</script>
