<script setup lang="ts">
import boxes from "@/routes/boxes";
import { Box } from "@/types/box";
import { Head } from "@inertiajs/vue3";

defineOptions({
  layout: {
    breadcrumbs: [
      {
        title: "sidebar.boxes",
        href: boxes.index(),
      },
    ],
  },
});

const props = defineProps<{ boxes: { data: Box[] } }>();
</script>

<template>
  <Head :title="$t('sidebar.boxes')" />

  <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
    <div
      class="relative min-h-screen flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
    >
      <div v-for="box in props.boxes.data" :key="box.id">
        <pre>{{ box }}</pre>
      </div>
    </div>
  </div>
</template>
