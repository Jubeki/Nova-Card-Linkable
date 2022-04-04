<template>
    <Link :href="this.card.url" class="cursor-pointer no-underline">
        <CardHeading :title="this.card.title" :subtitle="this.card.subtitle" :theme="this.card.theme" />
    </Link>
</template>

<script>
import CardHeading from './CardHeading.vue'
import { Link } from '@inertiajs/inertia-vue3'

export default {
    props: ['card'],

    components: {
        CardHeading,
        Link,
    },
}
</script>
