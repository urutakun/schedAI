import Layout from '@/Layouts/Layout'
import React from 'react'

const Create = () => {
  return (
    <div>
      Hello World
    </div>
  )
}

Create.layout = (page:React.ReactNode) => <Layout title={'Test Route'}>{page}</Layout>
export default Create
