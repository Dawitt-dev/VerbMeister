import './bootstrap';
import Quiz from './Components/Quiz.vue';

import Alpine from 'alpinejs';

const app = createApp({});
app.component('quiz', Quiz);
app.mount('#app');

window.Alpine = Alpine;

Alpine.start();
