<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import { dashboard } from "@/routes";
</script>

<template>
  <Head :title="$t('home.title')">
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
        class="flex flex-col gap-4 items-center shadow-2xl p-4 rounded-lg w-full max-w-3xl"
      >
        <h1 class="font-bold text-3xl">{{ $t("home.title") }}</h1>
        <p class="text-slate-800 text-xl mb-6">
          {{ $t("home.description") }}
        </p>
        <Link
          :href="dashboard()"
          class="bg-primary text-primary-foreground px-6 py-2 rounded-md hover:opacity-90"
        >
          {{ $t("home.accessing_btn") }}
        </Link>
      </div>
    </main>
  </div>
</template>
