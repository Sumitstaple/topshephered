<template>
  <div id="app">
   <div class="container-fluid">
  		<div class="row content">

  			<sidebar></sidebar>
	  	   <div class="col-sm-9">
	       		<navbar :user="user"></navbar>	

	       		<router-view></router-view>


	       </div>
   		</div>
   <footer class="container-fluid">
  <p>Footer Text</p>
</footer>
   </div>  
  </div>
</template>


<script>
import Sidebar from "./_sidebar";
import Navbar from "./_navbar";

export default {
  components: { Sidebar, Navbar },
  data: () => ({
    drawer: null
  }),
  props: ["user"]
};
</script>

<style>
  @import './app.css';
  @import './app.sass';
</style>