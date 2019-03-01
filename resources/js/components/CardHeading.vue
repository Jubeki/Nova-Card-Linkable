<template>
    <card class="flex flex-col items-center justify-center hover:bg-50 p-6">
        <h1 class="text-3xl font-light" v-text="this.title"></h1>
        <h2 class="text-base font-light" v-text="this.subtitle"></h2>
    </card>
</template>

<script>
export default {
    props: ['title', 'subtitle']
}
</script>
