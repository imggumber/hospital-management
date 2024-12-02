<template>
  <div class="container form-container d-flex justify-content-center align-items-center">
    <div class="container-content w-25">
      <LoginForm/>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import LoginForm from '../Components/LoginForm.vue';

// Define a ref to store the response data
const response = ref(null);

// Define the function that triggers the GET request
const triggerEndpoint = async () => {
  try {
    // Make the GET request to the API endpoint
    const res = await axios.get('/api/test-me');

    // Store the response data in the ref
    response.value = res.data;
  } catch (error) {
    console.error('Error fetching data:', error);
    // Handle error as needed
  }
};
</script>

<style scoped>
/* Add any necessary styles here */
</style>
