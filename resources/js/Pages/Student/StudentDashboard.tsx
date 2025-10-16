import Layout from '@/Layouts/Layout'
import { usePage } from '@inertiajs/react'
import React from 'react'

const StudentDashboard = () => {
  return (
    <div>Dashboard</div>
  )
}

StudentDashboard.layout = (page: React.ReactNode) => <Layout title='Student Dashboard'>{page}</Layout>
export default StudentDashboard
