<template>
    <router-link tag="a" :to="this.url" class="cursor-pointer no-underline">
        <CardHeading :title="this.title" :subtitle="this.subtitle" :theme="theme" :hover="hover"></CardHeading>
    </router-link>
</template>

<script>
import CardHeading from './CardHeading.vue'

export default {
    props: ['card'],

    components: {
        CardHeading,
    },

    computed: {
        url() {
            return JSON.parse(this.card.url);
        },
        title() {
            return this.card.title
        },
        subtitle() {
            return this.card.subtitle
        },
        theme() {
            return this.card.theme
        },
        hover() {
            return this.card.hover
        },
    },
}
</script>
