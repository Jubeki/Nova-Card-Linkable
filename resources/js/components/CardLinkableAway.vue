<template>
    <a :href="this.card.url" :target="this.card.target" class="cursor-pointer no-underline">
        <CardHeading :title="this.card.title" :subtitle="this.card.subtitle" :theme="this.card.theme" />
    </a>
</template>

<script>
import CardHeading from './CardHeading.vue'

export default {
    props: ['card'],

    components: {
        CardHeading,
    },
}
</script>
