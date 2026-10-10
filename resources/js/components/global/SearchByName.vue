<script setup lang="ts">
import Input from "../ui/input/Input.vue";
</script>

<template>
  <div>
    <Input modelValue="name" :placeholder="$t('global.search_by_name')" />
  </div>
</template>
