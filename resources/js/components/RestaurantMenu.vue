<template>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title" style="font-weight: bolder;">{{ name }}</h5>
      <p class="card-text" style="color: #969696">{{ description }}</p>
      <p class="card-text" style="font-weight: bold;">RM {{ String(price) }}</p>
      <a href="#" class="stretched-link"></a>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log(this.products);
  },

  props: ["name", "description", "price", "categories"],
};
</script>

<style scoped>
    .card {
        margin-bottom: 0.25rem;
        display: flex;
        background: rgba(255, 255, 255, 0.37);
        box-shadow: 0 19px 38px rgba(0, 0, 0, 0.034), 0 15px 12px rgba(0, 0, 0, 0.034);
    }


</style>
