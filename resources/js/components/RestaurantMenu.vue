<template>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{name}}</h5>
      <p class="card-text">{{description}}</p>
      <p class="card-text">{{String(price)}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log(this.products);
  },

  props: ["name", "description", "price"],
};
</script>
