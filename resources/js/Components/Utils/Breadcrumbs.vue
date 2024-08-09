<template>
    <div class="relative margin-bottom-custom7 flex flex-row justify-start items-start text-1xl w-full">
        <router-link to="/" class="underline"> Home </router-link>

        <li class="list-none" v-for="(breadcrumb, index) in breadcrumbs" :key="breadcrumb.slug"> 
            <span class="px-2"> &gt; </span> 
            
            <router-link v-if="isTheLast(index)" :to="getBreadcrumbRoute(breadcrumb.slug)">
                {{ truncateText(breadcrumb.title, 50) }}
            </router-link>
            
            <span v-else>{{ truncateText(breadcrumb.title, 50) }}</span>
        </li>
    </div>
</template>

<script>
export default {
    props: {
        breadcrumbs: {
            type: Array,
            required: true,
            default: () => []
        }
    },

    data() {
        return { 
            breadcrumbRoute: "/",
        }
    },

    methods: {
        getBreadcrumbRoute(slug) {
            return this.breadcrumbRoute + slug + "/";
        },
        truncateText(text, length) {
            return text.length > length ? text.substring(0, length) + '...' : text;
        },
                
        isTheLast(index) {
            return index < (this.breadcrumbs.length - 1);
        }
    }
}
</script>
