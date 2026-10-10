<script setup lang="ts">
import Button from "@/components/ui/button/Button.vue";
import Input from "@/components/ui/input/Input.vue";
import entities from "@/routes/entities";
import { Entity } from "@/types/entity";
import { Head } from "@inertiajs/vue3";
import { Edit, Plus, Trash } from "@lucide/vue";

defineOptions({
  layout: {
    breadcrumbs: [
      {
        title: "sidebar.entities",
        href: entities.index(),
      },
    ],
  },
});

const props = defineProps<{ entities: Entity[] }>();
</script>

<template>
  <Head :title="$t('sidebar.entities')" />

  <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
    <div class="flex justify-end items-center gap-4">
      <!-- Search -->
      <Input :placeholder="$t('global.search_by_name')" />

      <!-- New Entity Button -->
      <Button><Plus />{{ $t("entity.new_entity") }}</Button>
    </div>

    <div
      class="relative min-h-screen p-4 flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
    >
      <!-- Entities Table -->
      <div>
        <table class="w-full">
          <thead class="border-b">
            <tr class="grid grid-cols-12 pb-2">
              <th class="col-span-1">#</th>
              <th class="col-span-7">{{ $t("entity.entity_name") }}</th>
              <th class="col-span-4">{{ $t("entity.actions") }}</th>
            </tr>
          </thead>

          <tbody class="block pb-4">
            <tr
              v-for="(entity, index) in props.entities"
              :key="entity.id"
              class="grid grid-cols-12 py-2 border-b leading-7"
            >
              <td class="col-span-1 text-center">{{ index + 1 }}</td>
              <td class="col-span-7">{{ entity.name }}</td>
              <td class="col-span-4 text-center space-x-2">
                <Button variant="outline" size="sm">
                  <Edit />
                  {{ $t("global.edit_btn") }}
                </Button>
                <Button variant="destructive" size="sm">
                  <Trash />
                  {{ $t("global.delete_btn") }}
                </Button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
