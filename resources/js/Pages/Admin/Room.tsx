import React, { useState } from 'react'
import Layout from "@/Layouts/Layout"
import { DataTable } from '../Components/DataTable';
import type { Room as RoomType} from '../Interfaces/Room';
import { RoomColumns } from '../Components/RoomColumns';

interface RoomProps {
  rooms: RoomType[];
}


const Room = ({ rooms }: RoomProps) => {
  const [roomList, setRoomList] = useState<RoomType[]>(rooms);
  return (
    <div className='w-full h-full bg-white shadow-sm rounded-2xl p-4'>
      <DataTable columns={RoomColumns} data={roomList || []} filterLabel={"room name"} filterColumn={"name"} createUrl={'/admin/rooms/create'}/>
    </div>
  )
}

Room.layout = (page: React.ReactNode) => <Layout title={'Rooms'}>{page}</Layout>
export default Room
