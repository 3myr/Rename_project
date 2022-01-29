<template>
   <div class="container-fluid vh-100 d-flex flex-column bg-primary bg-info">
     <NavBar></NavBar>
     <Panel></Panel>
   </div>
</template>

<script>
  import NavBar from "./NavBar"
  import Panel from "./Panel"

   export default {
     name: "app",
     components:{
       'NavBar':NavBar,
       'Panel':Panel
     }
   }
</script>

<style>
.bg-primary
{
  background-color: #002D37 !important;
}

.bg-secondary{
  background-color: #689D9A !important;
}

</style>