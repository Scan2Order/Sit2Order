<template>
  <div class="card" style="max-width: 35rem">
    <div class="card-body">
      <h5 class="card-title text-center">User</h5>
      <p
        class="card-text text-center"
        style="font-weight: bolder; font-size: 2rem"
      >
        {{ totalUser }}
      </p>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },

  props: ["totalUser"],
};
</script>

<style scoped>
.card {
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.178), 0 10px 10px rgba(0, 0, 0, 0.123);
  background: rgba(255, 255, 255, 0.274);
  border: none;
  margin-left: 2rem;
  box-shadow: none;
}
</style>
