import React, { useState } from 'react'
import Layout from "@/Layouts/Layout"
import { DataTable } from '../Components/DataTable';
import { DepartmentColumns } from '../Components/DepartmentColumns';
import type { Department as DepartmentType } from '../Interfaces/Department';

interface DepartmentProps {
  departments: DepartmentType[];
}

const Department = ({ departments }: DepartmentProps) => {
  const [departmentList, setDepartmentList] = useState<DepartmentType[]>(departments);
  return (
    <div className='w-full h-full bg-white shadow-sm rounded-2xl p-4'>
      <DataTable columns={DepartmentColumns} data={departmentList} filterLabel={"name"} filterColumn={"name"} createUrl={'/admin/departments/create'}/>
    </div>
  )
}

Department.layout = (page: React.ReactNode) => <Layout title={'Departments'}>{page}</Layout>
export default Department
