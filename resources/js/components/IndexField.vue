<template>
  <div :class="`text-${field.textAlign}`">
    <IconBoolean :value="field.value" :nullable="field.nullable" />
  </div>
</template>

<script>

export default {
  props: ["resourceName", "field"],
};
</script>
