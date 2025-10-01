import React from 'react'
import Layout from "@/Layouts/Layout"
import StatusCard from '../Components/StatusCard'
import {
  FaBuilding,
  FaGraduationCap
} from "react-icons/fa";
import { BsDoorOpenFill } from "react-icons/bs";
import { ImUsers } from "react-icons/im";
import { AiFillWarning } from "react-icons/ai";

const AdminDashboard = () => {
  return (
    <div className='status grid grid-cols-2 gap-3 lg:gap-0 lg:flex lg:space-x-3'>
      <StatusCard icon={FaBuilding} label={'Departments'} value={6} href={'/admin/departments'} />
      <StatusCard icon={BsDoorOpenFill} label={'Rooms'} value={30} href={'/admin/rooms'} />
      <StatusCard icon={ImUsers} label={'Instructors'} value={100} href={'/admin/instructors'} />
      <StatusCard icon={FaGraduationCap} label={'Students'} value={1000} href={'/admin/students'} />
      <StatusCard icon={AiFillWarning} label={'Conflicts'} value={5} color={'text-red-500'} href={'/admin/conflicts'} />
    </div>
  )
}

AdminDashboard.layout = (page: React.ReactNode) => <Layout title={'Admin Dashboard'}>{page}</Layout>
export default AdminDashboard
