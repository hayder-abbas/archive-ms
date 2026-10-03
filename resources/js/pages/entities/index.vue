<script setup lang="ts">
import entities from "@/routes/entities";
import { Entity } from "@/types/entity";
import { Head } from "@inertiajs/vue3";

defineOptions({
  layout: {
    breadcrumbs: [
      {
        title: "Entities",
        href: entities.index(),
      },
    ],
  },
});

const props = defineProps<{ entities: Entity[] }>();
</script>

<template>
  <Head title="Entities" />

  <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
    <div
      class="relative min-h-screen flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
    >
      <div v-for="entity in props.entities" :key="entity.id">
        <pre>{{ entity }}</pre>
      </div>
    </div>
  </div>
</template>
