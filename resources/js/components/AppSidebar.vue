<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import {
  FileBox,
  Files,
  HandCoins,
  Landmark,
  LayoutGrid,
  Logs,
  Trash,
} from "@lucide/vue";
import AppLogo from "@/components/AppLogo.vue";
import NavFooter from "@/components/NavFooter.vue";
import NavMain from "@/components/NavMain.vue";
import NavUser from "@/components/NavUser.vue";
import {
  Sidebar,
  SidebarContent,
  SidebarFooter,
  SidebarHeader,
  SidebarMenu,
  SidebarMenuButton,
  SidebarMenuItem,
} from "@/components/ui/sidebar";
import { dashboard } from "@/routes";
import type { NavItem } from "@/types";
import boxes from "@/routes/boxes";
import entities from "@/routes/entities";
import docs from "@/routes/docs";
import borrows from "@/routes/borrows";
import auditLogs from "@/routes/audit-logs";

const mainNavItems: NavItem[] = [
  {
    title: "Dashboard",
    href: dashboard(),
    icon: LayoutGrid,
  },
  {
    title: "Documents",
    href: docs.index(),
    icon: Files,
  },
  {
    title: "Boxes",
    href: boxes.index(),
    icon: FileBox,
  },
  {
    title: "Borrows",
    href: borrows.index(),
    icon: HandCoins,
  },
  {
    title: "Entities",
    href: entities.index(),
    icon: Landmark,
  },
];

const footerNavItems: NavItem[] = [
  {
    title: "Audit Logs",
    href: auditLogs.index(),
    icon: Logs,
  },
  {
    title: "Trash",
    href: "#",
    icon: Trash,
  },
];
</script>

<template>
  <Sidebar collapsible="icon" variant="inset">
    <SidebarHeader>
      <SidebarMenu>
        <SidebarMenuItem>
          <SidebarMenuButton size="lg" as-child>
            <Link :href="dashboard()">
              <AppLogo />
            </Link>
          </SidebarMenuButton>
        </SidebarMenuItem>
      </SidebarMenu>
    </SidebarHeader>

    <SidebarContent>
      <NavMain :items="mainNavItems" />
    </SidebarContent>

    <SidebarFooter>
      <NavFooter :items="footerNavItems" />
      <NavUser />
    </SidebarFooter>
  </Sidebar>
  <slot />
</template>
