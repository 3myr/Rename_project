<template>
  <div class="row flex-grow-1 justify-content-center">
    <div class="row panel align-self-center">
        <div class="panel-left col-3 bg-secondary rounded-left d-flex flex-column gap-3" style="height: 100%;">
          <form class="form-group">
            <div class="d-flex flex-column gap-5">
              <div>
                <label for="poids" class="text-white">POIDS</label>
                <input type="text" class="form-control" id="poids" placeholder="Votre poids">
              </div>

              <div>
                <label for="taille" class="text-white">TAILLE</label>
                <input type="text" class="form-control" id="taille" placeholder="Votre taille">
              </div>

              <div>
                <label for="age" class="text-white">AGE</label>
                <input type="text" class="form-control" id="age" placeholder="Votre Age">
              </div>

              <div>
                <label class="text-white">GENRE</label><br>
                <input type="radio" name="genre" value="homme" id="homme">
                <label class="text-white" for="homme">Homme</label>

                <input type="radio" name="genre" value="femme" id="femme">
                <label class="text-white" for="femme">Femme</label>
              </div>

            </div>
          </form>

          <div class="separator"></div>

          <div class="text-center text-white">
            <h5>DEPENSE ENERGETIQUE</h5>
            <h2><b>3202,7 kcal/j</b></h2>
          </div>


        </div>
        <div class="col-9 bg-light rounded-right" style="height: 100%;">

        </div>

    </div>
  </div>
</template>

<script>
   export default {
       name: "panel"
   }
</script>

<style>
.panel{
  width: 70%;
  height: 85%;
  background-color: red;
  padding: 0;
  border-radius: 25px;
}

.panel-left{
  padding:3%;
}

.rounded-left{
  border-radius: 25px 0 0 25px;
}

.rounded-right{
  border-radius: 0 25px 25px 0;
}

.separator{
  border: 2px solid #FFFFFF;
  border-radius: 90px;
}


</style>