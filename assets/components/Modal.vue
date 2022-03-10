<template>
  <!-- Modal -->
  <div class="modal fade" href="addActivityModal" id="addActivityModal" tabindex="-1" role="dialog" aria-labelledby="addActivityModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content rounded no-border">
        <div class="modal-header text-center">
          <h2 class="modal-title w-100">Ajouter une Activité</h2>
          <button type="button" id="modal-btn-close" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="modal-body form-group" id="addActivityForm" v-on:submit.prevent="onSubmit">
          <div class="d-flex flex-column gap-2">
            <div>
              <label>Catégorie</label>
              <select name="categorie" class="form-select" aria-label="Default select example" size="1" v-model="categorie">
                <option selected disabled>Choisissez le nom de votre activité</option>
                <!-- TODO Utiliser les données du controler à partir de la BDD -->
                <optgroup label="Sports">
                  <option value="Course">Course</option>
                  <option value="Musculation">Musculation</option>
                </optgroup>
                <optgroup label="Activite">
                  <option value="Rien">Rien</option>
                </optgroup>
                <!--  -->
              </select>
            </div>

            <div>
              <label>Nom</label>
              <select name="nom" class="form-select" aria-label="Default select example" size="1" v-model="nom">
                <option selected disabled>Choisissez le nom de votre activité</option>
                <!-- TODO Utiliser les données du controler à partir de la BDD -->
                <optgroup label="Sports">
                  <option value="Course">Course</option>
                  <option value="Musculation">Musculation</option>
                </optgroup>
                <optgroup label="Activite">
                  <option value="Rien">Rien</option>
                </optgroup>
                <!--  -->
              </select>
            </div>

            <div>
              <label>Durée</label>
              <input name="duree" type="time" class="form-control w-25" v-model="duree"/>
            </div>
          </div>
        </form>

        <div class="modal-footer justify-content-center">
          <button type="submit" form="addActivityForm" class="btn btn-primary" >Ajouter</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: "Modal",
  data: () => ({
    add: false,
    categorie: "",
    nom: "",
    duree: ""
  }),

  mounted() {
    $('#addActivityModal').on('hidden.bs.modal', this.hideModal);
  },

  methods: {
    hideModal()
    {
      if(this.add === true)
      {
        document.getElementById("addActivityForm").reset();
        this.add = false;
      }

      this.resetParam();
    },

    onSubmit: function ()
    {
      let body = {
        categorie: this.categorie,
        nom: this.nom,
        duree: this.duree,
      };

      axios.create().post('api/activites/addActivites', body).then((response) => {
        this.$root.$emit('updateActivity', response.data);
      })

      this.add = true;

      document.getElementById("modal-btn-close").click();
    },

    resetParam()
    {
      this.nom = ""
      this.duree = ""
      this.categorie = ""
    }
  }
}
</script>

<style scoped>
.close{
  border: none;
  background-color: transparent;
  font-size: 32px;
  color: grey;
}

.close:hover{
  color: black;
}

.rounded{
  border-radius: 15px !important;
}

.no-border{
  border: 0 !important;
}
</style>