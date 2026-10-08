<script setup lang="ts">
import { ref } from "vue";
import { router, usePage } from "@inertiajs/vue3";
import { loadLanguageAsync } from "laravel-vue-i18n";
import SetLocaleContruller from "@/actions/App/Http/Controllers/Settings/SetLocaleContruller";

const page = usePage();
const locale = page.props.locale as string;
const selectedLocale = ref(locale);
const locales = [
  { code: "en", label: "English" },
  { code: "ar", label: "العربية" },
];

const selectLocale = (code: string) => {
  router.visit(SetLocaleContruller.url(), {
    method: "put",
    data: {
      locale: code,
    },
  });

  loadLanguageAsync(code);
  selectedLocale.value = code;
  window.location.reload();
};
</script>

<template>
  <div class="flex justify-between items-center">
    <button
      v-for="l in locales"
      @click="selectLocale(l.code)"
      class="border rounded-md px-2 py-1 hover:bg-background"
    >
      {{ l.label }}
    </button>
  </div>
</template>
