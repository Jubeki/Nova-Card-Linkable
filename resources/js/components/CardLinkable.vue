<template>
    <router-link tag="a" :to="this.card.url" class="cursor-pointer no-underline">
        <CardHeading :title="this.card.title" :subtitle="this.card.subtitle" :theme="this.card.theme" />
    </router-link>
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
