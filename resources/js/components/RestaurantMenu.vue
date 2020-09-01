<template>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h1 class="card-title">{{ categories }}</h1>
            <h5 class="card-title">{{ name }}</h5>
            <p class="card-text">{{ description }}</p>
            <p class="card-text">RM {{ String(price) }}</p>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log(this.products);
    },

    props: ["name", "description", "price", "categories"]
};
</script>
