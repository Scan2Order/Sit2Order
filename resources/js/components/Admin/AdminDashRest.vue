<template>
  <div>
    <table class="table table-dark">
      <tbody>
        <tr>
          <td>{{id}}</td>
          <td>{{name}}</td>
          <td>{{address}}</td>
          <td>{{phone}}</td>
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

  props: ["id", "name", "address", "phone"],
};
</script>