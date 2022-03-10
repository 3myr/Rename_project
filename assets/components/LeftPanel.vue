<template>
    <div class="panel-left d-flex flex-column gap-5">
      <form class="form-group">
        <div class="d-flex flex-column gap-5">
          <div>
            <label for="poids" class="text-white" style="font-size: 24px">POIDS</label>
            <input type="text" class="form-control" id="poids" placeholder="Votre poids ( en kg )">
          </div>

          <div>
            <label for="taille" class="text-white" style="font-size: 24px">TAILLE</label>
            <input type="text" class="form-control" id="taille" placeholder="Votre taille ( en cm )">
          </div>

          <div>
            <label for="age" class="text-white" style="font-size: 24px">AGE</label>
            <input type="text" class="form-control" id="age" placeholder="Votre Age">
          </div>

          <div>
            <label class="text-white" style="font-size: 24px">GENRE</label><br>
            <div  class="d-flex flex-row gap-4 align-items-center">
              <div>
                <input type="radio" name="genre" value="homme" id="homme" checked>
                <label class="text-white" for="homme" style="font-size: 18px">Homme</label>
              </div>

              <div>
                <input type="radio" name="genre" value="femme" id="femme">
                <label class="text-white" for="femme" style="font-size: 18px">Femme</label>
              </div>
            </div>

          </div>
        </div>
      </form>

      <div class="separator"></div>

      <div class="text-center text-white d-flex flex-column h-100 align-items-center justify-content-center">
        <h5>DEPENSE ENERGETIQUE</h5>
        <h2><b>3202,7 kcal/j</b></h2>
      </div>


    </div>
</template>

<script>
export default {
  name: "leftpanel",
  data: () => ({
    poids: 0,
    taille: 0,
    age: 0,
    gender: true,
    kcalPerJ: 0
  }),
  mounted() {
    this.$root.$on('updateValues', function(activites) {
        // Mettre a jour les valeurs
      })
    }
}
</script>

<style>

.panel-left{
  padding:5% 3% 5% 3%;
}
.separator{
  border: 2px solid #FFFFFF;
  border-radius: 90px;
}

input[type="radio"]{
  accent-color:#002D37;
}

</style>