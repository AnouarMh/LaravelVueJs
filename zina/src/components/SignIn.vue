<template>
    <div class="signin-container">
      <h2>Connexion</h2>
      <form @submit="signIn">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" v-model="email" required>
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" id="password" v-model="password" required>
        </div>
        <button type="submit">Se connecter</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  export default {
    data() {
      return {
        email: '',
        password: '',
      };
    },
    methods: {
      signIn(event) {
        event.preventDefault();
  
        // Envoyer la requête de connexion à l'API
        axios.post('/api/admin/signin', {
          email: this.email,
          password: this.password,
        })
          .then(response => {
            // Stocker le token d'API dans le stockage local
            const token = response.data.token;
            localStorage.setItem('admin_token', token);
  
            // Rediriger vers la page d'accueil ou une autre page appropriée
            this.$router.push('/');
          })
          .catch(error => {
            // Afficher une erreur en cas d'échec de la connexion
            console.error(error);
          });
      },
    },
  };
  </script>
  
  <style>
  .signin-container {
    max-width: 400px;
    margin: 0 auto;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  label {
    display: block;
  }
  
  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 8px;
  }
  </style>
  