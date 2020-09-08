<template>
  <div>
    <table class="table table-dark">
      <tbody>
        <tr>
          <td>{{id}}</td>
          <td>{{name}}</td>
          <td>{{email}}</td>
          <td>{{gender}}</td>
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

  props: ["user"],
};
</script>