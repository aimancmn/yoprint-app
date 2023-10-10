<template>
    <div>
        <form @submit.prevent="uploadFile">
            <div class="mb-3">
                <label for="file" class="form-label">File:</label>
                <input class="form-control" type="file" id="file" ref="fileInput" @change="handleFileChange" required/>
            </div>
            <button type="submit" class="btn btn-primary">Upload File</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            file: null
        };
    },
    methods: {
        async uploadFile() {
            try {
                // create a FormData object to send the file and append the file to the FormData
                const formData = new FormData();
                formData.append('file', this.file); //

                // Make a POST request with Axios to upload the file.
                // Set the content type for file upload
                await axios.post('/api/file/upload', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                },
                });

                this.$router.push('/');
            } catch (error) {
                console.error(error);
            }
        },
        handleFileChange(event) {
            // Capture the selected file from the input
            this.file = event.target.files[0];
        }
    }
};
</script>
