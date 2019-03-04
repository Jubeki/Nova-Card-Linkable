<template>
    <router-link tag="a" :to="this.url" class="cursor-pointer no-underline">
        <card-heading :title="this.title" :subtitle="this.subtitle" :theme="theme" :hover="hover"></card-heading>
    </router-link>
</template>

<script>
export default {
    props: ['card'],

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
