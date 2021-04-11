<template>
  <div id="app">

       <router-view></router-view>
     
  </div>
</template>

<script>

export default {
  components: {  },
  data: () => ({
    drawer: null
  }),
  props: ["user"]
};
</script>

<style>
  @import './app.css';
</style>