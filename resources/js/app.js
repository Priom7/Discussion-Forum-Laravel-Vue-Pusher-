require("./bootstrap");

window.Vue = require("vue");

import Vuetify from "../plugins/vuetify";
Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

// Vue.component("app-home", require("./components/AppHome.vue").default);

const app = new Vue({
    vuetify: Vuetify,
    el: "#app"
});
