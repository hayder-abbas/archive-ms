<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { Borrow } from "@/types/index.js";
import Card from "../ui/card/Card.vue";
import CardContent from "../ui/card/CardContent.vue";
import CardFooter from "../ui/card/CardFooter.vue";
import Button from "../ui/button/Button.vue";

const props = defineProps<{ borrow: Borrow }>();
</script>

<template>
  <Card>
    <CardContent class="flex flex-col gap-2 text-sm">
      <div class="flex justify-between items-center">
        <div>{{ $t("borrow.lender") }}:</div>
        <div>{{ borrow.lender }}</div>
      </div>

      <div class="flex justify-between items-center">
        <div>{{ $t("borrow.borrower") }}:</div>
        <div>{{ borrow.borrower }}</div>
      </div>

      <div class="flex justify-between items-center">
        <div>{{ $t("borrow.document") }}:</div>
        <div>{{ borrow.docNumber }}</div>
      </div>

      <div class="flex justify-between items-center text-amber-600">
        <div>{{ $t("borrow.date") }}:</div>
        <div>{{ borrow.date }}</div>
      </div>
    </CardContent>

    <CardFooter class="justify-end">
      <Button size="sm" variant="outline" class="w-1/2">
        <Link href="#">{{ $t("global.open_btn") }}</Link>
      </Button>
    </CardFooter>
  </Card>
</template>
