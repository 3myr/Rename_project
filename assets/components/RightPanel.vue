<template>
    <div class="panel-right d-flex flex-column gap-3">

      <div>
        <h3><b>VOS ACTIVITES</b></h3>
      </div>

      <div class="separator-grey"></div>

      <div class="separator-bold"></div>

      <!-- Table -->
      <table class="table">
            <thead>
            <tr class="text-primary">
              <th scope="col" class="w-50 sticky-top">Activité</th>
              <th scope="col" class="sticky-top">Durée</th>
              <th scope="col" class="sticky-top">MET<span style="font-size: 11px">(moyen)</span></th>
              <th scope="col" class="sticky-top">MET<span style="font-size: 11px">(réél)</span></th>
              <th scope="col" class="sticky-top">Calorie</th>
            </tr>
            </thead>
            <tbody style="overflow: auto">
            <tr>
              <th scope="row">bicycling, stationary, general</th>
              <td class="text-center">08:00</td>
              <td class="text-center">7,5</td>
              <td class="text-center">8,0</td>
              <td class="text-center">175,2</td>
              <td class="text-left"><button class="btn-delete">X</button></td>
            </tr>

            <tr>
              <th scope="row">bicycling, stationary, general</th>
              <td class="text-center">08:00</td>
              <td class="text-center">7,5</td>
              <td class="text-center">8,0</td>
              <td class="text-center">175,2</td>
              <td><button class="btn-delete">X</button></td>
            </tr>

            <tr>
              <th scope="row">bicycling, stationary, general</th>
              <td class="text-center">08:00</td>
              <td class="text-center">7,5</td>
              <td class="text-center">8,0</td>
              <td class="text-center">175,2</td>
              <td><button class="btn-delete">X</button></td>
            </tr>

            </tbody>
          </table>
      <!--          -->

      <div class="d-flex flex-column gap-3 mt-auto">
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
export default {
  name: "rightpanel"
}
</script>

<style>

.panel-right{
  padding:5% 3% 2% 3%;
}

.separator-bold{
  border: 3px solid #032436;
  border-radius: 90px;
  width: 30%;
  position: relative;
  top: calc(-1.5rem + 2px); /* Taille  */
}

.separator-grey{
  border: 2px solid #CFCFCF;
  border-radius: 90px;
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

.btn-delete
{
  border: none;
  background: none;
  color: red;
  font-weight: bold;
}

</style>