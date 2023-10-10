<template>
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Time</th>
                <th scope="col">File Name</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                <tr v-for="file in files" :key="file.id">
                    <td>{{ file.id }}</td>
                    <td>{{ dateTimeFormat(file.created_at) }}</td>
                    <td>{{ file.name }}</td>
                    <td>{{ file.status }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      files: []
    }
  },
  async created() {
    try {
      const response = await axios.get('/api/file/history');
      this.files = response.data;
    } catch (error) {
      console.error(error);
    }
  },
  methods: {
    dateTimeFormat(dateTimeValue) {

    }
  }
}
</script>
