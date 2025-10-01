import React from 'react'
import { SidebarProvider } from "@/components/ui/sidebar"
import { AppSidebar } from "@/components/app-sidebar"
import Header from '@/Pages/Components/Header'

interface LayoutProps{
  title: string;
  children: React.ReactNode;
}

const Layout = ({ title, children }: LayoutProps) => {
  return (
    <div className='bg-custom-primary h-screen w-screen'>
      <SidebarProvider>
        <AppSidebar/>
        <main className='w-full p-4'>
          <Header title={title} />
          <div className="body mt-8">
            {children}
          </div>
        </main>
      </SidebarProvider>
    </div>
  )
}

export default Layout
