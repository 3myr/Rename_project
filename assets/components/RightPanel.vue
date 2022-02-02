<template>
    <div class="panel-right d-flex flex-column gap-2">

      <!-- Titre -->
      <div class="title d-flex flex-column gap-3">
        <h3><b>VOS ACTIVITES</b></h3>

        <!-- Separateurs -->
        <div>
          <div class="separator-grey"></div>

          <div class="separator-bold"></div>
        </div>

      </div>


      <!-- Table -->
      <CustomTable class="customTableau row"></CustomTable>
      <!--          -->

      <!-- Ajouter activité + separateur + récap -->
      <div class="d-flex flex-column mt-auto footer gap-3">
        <button class="form-control text-left d-flex flex-row justify-content-between align-items-center" onclick="console.log('Ouvrir Modale');">
          <span class="text-grey">Ajouter une nouvelle activité</span>
          <span class="text-primary" style="font-weight: bold; font-size: 20px;">+</span>
        </button>

        <div class="separator-grey"></div>

        <div class="d-flex flex-row justify-content-center gap-5">
          <div class="d-flex flex-column align-items-center">
            <h5 class="text-primary"><b>35,5</b></h5>
            <h6>METs/j</h6>
          </div>
          <div class="d-flex flex-column align-items-center">
            <h5 class="text-primary"><b>41,2</b></h5>
            <h6>METs/j</h6>
          </div>
          <div class="d-flex flex-column align-items-center">
            <h5 class="text-primary"><b>1583,2</b></h5>
            <h6>kcal/j</h6>
          </div>
        </div>

      </div>
    </div>
</template>

<script>
import CustomTable from "./CustomTable";
export default {
  name: "rightpanel",
  components: {CustomTable}
}
</script>

<style>

.panel-right{
  padding:5% 3% 2% 3%;
  height: 100%;
}

.separator-bold{
  border: 3px solid #032436;
  border-radius: 90px;
  width: 30%;
  position: relative;
  top: calc(-6px); /* Taille  */
}

.separator-grey{
  border: 2px solid #CFCFCF;
  border-radius: 90px;
}

.separators{
  height: 5%;
}

.title{
  height: 15%;
}

.customTableau{
  height: 60%;
}

.footer{
  height: 20%;
}

.text-primary{
  color: #689D9A !important;
}

.text-left {
  text-align: left !important;
}

.text-grey{
  color: #a8a8a8 !important;
}

</style>