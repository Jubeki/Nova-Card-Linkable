Nova.booting((Vue, router, store) => {
    Vue.component('card-heading', require('./components/CardHeading'))
    Vue.component('card-linkable', require('./components/CardLinkable'))
    Vue.component('card-linkable-away', require('./components/CardLinkableAway'))
    Vue.component('card-linkable-router', require('./components/CardLinkableRouter'))
})
