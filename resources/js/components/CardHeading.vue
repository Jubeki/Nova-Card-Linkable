<template>
    <Card :class="this.theme.layout + ' ' + this.theme.colors">
        <h1 :class="this.theme.title" v-text="this.title"></h1>
        <p :class="this.theme.subtitle" v-text="this.subtitle"></p>
    </Card>
</template>

<script>
export default {
    props: ['title', 'subtitle', 'theme'],
}
</script>
