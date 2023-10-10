// dependencies
import './bootstrap';
import { createApp } from 'vue';

// create Vue Application Instance (app):
const app = createApp({});

// import and register vue components
import FileUpload from './components/FileUpload.vue';
app.component('file-upload', FileUpload);

import FileUploadHistory from './components/FileUploadHistory.vue';
app.component('file-upload-history', FileUploadHistory);

// mount the Vue application to a DOM element
app.mount('#app');
