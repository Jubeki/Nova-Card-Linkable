<template>
    <card class="flex flex-col items-center justify-center p-6" :class="this.style">
        <h1 class="text-3xl font-light" v-text="this.title"></h1>
        <h2 class="text-base font-light" v-text="this.subtitle"></h2>
    </card>
</template>

<script>
export default {
    props: ['title', 'subtitle', 'theme', 'hover'],
    computed: {
        style() {
            return [
                this.theme.background,
                this.theme.text,
                'hover:' + this.hover.background,
                'hover:' + this.hover.text,
            ]
        }
    }
}
</script>
