<template>
    <div class="row panel align-self-center">
        <LeftPanel class="col-3 rounded-left bg-secondary"></LeftPanel>

        <Rightpanel class="col-9 rounded-right bg-light"></Rightpanel>
      <!--
      <Test class="col-9 rounded-right bg-light"></Test>
      -->
    </div>
</template>

<script>
  import LeftPanel from "./LeftPanel.vue"
  import Rightpanel from "./RightPanel";
  import Test from "./Test";

  export default {
    name: "panel",
    components: {
      Test,
      Rightpanel,
      LeftPanel
    }
  }
</script>

<style>

.bg-secondary{
  background-color: #689D9A !important;
}

.panel{
  padding: 0;
  border-radius: 25px;
}

.rounded-left{
  border-radius: 25px 0 0 25px;
}

.rounded-right{
  border-radius: 0 25px 25px 0;
}

</style>