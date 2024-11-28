import "./bootstrap";
import router from "./router";
import { createApp } from "vue";
import vuetify from "./vuetify";

import App from "./App.vue";

createApp(App).use(router).use(vuetify).mount("#app");
