import React from 'react'
import { Navigate, Outlet } from 'react-router-dom'
import { useStateContext } from '../contexts/ContextProvider'

type Props = {}

const GuestLayout = (props: Props) => {

  const {token, user} = useStateContext()

  if(token && user) 
    return <Navigate to='/' />

  return (
    <>
      {/* TODO: maybe something will be here, like navbar */}
      <Outlet />
    </>
  )
}

export default GuestLayout