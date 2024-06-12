<template>
  <div id="app">
    <nav>
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link> |
      <router-link to="/services">Services</router-link>
    </nav>
    <router-view/>
  </div>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  background-color: #f9f9f9; /* Latar belakang halaman */
  padding: 20px;
}

nav {
  background-color: #fff; /* Warna latar belakang navigasi */
  border-radius: 8px; /* Sudut melengkung */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan */
  padding: 20px;
  margin-bottom: 20px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
  text-decoration: none;
  padding: 10px 20px;
  transition: color 0.3s ease, background-color 0.3s ease;
  border-radius: 4px;
}

nav a:hover {
  background-color: #42b983; /* Latar belakang saat hover */
  color: #fff; /* Warna teks saat hover */
}

nav a.router-link-exact-active {
  color: #42b983;
  border-bottom: 2px solid #42b983; /* Garis bawah untuk link aktif */
}

</style>
