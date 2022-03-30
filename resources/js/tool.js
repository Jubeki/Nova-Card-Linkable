import CardLinkable from './components/CardLinkable.vue'
import CardLinkableAway from './components/CardLinkableAway.vue'
import CardLinkableRouter from './components/CardLinkableRouter.vue'

Nova.booting((Vue) => {
    Vue.component('CardLinkable', CardLinkable)
    Vue.component('CardLinkableAway', CardLinkableAway)
    Vue.component('CardLinkableRouter', CardLinkableRouter)
})
