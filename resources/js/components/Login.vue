<template>
    <div>
      <div class="limiter">
        <div class="container-login100" style="margin-top: -80px;">
          <div class="wrap-login100 p-t-85 p-b-20">
            <form class="login100-form validate-form" @submit.prevent="login">
              <span class="login100-form-title p-b-70"></span>
              <span class="login100-form-avatar">
                <img src="/resources/images/logo.jpg" alt="logo">
              </span>
              <div v-if="error" id="error-message">{{ error }}</div>
              <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter username">
                <input v-model="username" class="input100" type="text" name="username">
                <span class="focus-input100" data-placeholder="Username"></span>
              </div>
  
              <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                <input v-model="password" class="input100" type="password" name="password">
                <span class="focus-input100" data-placeholder="Password"></span>
              </div>
  
              <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                  <input style="color:white" class="button" type="submit" value="Login" tabindex="3">
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
  
      <div id="dropDownSelect1"></div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        username: '',
        password: '',
        error: null,
      };
    },
    methods: {
      login() {
      },
    },
  };
  </script>
  
  <style scoped>

  </style>
  