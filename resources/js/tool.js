import CardLinkable from './components/CardLinkable.vue'
import CardLinkableAway from './components/CardLinkableAway.vue'

Nova.booting((Vue) => {
    Vue.component('CardLinkable', CardLinkable)
    Vue.component('CardLinkableAway', CardLinkableAway)
})
