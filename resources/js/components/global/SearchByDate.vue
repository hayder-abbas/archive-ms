<script setup lang="ts">
import Input from "../ui/input/Input.vue";
import Label from "../ui/label/Label.vue";
</script>

<template>
  <div class="space-y-2 md:flex md:gap-2 md:flex-row lg:space-y-0">
    <div class="md:flex-1 space-y-2 lg:flex lg:flex-row lg:gap-2 lg:space-y-0">
      <Label>{{ $t("global.from") }}:</Label>
      <Input :placeholder="$t('global.search_by_date')" />
    </div>

    <div class="md:flex-1 space-y-2 lg:flex lg:flex-row lg:gap-2 lg:space-y-0">
      <Label>{{ $t("global.to") }}:</Label>
      <Input :placeholder="$t('global.search_by_date')" />
    </div>
  </div>
</template>
