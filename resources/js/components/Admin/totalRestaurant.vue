<template>
  <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{totalRestaurant}}</h5>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },

  props: ["totalRestaurant"],
};
</script>