<script setup lang="ts">
import borrows from "@/routes/borrows";
import { Borrow } from "@/types/borrow";
import { Head } from "@inertiajs/vue3";

defineOptions({
  layout: {
    breadcrumbs: [
      {
        title: "sidebar.borrows",
        href: borrows.index(),
      },
    ],
  },
});

const props = defineProps<{ borrows: { data: Borrow[] } }>();
</script>

<template>
  <Head :title="$t('sidebar.borrows')" />

  <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
    <div
      class="relative min-h-screen flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
    >
      <div v-for="borrow in props.borrows.data" :key="borrow.id">
        <pre>{{ borrow }}</pre>
      </div>
    </div>
  </div>
</template>
