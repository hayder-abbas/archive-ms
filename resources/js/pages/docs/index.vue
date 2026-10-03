<script setup lang="ts">
import docs from "@/routes/docs";
import { Doc } from "@/types/doc";
import { Head } from "@inertiajs/vue3";

defineOptions({
  layout: {
    breadcrumbs: [
      {
        title: "Documents",
        href: docs.index(),
      },
    ],
  },
});

const props = defineProps<{ docs: { data: Doc[] } }>();
</script>

<template>
  <Head title="Entities" />

  <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
    <div
      class="relative min-h-screen flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
    >
      <div v-for="doc in props.docs.data" :key="doc.id">
        <pre>{{ doc }}</pre>
      </div>
    </div>
  </div>
</template>
