<template>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ name }}</h5>
      <p class="card-text">{{ description }}</p>
      <p class="card-text">RM {{ String(price) }}</p>
      <a href="{{ route('Restaurant.addToCart', ['id' => $product->id])}}">
        <button class="btn btn-primary btn-sm">Add To Cart</button>
      </a>
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
