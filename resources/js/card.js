Nova.booting((Vue, router, store) => {
    Vue.component('card-heading', require('./components/CardHeading').default)
    Vue.component('card-linkable', require('./components/CardLinkable').default)
    Vue.component('card-linkable-away', require('./components/CardLinkableAway').default)
    Vue.component('card-linkable-router', require('./components/CardLinkableRouter').default)
})
