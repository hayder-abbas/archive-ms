<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import { dashboard} from "@/routes";
</script>

<template>
  <Head title="Welcome">
    <link rel="preconnect" href="https://rsms.me/" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
  </Head>
  <div
    class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:justify-center lg:p-8 dark:bg-[#0a0a0a]"
  >
    <main
      class="flex w-full items-center justify-center opacity-100 transition-opacity duration-750 lg:grow starting:opacity-0"
    >
      <div
        class="flex flex-col gap-4 items-center shadow-xl p-4 rounded-lg w-full"
      >
        <h1 class="font-bold text-2xl">Archiving system</h1>
        <p class="text-slate-800">
          A system for managing and archiving official documents
        </p>
        <Link
          :href="dashboard()"
          class="bg-primary text-primary-foreground px-4 py-3 rounded-md hover:opacity-90"
        >
          Accessing the system
        </Link>
      </div>
    </main>
  </div>
</template>
