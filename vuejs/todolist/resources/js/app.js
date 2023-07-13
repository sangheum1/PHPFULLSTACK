require('./bootstrap');

import { createApp } from 'vue';
import App from './vue/App.vue';
import todo from './todo.js'

// createApp(App)는 App.vue를 index.html 에서 id가 app 인 곳에 마운트
createApp(App).use(todo).mount('#app');