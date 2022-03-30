<template>
    <a :href="this.url" :target="this.target" class="cursor-pointer no-underline">
        <CardHeading :title="this.title" :subtitle="this.subtitle" :theme="theme" :hover="hover"></CardHeading>
    </a>
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
            return this.card.url
        },
        title() {
            return this.card.title
        },
        subtitle() {
            return this.card.subtitle
        },
        target() {
            return this.card.target
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
