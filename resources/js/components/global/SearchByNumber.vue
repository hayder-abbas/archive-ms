<script setup lang="ts">
import Input from "../ui/input/Input.vue";
</script>

<template>
  <div>
    <Input modelValue="number" :placeholder="$t('global.search_by_number')" />
  </div>
</template>
