import * as React from "react";
import {
    Users,
    Book,
    Building,
    House,
    DoorOpen,
    Calendar1,
    CalendarFold,
} from "lucide-react";
import { NavMain } from "@/components/nav-main";
import { NavUser } from "@/components/nav-user";
import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarHeader,
    SidebarMenuButton,
    SidebarRail,
} from "@/components/ui/sidebar";
import Logo from "@/Pages/Components/Logo";

const data = {
    user: {
        name: "Walter Gagate",
        role: "Admin",
        avatar: "/avatars/shadcn.jpg",
    },
    navMain: [
        // {
        //   title: "Playground",
        //   url: "#",
        //   icon: Book,
        //   isActive: true,
        //   items: [
        //     {
        //       title: "History",
        //       url: "#",
        //     },
        //     {
        //       title: "Starred",
        //       url: "#",
        //     },
        //     {
        //       title: "Settings",
        //       url: "#",
        //     },
        //   ],
        // },
        {
            title: "Dashboard",
            url: "/admin/dashboard",
            icon: House,
        },
        {
            title: "Departments",
            url: "/admin/departments",
            icon: Building,
        },
        {
            title: "Teachers",
            url: "/admin/teachers",
            icon: Users,
        },
        {
            title: "Courses",
            url: "/admin/courses",
            icon: Book,
        },
        {
            title: "Rooms",
            url: "/admin/courses",
            icon: DoorOpen,
        },
        {
            title: "Events",
            url: "/admin/events",
            icon: Calendar1,
        },
    ],
};

export function AppSidebar({ ...props }: React.ComponentProps<typeof Sidebar>) {
    return (
        <Sidebar
            collapsible="icon"
            {...props}
            className="border-none shadow-md"
        >
            <SidebarHeader>
                <SidebarMenuButton size="lg" className="flex items-center">
                    <div className="flex aspect-square size-8 items-center justify-center rounded-lg bg-custom-secondary text-sidebar-primary-foreground">
                        <Logo width={20} height={20} color={'white'} />
                    </div>
                    <div className="grid flex-1 text-left text-sm leading-tight">
                        <span className="truncate font-semibold">SchedAI</span>
                    </div>
                </SidebarMenuButton>
            </SidebarHeader>
            <SidebarContent>
                <NavMain items={data.navMain} />
            </SidebarContent>
            <SidebarFooter>
                <NavUser user={data.user} />
            </SidebarFooter>
            <SidebarRail />
        </Sidebar>
    );
}
