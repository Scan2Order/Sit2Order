<template>
  <div>
    <table class="table table-dark">
      <tbody>
        <tr>
          <td>{{name}}</td>
          <td>{{description}}</td>
          <td>{{price}}</td>
          <td>{{categories}}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },

  props: ["name", "description", "price", "categories"],
};
</script>