<template>
    <label :for="name">{{ label }}</label>
    <input
        :name="name"
        type="text"
        :value="value"
        @input="handleInput"
    />
</template>
<script>
export default {
  name: "CustomInput",
  props: {
    name: String,
    label: String,
    value: String,
  },
  methods: {
    handleInput(event) {
      this.$emit("input", event.target.value);
    },
  },
};
</script>