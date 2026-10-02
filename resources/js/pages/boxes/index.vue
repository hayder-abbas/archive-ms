<script setup lang="ts">
import PlaceholderPattern from "@/components/PlaceholderPattern.vue";
import boxes from "@/routes/boxes";
import { Head } from "@inertiajs/vue3";

defineOptions({
  layout: {
    breadcrumbs: [
      {
        title: "Boxes",
        href: boxes.index(),
      },
    ],
  },
});
</script>

<template>
  <Head title="Boxes" />

  <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
    <div
      class="relative min-h-screen flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
    >
      <PlaceholderPattern />
    </div>
  </div>
</template>
