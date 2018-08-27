Nova.booting((Vue, router) => {
    Vue.component('index-address_autocomplete', require('./components/IndexField'));
    Vue.component('detail-address_autocomplete', require('./components/DetailField'));
    Vue.component('form-address_autocomplete', require('./components/FormField'));
})
