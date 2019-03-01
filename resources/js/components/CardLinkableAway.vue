<template>
    <a :href="this.url" :target="this.target" class="cursor-pointer no-underline text-80">
        <card-heading :title="this.title" :subtitle="this.subtitle"></card-heading>
    </a>
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
        },
        target() {
            return this.card.target
        }
    },
}
</script>
