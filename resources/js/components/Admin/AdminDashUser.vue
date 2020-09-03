<template>
        <tr>
          <th scope="col">{{id}}</th>
          <td>{{name}}</td>
          <td>{{email}}</td>
          <td>{{gender}}</td>
          <td>{{phone}}</td>
        </tr>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },

  props: ["id", "name", "email", "gender", "phone"],
};
</script>

<style>
.my-custom-scrollbar {
    position: relative;
    height: 200px;
    overflow: auto;
    }
.table-wrapper-scroll-y {
    display: block;
    }
</style>