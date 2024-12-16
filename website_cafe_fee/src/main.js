import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import Default from './layout/wrapper/master.vue'
import Blank from './layout/wrapper/blank.vue'
import Toaster from "@meforma/vue-toaster";
import Client from './layout/wrapper/client.vue'


const app = createApp(App)
app.use(Toaster, {
    position: "top-right",
  });
app.use(router)
app.component("default-layout", Default);
app.component("blank", Blank);
app.component("client-layout", Client);



app.mount("#app")
