<template>
 <div class="add-admin-form">
    <h2>Ajouter un admin</h2>
    <!-- Formulaire d'ajout d'admin -->
    <form @submit.prevent="addAdmin">
      <div class="form-group">
        <label>CIN</label>
        <input type="text" v-model="cin" required>
      </div>
      <div class="form-group">
        <label>Nom</label>
        <input type="text" v-model="nom" required>
      </div>
      <div class="form-group">
        <label>Prénom</label>
        <input type="text" v-model="prenom" required>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" v-model="email" required>
      </div>
      <div class="form-group">
        <label>Mot de passe</label>
        <input type="password" v-model="password" required>
      </div>
      <div class="form-group">
        <label>Numéro de téléphone</label>
        <input type="text" v-model="numero_telephone" required>
      </div>
      <div class="form-group">
        <label>Rôle</label>
        <input type="text" v-model="role" required>
      </div>
      <button class="submit-button" type="submit">Ajouter</button>
    </form>
  </div>
  <button class="submit-button" type="submit">Sign In</button>
  </template>
  
  <script>
  import axios from 'axios';
  import { API_URL } from '../config.js';
  
  export default {
    data() {
      return {
        cin: '',
        nom: '',
        prenom: '',
        email: '',
        password: '',
        numero_telephone: '',
        role: '',
      };
    },
    methods: {
      addAdmin() {
        const adminData = {
          cin: this.cin,
          nom: this.nom,
          prenom: this.prenom,
          email: this.email,
          password: this.password,
          numero_telephone: this.numero_telephone,
          role: this.role,
        };
  
        axios.post(`${API_URL}/api/admins/store`, adminData)
          .then(response => {
            console.log(response.data);
          })
          .catch(error => {
            // Gestion de l'erreur
            console.log(error);
          });
      },
    },
  };
  </script>
  
  <style scoped>
.add-admin-form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.form-group {
  margin-bottom: 20px;
  width: 300px;
}

label {
  font-weight: bold;
}

input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.submit-button {
  padding: 10px 20px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.submit-button:hover {
  background-color: #45a049;
}
</style>
  