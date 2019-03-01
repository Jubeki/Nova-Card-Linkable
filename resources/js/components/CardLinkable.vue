<template>
    <router-link tag="a" :to="this.url" class="cursor-pointer no-underline text-80">
        <card-heading :title="this.title" :subtitle="this.subtitle"></card-heading>
    </router-link>
</template>

<script>
export default {
    props: ['card'],

    computed: {
        url() {
            return this.card.url
        },
        title() {
            return this.card.title
        },
        subtitle() {
            return this.card.subtitle
        }
    },
}
</script>
