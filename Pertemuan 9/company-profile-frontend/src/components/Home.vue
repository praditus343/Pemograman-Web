<template>
   <div class="container">
     <h1>Welcome to {{ profile.name }}</h1>
     <p>{{ profile.description }}</p>
   </div>
 </template>
 
 <script>
 /* eslint-disable */
 import axios from 'axios';
 
 export default {
   name: 'Home',
   data() {
     return {
       profile: {
         name: '',
         description: ''
       }
     };
   },
   created() {
     this.fetchProfile();
   },
   methods: {
     async fetchProfile() {
       try {
         const response = await axios.get('http://localhost:3000/profile');
         this.profile = response.data;
       } catch (error) {
         console.log(error);
       }
     }
   }
 };
 </script>
 
 <style scoped>
 .container {
   background-color: #f5f5f5; /* Warna latar belakang */
   padding: 20px;
   border-radius: 8px;
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
   max-width: 600px;
   margin: 0 auto;
   text-align: center;
 }
 
 h1 {
   color: #42b983;
   font-size: 24px;
   margin-bottom: 16px;
 }
 
 p {
   color: #2c3e50;
   font-size: 16px;
 }
 </style>
 