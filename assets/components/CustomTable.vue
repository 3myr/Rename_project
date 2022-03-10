<template>
  <!-- TODO Revoir le css car si le tableau est trop rempli, il agrandi le Panneau -->
    <table class="table h-100" id="tableau">
      <thead class="text-primary" id="entete">
      <tr>
        <th scope="col" class="w-50">Activité</th>
        <th scope="col">Durée</th>
        <th scope="col">MET<span style="font-size: 11px">(moyen)</span></th>
        <th scope="col">MET<span style="font-size: 11px">(réél)</span></th>
        <th scope="col">Calorie</th>
        <th scope="col" style="width: 50px;"></th>
      </tr>
      </thead>
      <tbody id="contenu">

      <tr v-for="(act, key) in activites">
        <td>{{ act.nom }}</td>
        <td class="text-center">{{ act.duree }}</td>
        <td class="text-center">{{ act.met }}</td>
        <td class="text-center">8,0</td>
        <td class="text-center">175,2</td>
        <td><button class="btn-delete" @click="deleteActivites(act.id,key)">X</button></td>
      </tr>

      </tbody>
    </table>
</template>

<script type="application/javascript">
import axios from "axios";

export default {
  name: "CustomTable",
  data: () => ({
    activites : []
  }),
  created() {
    window.addEventListener("resize", this.resizeTab);
  },
  destroyed() {
    window.removeEventListener("resize", this.resizeTab);
  },
  async mounted() {

    const instance = this
    this.$root.$on('updateActivity', function(e){
      instance.updateActivites(e);
      instance.resizeTab();
    })

    await this.getActivites();
    this.resizeTab();
  },
  methods: {
    resizeTab() {
      var thead = document.getElementById("entete");
      var tbody = document.getElementById("contenu");
      var trhead = thead.children[0].children;

      // Parcours toutes les lignes du tableau
      for(var j=0;j<tbody.children.length;j++)
      {
        // Taille de chaque case d'entete
        for(var i=0;i<trhead.length;i++)
        {
          tbody.children[j].children[i].style = 'width: '+(trhead[i].getBoundingClientRect().width)+'px';
        }
      }
    },

    async getActivites() {
      let {data} = await axios.get('api/activites')
      this.activites = data;
    },

    updateActivites(activite) {
      this.activites.push(activite)
      this.$root.$emit('updateValues', this.activites);
    },

    deleteActivites(id, index)
    {
      let activite = {
        id: id,
      };

      axios.create().post('api/activites/delActivites', activite).then((response) => {
        this.activites.splice(index,1);
      })
    }
  }
}
</script>

<style scoped>

.btn-delete
{
  border: none;
  background: none;
  color: red;
  font-weight: bold;
}

table,
thead,
tbody,
tr {
  display: block;
}
tr {
  display: table;
  table-layout: fixed;
  width:100%;
}

tbody {
  overflow-x: hidden;
  overflow-y: auto;
  scrollbar-width: thin; /* Firefox */
  /*height: 90%;*/ /* TODO A changer ? */
  height: 400px;
}

/* ScrollBar */
/* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}
/*          */

</style>