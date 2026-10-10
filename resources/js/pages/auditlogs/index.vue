<script setup lang="ts">
import Button from "@/components/ui/button/Button.vue";
import Input from "@/components/ui/input/Input.vue";
import auditLogs from "@/routes/audit-logs";
import { AuditLogs } from "@/types/auditlog";
import { Head } from "@inertiajs/vue3";

defineOptions({
  layout: {
    breadcrumbs: [
      {
        title: "sidebar.audit_logs",
        href: auditLogs.index(),
      },
    ],
  },
});

const props = defineProps<{ auditLogs: { data: AuditLogs[] } }>();
</script>

<template>
  <Head :title="$t('sidebar.audit_logs')" />

  <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
    <div class="flex justify-end items-center gap-4">
      <!-- Search -->
      <Input :placeholder="$t('global.search_by_name')" />
      <Input :placeholder="$t('global.search_by_number')" />

      <!-- Clear Logs -->
      <Button variant="destructive">{{ $t("audit_logs.clear_btn") }}</Button>
    </div>

    <div
      class="relative min-h-screen p-4 flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
    >
      <!-- Logs Table -->
      <div>
        <table class="w-full">
          <thead class="border-b">
            <tr class="grid grid-cols-12 pb-2">
              <th class="col-span-1">#</th>
              <th class="col-span-4">{{ $t("audit_logs.name") }}</th>
              <th class="col-span-2">{{ $t("audit_logs.action") }}</th>
              <th class="col-span-2">{{ $t("audit_logs.document") }}</th>
              <th class="col-span-3">{{ $t("audit_logs.date") }}</th>
            </tr>
          </thead>

          <tbody class="block pb-4 text-sm">
            <tr
              v-for="(audit, index) in props.auditLogs.data"
              :key="audit.id"
              class="grid grid-cols-12 py-2 border-b leading-7"
            >
              <td class="col-span-1 text-center">{{ index + 1 }}</td>
              <td class="col-span-4 text-center">{{ audit.name }}</td>
              <td class="col-span-2 text-center">{{ audit.action }}</td>
              <td class="col-span-2 text-center">{{ audit.docNumber }}</td>
              <td class="col-span-3 text-center">{{ audit.createdAt }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
