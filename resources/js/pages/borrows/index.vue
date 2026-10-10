<script setup lang="ts">
import BorrowCard from "@/components/borrow/BorrowCard.vue";
import FilterByType from "@/components/global/FilterByType.vue";
import SearchByDate from "@/components/global/SearchByDate.vue";
import Button from "@/components/ui/button/Button.vue";
import Input from "@/components/ui/input/Input.vue";
import borrows from "@/routes/borrows";
import { Borrow } from "@/types/borrow";
import { Head, Link } from "@inertiajs/vue3";
import { Plus } from "@lucide/vue";

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

  <div class="flex h-full flex-col gap-4 overflow-x-auto rounded-xl p-4">
    <!-- Add new borrow button -->
    <div class="flex justify-end items-center">
      <Button>
        <Plus />
        <Link href="#">{{ $t("borrow.new_borrow_btn") }}</Link>
      </Button>
    </div>

    <!-- Document Search -->
    <div
      class="flex flex-wrap justify-between gap-4 flex-col lg:flex-row lg:items-center"
    >
      <!-- Search by date -->
      <SearchByDate />

      <div class="flex gap-4">
        <!-- Search by doc-no -->
        <Input :placeholder="$t('global.search_by_number')" />

        <!-- Filter by type -->
        <FilterByType class="md:flex-1 lg:flex-none" />
      </div>
    </div>

    <!-- Documents -->
    <div
      class="relative min-h-screen grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 2xl:grid-cols-6 gap-4 p-4 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border overflow-hidden"
    >
      <BorrowCard
        v-for="borrow in props.borrows.data"
        :key="borrow.id"
        :borrow="borrow"
      />
    </div>
  </div>
</template>
