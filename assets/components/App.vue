<template>
   <div class="container-fluid vh-100 d-flex flex-column bg-primary bg-info">
     <NavBar></NavBar>

     <div class="row flex-grow-1 justify-content-center">
       <Panel class="h-85 w-70"></Panel>
     </div>
   </div>
</template>

<script>
  import NavBar from "./NavBar"
  import Panel from "./Panel"

   export default {
     name: "app",
     components:{
       NavBar,
       Panel
     }
   }
</script>

<style>
.bg-primary
{
  background: linear-gradient(350deg, rgba(242,242,242,1) 50%, rgba(0,45,55,1) 50.15%); /* Commence le deuxième à +0.15 pour enlever l'effet d'aliasing */
}

.w-70{
  width: 70% !important;
}

.h-85{
  height: 85% !important;
}

</style>