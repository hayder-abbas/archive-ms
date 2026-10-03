<script setup lang="ts">
import auditLogs from "@/routes/audit-logs";
import { AuditLogs } from "@/types/auditlog";
import { Head } from "@inertiajs/vue3";

defineOptions({
  layout: {
    breadcrumbs: [
      {
        title: "AuditLogs",
        href: auditLogs.index(),
      },
    ],
  },
});

const props = defineProps<{ auditLogs: { data: AuditLogs[] } }>();
</script>

<template>
  <Head title="AuditLogs" />

  <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
    <div
      class="relative min-h-screen flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
    >
      <div v-for="log in props.auditLogs.data" :key="log.id">
        <pre>{{ log }}</pre>
      </div>
    </div>
  </div>
</template>
