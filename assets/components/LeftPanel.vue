<template>
    <div class="panel-left d-flex flex-column gap-5">
      <form class="form-group">
        <div class="d-flex flex-column gap-5">
          <div>
            <label for="poids" class="text-white" style="font-size: 24px">POIDS</label>
            <input type="text" class="form-control" id="poids" @keyup="updatePoids" placeholder="Votre poids ( en kg )">
          </div>

          <div>
            <label for="taille" class="text-white" style="font-size: 24px">TAILLE</label>
            <input type="text" class="form-control" id="taille" @keyup="updateTaille" placeholder="Votre taille ( en cm )">
          </div>

          <div>
            <label for="age" class="text-white" style="font-size: 24px">AGE</label>
            <input type="text" class="form-control" id="age" @keyup="updateAge" placeholder="Votre Age">
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
        <h2><b>{{ this.kcalPerJ }} kcal/j</b></h2>
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
  },
  methods : {
    updatePoids()
    {
      this.poids = parseInt(document.getElementById('poids').value) || 0;
      this.updateKcal();
    },

    updateTaille(){
      this.taille = parseInt(document.getElementById('taille').value) || 0;
      this.updateKcal();
    },

    updateAge()
    {
      this.age = parseInt(document.getElementById('age').value) || 0;
      this.updateKcal();
    },

    updateKcal()
    {
      this.kcalPerJ = this.poids+this.taille+this.age;

      // Met a jour la valeur du métabolisme de base
      this.$root.$emit('updateKcal', this.kcalPerJ);
    }
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