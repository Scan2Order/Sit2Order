<template>
<div>
 <div class="row d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://i2.wp.com/www.foodrepublic.com/wp-content/uploads/2012/03/033_FR11785.jpg?fit=978%2C650&ssl=1" alt="Card image cap">
        <div class="card-body">
          <h1 class="card-title">{{ categories }}</h1>
            <h5 class="card-title">{{ name }}</h5>
            <p class="card-text">{{ description }}</p>
            <p class="card-text">RM {{ String(price) }}</p>
        </div>
    </div>
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
